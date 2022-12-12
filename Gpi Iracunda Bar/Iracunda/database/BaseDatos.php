<?php
$txtnombre=(isset($_POST['txtnombre']))?$_POST['txtnombre']:"";
$txtcodigo=(isset($_POST['txtcodigo']))?$_POST['txtcodigo']:"";
$txtstock=(isset($_POST['txtstock']))?$_POST['txtstock']:"";
$txtProveedoractual=(isset($_POST['txtProveedoractual']))?$_POST['txtProveedoractual']:"";
$txtPrecio=(isset($_POST['txtPrecio']))?$_POST['txtPrecio']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";
$txtnotificacion=(isset($_POST['txtnotificacion']))?$_POST['txtnotificacion']:"";
$txtventa= (isset($_POST['txtventa']))?$_POST['txtventa']:"";
$txtcompra= (isset($_POST['txtcompra']))?$_POST['txtcompra']:"";

$host="localhost";
$bd="iracunda";
$usuario="root";
$contraseña="";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contraseña );


} catch (Exception $ex) {
    echo $ex->getmessage();
}

switch($accion){
     case "Agregar":
        $sentenciaSQL= $conexion->prepare("INSERT INTO inventario (nombre,codigo,stock,Proveedoractual,Precio,notificacion) VALUES (:nombre,:codigo,:stock,:Proveedoractual,:Precio,:notificacion);");
        $sentenciaSQL->bindparam(':nombre',$txtnombre);
        $sentenciaSQL->bindparam(':codigo',$txtcodigo);
        $sentenciaSQL->bindparam(':stock',$txtstock);
        $sentenciaSQL->bindparam(':Proveedoractual',$txtProveedoractual);
        $sentenciaSQL->bindparam(':Precio',$txtPrecio);
        $sentenciaSQL->bindparam(':notificacion',$txtnotificacion);
        $sentenciaSQL->execute();
    break; 


     case "Modificar":

      $sentenciaSQL= $conexion->prepare("UPDATE inventario SET stock=:stock WHERE codigo=:codigo");
      $sentenciaSQL->bindparam(':stock',$txtstock);
      $sentenciaSQL->bindparam(':codigo',$txtcodigo);
      $sentenciaSQL->execute();

      $sentenciaSQL= $conexion->prepare("UPDATE inventario SET Proveedoractual=:Proveedoractual WHERE codigo=:codigo");
      $sentenciaSQL->bindparam(':Proveedoractual',$txtProveedoractual);
      $sentenciaSQL->bindparam(':codigo',$txtcodigo);
      $sentenciaSQL->execute();

      $sentenciaSQL= $conexion->prepare("UPDATE inventario SET Precio=:Precio WHERE codigo=:codigo");
      $sentenciaSQL->bindparam(':Precio',$txtPrecio);
      $sentenciaSQL->bindparam(':codigo',$txtcodigo);
      $sentenciaSQL->execute();

      $sentenciaSQL= $conexion->prepare("UPDATE inventario SET notificacion=:notificacion WHERE codigo=:codigo");
      $sentenciaSQL->bindparam(':notificacion',$txtnotificacion);
      $sentenciaSQL->bindparam(':codigo',$txtcodigo);
      $sentenciaSQL->execute();


    break;


    case "Vender":
        $sentenciaSQL=$conexion->prepare("SELECT * FROM inventario WHERE codigo=:codigo");
        $sentenciaSQL->bindparam(':codigo', $txtcodigo);
        $sentenciaSQL->execute();
        $Base=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
        $a=$Base['stock'];
        $sentenciaSQL= $conexion->prepare("UPDATE inventario SET stock=:stock WHERE codigo=:codigo");
        $venta = $a - $txtventa;
        $sentenciaSQL->bindparam(':stock',$venta);
        $sentenciaSQL->bindparam(':codigo',$txtcodigo);
        $sentenciaSQL->execute();
    break;

    case "Comprar":
        $sentenciaSQL=$conexion->prepare("SELECT * FROM inventario WHERE codigo=:codigo");
        $sentenciaSQL->bindparam(':codigo', $txtcodigo);
        $sentenciaSQL->execute();
        $Base=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
        $a=$Base['stock'];
        $sentenciaSQL= $conexion->prepare("UPDATE inventario SET stock=:stock WHERE codigo=:codigo");
        $compra = $a + $txtcompra;
        $sentenciaSQL->bindparam(':stock',$compra);
        $sentenciaSQL->bindparam(':codigo',$txtcodigo);
        $sentenciaSQL->execute();
    break;

    case "Borrar":
        $sentenciaSQL=$conexion->prepare("DELETE FROM inventario WHERE codigo=:codigo");
        $sentenciaSQL->bindparam(':codigo', $txtcodigo);
        $sentenciaSQL->execute();
        break;

    case "Seleccionar":
        $sentenciaSQL=$conexion->prepare("SELECT * FROM inventario WHERE codigo=:codigo");
        $sentenciaSQL->bindparam(':codigo', $txtcodigo);
        $sentenciaSQL->execute();
        $Base=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
        $txtnombre=$Base['nombre'];
        $txtstock=$Base['stock'];
        $txtProveedoractual=$Base['Proveedoractual'];
        $txtPrecio=$Base['Precio'];
    break;
}

$sentenciaSQL=$conexion->prepare("SELECT * FROM inventario");
$sentenciaSQL->execute();
$total=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);



?>