<?php
if($_POST){
           if(($_POST['usuario']=="")&&($_POST['contraseña']==""))
             header('location:/gpi/inventariover.php') && $_SESSION['a']='1';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="css/login.css">

</head>
<body>

    <div class="login">
      <img class="avatar" src="assets/img/logo.png" alt="logo">
      <h1> Iracunda Bar </h1>

      <form method="POST">

        <label for="Usuario">Usuario</label>
        <input type="text" name="usuario"  placeholder="Ingrese su usuario">

        <label for="Clave">Clave</label>
        <input type="password" name="contraseña" placeholder="Ingrese su clave">

        <input type="submit" value="Ingresar">

      </form>

    </div>

</body>
</html>