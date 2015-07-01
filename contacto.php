<?php include 'tpl/header.tpl.php' ?>
<section class="content-page">
	<div id="servicios">
		<h3 class="page-header">CONTACTANOS</h3>
		<div class="row">
			<div class="col-sm-6">
				<form action="#" class="form-horizontal" id="frm-contact">
					<div class="form-group">
						<label for="" class="control-label col-sm-4">Nombres</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="nombres" required>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label col-sm-4">Correo</label>
						<div class="col-sm-8">
							<input type="email" class="form-control" name="correo" required>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label col-sm-4">DNI</label>
						<div class="col-sm-8">
							<input type="email" class="form-control" name="dni" required>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label col-sm-4">Teléfono</label>
						<div class="col-sm-8">
							<input type="email" class="form-control" name="telefono">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label col-sm-4" required>Mensaje</label>
						<div class="col-sm-8">
							<textarea class="form-control" name="mensaje" style="height: 90px"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-8">
							<button class="btn btn-danger">Enviar</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-6 text-justify" style="padding-bottom: 40px">
				<p>Muchas gracias por ponerte en contacto con Contactopm, Completa el formulario y te haremos llegar información sobre nuestros servicios y responder tu comentario.</p>
				<p>Uno de los miembros de nuestro equipo dará respuesta a tus consultas lo más pronto posible.</p>
				<br>
				<img src="img/contacto.jpg" alt="" class="img-responsive pull-right">
			</div>
		</div>
	</div>
</section>
<?php include 'tpl/footer.tpl.php' ?>