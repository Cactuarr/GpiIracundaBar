<?php
$txtidhorario=(isset($_POST['txtidhorario']))?$_POST['txtidhorario']:"";
$txtnombreproveedor=(isset($_POST['txtnombreproveedor']))?$_POST['txtnombreproveedor']:"";
$txtfechapago=(isset($_POST['txtfechapago']))?$_POST['txtfechapago']:"";
$txtmontopago=(isset($_POST['txtmontopago']))?$_POST['txtmontopago']:"";
$txtnotapago=(isset($_POST['txtnotapago']))?$_POST['txtnotapago']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

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
        $sentenciaSQL= $conexion->prepare("INSERT INTO horario (idhorario,nombreproveedor,fechapago,montopago,notapago) VALUES (:idhorario,:nombreproveedor,:fechapago,:montopago,:notapago);");
        $sentenciaSQL->bindparam(':idhorario',$txtidhorario);
        $sentenciaSQL->bindparam(':nombreproveedor',$txtnombreproveedor);
        $sentenciaSQL->bindparam(':fechapago',$txtfechapago);
        $sentenciaSQL->bindparam(':montopago',$txtmontopago);
        $sentenciaSQL->bindparam(':notapago',$txtnotapago);
        $sentenciaSQL->execute();
    break; 


     case "Modificar":

      $sentenciaSQL= $conexion->prepare("UPDATE horario SET fechapago=:fechapago WHERE idhorario=:idhorario");
      $sentenciaSQL->bindparam(':fechapago',$txtfechapago);
      $sentenciaSQL->bindparam(':idhorario',$txtidhorario);
      $sentenciaSQL->execute();

      $sentenciaSQL= $conexion->prepare("UPDATE horario SET montopago=:montopago WHERE idhorario=:idhorario");
      $sentenciaSQL->bindparam(':montopago',$txtmontopago);
      $sentenciaSQL->bindparam(':idhorario',$txtidhorario);
      $sentenciaSQL->execute();

      $sentenciaSQL= $conexion->prepare("UPDATE horario SET notapago=:notapago WHERE idhorario=:idhorario");
      $sentenciaSQL->bindparam(':notapago',$txtnotapago);
      $sentenciaSQL->bindparam(':idhorario',$txtidhorario);
      $sentenciaSQL->execute();

    break;

    case "Borrar":
        $sentenciaSQL=$conexion->prepare("DELETE FROM horario WHERE idhorario=:idhorario");
        $sentenciaSQL->bindparam(':idhorario', $txtidhorario);
        $sentenciaSQL->execute();
        break;

    case "Seleccionar":
        $sentenciaSQL=$conexion->prepare("SELECT * FROM horario WHERE idhorario=:idhorario");
        $sentenciaSQL->bindparam(':idhorario', $txtidhorario);
        $sentenciaSQL->execute();
        $Base=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
        $txtnombreproveedor=$Base['nombreproveedor'];
        $txtfechapago=$Base['fechapago'];
        $txtmontopago=$Base['montopago'];
        $txtmontopago=$Base['montopago'];
        $txtnotapago=$Base['notapago'];
    break;
}

$sentenciaSQL=$conexion->prepare("SELECT * FROM horario");
$sentenciaSQL->execute();
$total=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);



?>