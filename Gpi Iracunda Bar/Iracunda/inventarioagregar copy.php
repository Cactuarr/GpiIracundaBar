<?php include("./database/BaseDatos.php"); ?>

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
	<link rel="stylesheet" href="css/mainblue.css">
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
			<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				<a href="#tabNewProduct" class="mdl-tabs__tab is-active">Nuevo</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Agregar Productos
							</div>
							<div class="full-width panel-content">
							<form method="POST" enctype="multipart/form-data">
<div class = "form-group">
  <input type="hidden" class="mdl-textfield__label" value="<?php echo $txtId; ?>" name="txtId" id="txtId" placeholder="Id">
</div>

										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" name="txtnombre" id="txtnombre">
												<label class="mdl-textfield__label" for="StrockProduct">Nombre del Producto</label>
											</div>
										</div>										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" name="txtcodigo" id="txtcodigo">
												<label class="mdl-textfield__label" for="StrockProduct">Codigo del producto</label>
											</div>
										</div>										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" name="txtstock" id="txtstock">
												<label class="mdl-textfield__label" for="StrockProduct">Cantidad del Producto</label>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" name="txtProveedoractual" id="txtProveedoractual">
												<label class="mdl-textfield__label" for="StrockProduct">Proveedor del Producto</label>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" name="txtPrecio" id="txtPrecio">
												<label class="mdl-textfield__label" for="StrockProduct">Precio por Unidad</label>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" name="txtnotificacion" id="txtnotificacion">
												<label class="mdl-textfield__label" for="StrockProduct">Cantidad minima para mostrar notificacion</label>
											</div>
										</div>


  									<p class="text-center">
										<button type="submit" name="accion" value="Agregar" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addProduct">
											<i class="zmdi zmdi-plus"></i>
										</button>
										<div class="mdl-tooltip" for="btn-addProduct">Añadir producto</div>
									</p>
  

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>
	
</body>
</html>