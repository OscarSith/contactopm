<?php
session_start();

$load = false;
$message = '';

if($_POST) {
	$args = array(
		'nombres' => FILTER_SANITIZE_STRING,
		'correo' => FILTER_VALIDATE_EMAIL,
		'dni' => FILTER_SANITIZE_STRING,
		'telefono' => FILTER_SANITIZE_STRING,
		'mensaje' => FILTER_SANITIZE_STRING,
		'fast_message' => FILTER_SANITIZE_STRING,
	);
	$values = filter_input_array(INPUT_POST, $args);

	if(strlen($values['nombres']) < 4)
	{
		$message = 'Su nombre y apellido es requerido';
	}
	else if (!$values['correo'])
	{
		$message = 'El email ingresado es incorrecto';
	}
	else if($values['telefono'] === '')
	{
		$message = 'Su número de teléfono es requerido';
	}
	else
	{
		require 'mailer/PHPMailerAutoload.php';

		try {
			$mail = new PHPMailer();

			$mail->isSMTP();
			$mail->SMTPAuth = true;
			$mail->Host = 'smtp.mandrillapp.com';
			$mail->Username = 'larriega@gmail.com';
			$mail->Password = '';
			$mail->SMTPSecure = 'tls';
			$mail->CharSet = 'UTF-8';
			$mail->Port = 587;

			$mail->From     = 'no-reply@contactopm.com';
			$mail->FromName = 'contactopm.com';

			$body = '<h2>De: '.$values['nombres'].'</h2>'
					.'<ul><li>Correo electrónico: '.$values['correo'].'</li>'
					.'<li>DNI: '.$values['dni'].'</li>'
					.'<li>Tel&eacute;fono: '.$values['telefono'].'</li>'
					.'<li>Mensaje<p>'. $values['mensaje'] .'</p></li></ul>';

			$text_body = 'De: '.$values['nombres']."\n\n"
					.'Correo electrónico: '.$values['correo']."\n"
					.'DNI: '.$values['dni']."\n"
					.'Teléfono: '.$values['telefono']."\n"
					."Mensaje\n". $values['mensaje'];

			$mail->Subject = 'Mensaje enviado desde la web www.contactopm.com';
			$mail->Body    = $body;
		    $mail->AltBody = $text_body;
		    $mail->addAddress('larriega@gmail.com', 'Oscar Larriega');
		    $mail->addAddress($values['correo'], $values['nombres']);
		    // $mail->AddCC('dantebecerra2013@artedangi.com');

		    if($mail->send())
		    {
		    	$message = 'Tu mensaje ha sido enviado.';
		    	$load = true;
		    }
		    else
		    {
		    	$message = 'Ups.. no se pudo enviar el correo, intentelo de nuevo';
		    }

		    // Clear all addresses and attachments for next loop
		    $mail->clearAddresses();
		} catch (phpmailerException $e) {
			$message = $e->getMessage();
		}
	}
	
} else {
	$message = 'Petición inválida';
}

if (isset($values['fast_message'])) {
	$_SESSION['MESSAGE_TOP'] = $message;
} else {
	$_SESSION['MESSAGE'] = $message;
}

header('location: '.$_SERVER['HTTP_REFERER']);