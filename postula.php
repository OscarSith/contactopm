<?php include 'tpl/header.tpl.php' ?>
<section class="content-page">
	<div id="servicios">
		<h2 class="page-header">¿BUSCAS TRABAJO?</h2>
		<div class="row">
			<div class="col-sm-6">
				<h4>Oportunidades Laborales</h4>
				<p class="text-justify">Bienvenido al sistema de Oportunidades Laborales de Contacopm. Busca resultados según tus preferencias y encuentra el trabajo ideal para ti. Postula al empleo y nos pondremos en contacto contigo. ¡Gracias por confiar en nosotros!</p>
				<img src="img/postula.jpg" alt="Imagen Postula" class="img-responsive" style="margin-top:50px">
			</div>
			<div class="col-sm-6">
				<form action="postula_send.php" method="post" class="form-horizontal" enctype="multipart/form-data">
					<?php if (isset($_SESSION['SUCCESS_MESSAGE'])): ?>
						<div class="alert alert-success alert-dismissible fade in" role="alert">
							<?php echo $_SESSION['SUCCESS_MESSAGE'] ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?php unset($_SESSION['SUCCESS_MESSAGE']) ?>
					<?php endif ?>
					<div class="form-group">
						<label for="" class="control-label col-sm-4">Nombres y Apellidos</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="nombres">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label col-sm-4">Correo</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="correo">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label col-sm-4">DNI</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="dni">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label col-sm-4">Teléfono</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="telefono">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label col-sm-4">C.V.</label>
						<div class="col-sm-8">
							<input type="file" class="form-control" name="cv">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label col-sm-4">Mensaje</label>
						<div class="col-sm-8">
							<textarea name="mensaje" id="mensaje" cols="30" rows="6" class="form-control"></textarea>
						</div>
					</div>
					<div class="form-group">
						<?php if (isset($_SESSION['ERROR_MESSAGE'])): ?>
						<div class="alert alert-danger alert-dismissible fade in" role="alert">
							<?php echo $_SESSION['ERROR_MESSAGE'] ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?php unset($_SESSION['ERROR_MESSAGE']) ?>
					<?php endif ?>
					</div>
					<div class="col-sm-offset-4">
						<button class="btn btn-danger">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<?php include 'tpl/footer.tpl.php' ?>