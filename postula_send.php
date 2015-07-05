<?php
session_start();
$load = false;
$error_message = '';
$success_message = '';

if($_POST) {
	if ($_FILES['cv']['error'] > 0)
	{
		$error_message = 'Hubo un error al obtener el archivo, intentelo de nuevo';
	}
	else if ($_FILES['cv']['type'] == 'application/msword' || $_FILES['cv']['type'] == 'application/pdf' || $_FILES['cv']['type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')
	{
		$upload_dir = 'uploads/'.time().'_';
		$args = array(
			'nombres' => FILTER_SANITIZE_STRING,
			'correo' => FILTER_VALIDATE_EMAIL,
			'dni' => FILTER_SANITIZE_STRING,
			'telefono' => FILTER_VALIDATE_INT,
			'mensaje' => FILTER_SANITIZE_STRING
		);
		$values = filter_input_array(INPUT_POST, $args);

		if (move_uploaded_file($_FILES['cv']['tmp_name'], $upload_dir.$_FILES['cv']['name'])) {
			if($values['nombres'] === '' && count($values['nombres']) > 2)
			{
				$error_message = 'Su nombre y apellido es requerido';
			}
			else if (!$values['correo'])
			{
				$error_message = 'El email ingresado es incorrecto';
			}
			else if($values['telefono'] !== '' && !$values['telefono'])
			{
				$error_message = 'Solo se permite numeros';
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
					$mail->FromName = 'Contactopm.com';

					$body = '<h2>De: '.$values['nombres'].'</h2>'
							.'<ul><li>Correo electrónico: '.$values['correo'].'</li>'
							.'<li>Tel&eacute;fono: '.$values['telefono'].'</li>'
							.'<li>DNI: '.$values['dni'].'</li>'
							.'<li>Mensaje: <br><p>'.$values['mensaje'].'</p></li></ul>';

					$text_body = 'De: '.$values['nombres']."\n\n"
							.'Correo electrónico: '.$values['correo']."\n"
							.'Telefono: '.$values['telefono']."\n"
							.'DNI: '.$values['dni']."\n"
							.'Mensaje: '.$values['mensaje'];

				    $mail->Subject = 'Envio de CV desde la Web de contactopm';
					$mail->Body    = $body;
				    $mail->AltBody = $text_body;
				    $mail->addAddress('larriega@gmail.com', 'Oscar Larriega');
				    $mail->addAddress($values['correo'], $values['nombres']);
				    $mail->AddAttachment($upload_dir.$_FILES['cv']['name'], $_FILES['cv']['name']);
				    // $mail->AddCC('dbecerra@artedangi.com');
				    // $mail->addStringAttachment($row['photo'], 'YourPhoto.jpg');

				    if($mail->send())
				    {
				    	$success_message = 'Gracias por registrarte';
				    	$load = true;
				    }
				    else
				    {
				    	$error_message = 'Ups.. no se pudo enviar el correo a esta direccion: "'.$values['correo'].'", intentelo de nuevo';
				    }

				    // Clear all addresses and attachments for next loop
				    $mail->clearAddresses();
				} catch (phpmailerException $e) {
					$error_message = $e->getMessage();
				}
			}
		} else {
			$error_message = 'Ups... no se pudo procesar el archivo adjuntado, intentelo de nuevo';
		}
	} else {
		$error_message = 'El tipo de archivo soportado debe ser word, pdf';
	}
} else {
	$error_message = 'Petición inválida';
}
if ($error_message != '') {
	$_SESSION['ERROR_MESSAGE'] = $error_message;
} else if ($success_message != '') {
	$_SESSION['SUCCESS_MESSAGE'] = $success_message;
} else {
	$_SESSION['ERROR_MESSAGE'] = 'Sucedió un error inesperado';
}
header('location: ' . $_SERVER['HTTP_REFERER']);
