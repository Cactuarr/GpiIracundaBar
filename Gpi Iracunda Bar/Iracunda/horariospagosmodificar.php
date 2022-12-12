<?php include("./database/BaseDatoshorario.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Iracunda Bar</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/mainorange.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="js/main.js" ></script>
</head>
<body>

	<!-- navLateral -->
	<?php include("./Funciones/navlateral.php"); ?>
	<!-- pageContent -->
	<section class="full-width pageContent">
		
		<!-- navBar -->
		<div class="full-width navBar">
			<div class="full-width navBar-options">
				<i class="zmdi zmdi-swap btn-menu" id="btn-menu"></i>	
				<div class="mdl-tooltip" for="btn-menu">Esconder / mostrar menu</div>
				<nav class="navBar-options-list">
					<ul class="list-unstyle">
						<li class="btn-exit" id="btn-exit">
							<i class="zmdi zmdi-power"></i>
							<div class="mdl-tooltip" for="btn-exit">LogOut</div>
						</li>
						<li class="text-condensedLight noLink" ><small>Administracion</small></li>
						<li class="noLink">
							<figure>
								<img src="assets/img/logo.png" alt="Avatar" class="img-responsive">
							</figure>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="full-width divider-menu-h"></div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">

			<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-content">
							<form method="POST" enctype="multipart/form-data">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Id del Pago a modificar
							</div>
							<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield">
											<select class="mdl-textfield__input" type="text" name="txtidhorario" id="txtidhorario">
													<option value="" disabled="" selected="">Seleccione el pago a modificar</option>
													<?php foreach($total as $horario) { ?>
													<option value="<?php echo $horario['idhorario'] ?>"><?php echo $horario['nombreproveedor'] ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
											<div class="full-width panel-tittle bg-primary text-center tittles">
								Modificar Pago
							</div>									
										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
										</div>										
										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="datetime-local" name="txtfechapago" id="txtfechapago">
											</div>
										</div>
										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" name="txtmontopago" id="txtmontopago">
												<label class="mdl-textfield__label" for="StrockProduct">Nuevo monto a pagar</label>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" name="txtnotapago" id="txtnotapago">
												<label class="mdl-textfield__label" for="StrockProduct">Modificar Nota</label>
											</div>
										</div>


  									<p class="text-center">
										<button type="submit" name="accion" value="Modificar" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addProduct">
											<i class="zmdi zmdi-plus"></i>
										</button>
									</p>
  

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
</body>
</html>