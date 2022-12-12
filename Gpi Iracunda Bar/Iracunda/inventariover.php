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
							<div class="mdl-tooltip" for="btn-exit">Desconectarse</div>
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
				<div class="table-responsive">
					<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
						<thead>
							<tr>
								<th class="mdl-data-table__cell--non-numeric">Nombre</th>
								<th class="mdl-data-table__cell--non-numeric">Codigo</th>
								<th class="mdl-data-table__cell--non-numeric">Stock</th>
								<th class="mdl-data-table__cell--non-numeric">Proveedor Actual</th>
								<th class="mdl-data-table__cell--non-numeric">Precio/Unidad</th>
								<th class="mdl-data-table__cell--non-numeric">Eliminar</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($total as $inventario) { ?>
							<tr>
								<td class="mdl-data-table__cell--non-numeric"><?php echo $inventario['nombre'] ?></td>
								<td class="mdl-data-table__cell--non-numeric"><?php echo $inventario['codigo'] ?></td></td>
								<td class="mdl-data-table__cell--non-numeric"><?php echo $inventario['stock'] ?></td></td>
								<td class="mdl-data-table__cell--non-numeric"><?php echo $inventario['Proveedoractual'] ?></td></td>
								<td class="mdl-data-table__cell--non-numeric">$ <?php echo $inventario['Precio'] ?></td></td>
								<td class="mdl-data-table__cell--non-numeric">
                      <form method="post">

                       <input type="hidden" name="txtcodigo" id="txtcodigo" value=<?php echo $inventario['codigo']  ?>>

                       <input class="borrar" type="submit" name="accion" value="Borrar" >


                       <?php if($inventario['stock'] < $inventario['notificacion']){ echo "<input type='button'  value='Renovar Stock!'onclick='save()'> ";}  ?>

                      </form>
                </td>
							</tr>
							<?php } ?>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
</body>
</html>