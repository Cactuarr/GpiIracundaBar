<?php
$txtidp=(isset($_POST['txtidp']))?$_POST['txtidp']:"";
$txtnombre=(isset($_POST['txtnombre']))?$_POST['txtnombre']:"";
$txtcorreo=(isset($_POST['txtcorreo']))?$_POST['txtcorreo']:"";
$txttelefono=(isset($_POST['txttelefono']))?$_POST['txttelefono']:"";
$txtlikert=(isset($_POST['txtlikert']))?$_POST['txtlikert']:"";
$txtnota=(isset($_POST['txtnota']))?$_POST['txtnota']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";
$uno=(isset($_POST['uno']))?$_POST['uno']:"";
$dos=(isset($_POST['dos']))?$_POST['dos']:"";
$tres=(isset($_POST['tres']))?$_POST['tres']:"";
$cuatro=(isset($_POST['cuatro']))?$_POST['cuatro']:"";
$cinco=(isset($_POST['cinco']))?$_POST['cinco']:"";
$txtbanco=(isset($_POST['txtbanco']))?$_POST['txtbanco']:"";
$txtcuenta=(isset($_POST['txtcuenta']))?$_POST['txtcuenta']:"";
$txtnumerocuenta=(isset($_POST['txtnumerocuenta']))?$_POST['txtnumerocuenta']:"";

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
        $sentenciaSQL= $conexion->prepare("INSERT INTO proveedores (idp,nombre,correo,telefono,likert,banco,cuenta,numerocuenta,nota) VALUES (:idp,:nombre,:correo,:telefono,:likert,:banco,:cuenta,:numerocuenta,:nota);");
        $sentenciaSQL->bindparam(':idp',$txtidp);
        $sentenciaSQL->bindparam(':nombre',$txtnombre);
        $sentenciaSQL->bindparam(':correo',$txtcorreo);
        $sentenciaSQL->bindparam(':telefono',$txttelefono);
        $totallikert='1';
        if ($uno=="si" ) {
          $totallikert=$totallikert+'1';
        }
        if ($dos=="si" ) {
            $totallikert=$totallikert+'1';
          }
          if ($tres=="si" ) {
            $totallikert=$totallikert+'1';
          }
          if ($cuatro=="si" ) {
            $totallikert=$totallikert+'1';
          }
          if ($cinco=="si" ) {
            $totallikert=$totallikert+'1';
          }
            if ($totallikert=='1') {
                $txtlikert = "Nada satisfecho";
            }

            if ($totallikert=='2') {
                $txtlikert = "Poco satisfecho";
            }

            if ($totallikert=='3') {
                $txtlikert = "Neutral";
            }

            if ($totallikert=='4') {
                $txtlikert = "Muy satisfecho";
            }
        if ($totallikert>='5') {
            $txtlikert = "totalmente satisfecho";
        }
        $sentenciaSQL->bindparam(':likert',$txtlikert);
        $sentenciaSQL->bindparam(':banco',$txtbanco);
        $sentenciaSQL->bindparam(':cuenta',$txtcuenta);
        $sentenciaSQL->bindparam(':numerocuenta',$txtnumerocuenta);
        $sentenciaSQL->bindparam(':nota',$txtnota);
        $sentenciaSQL->execute();
    break; 


     case "Modificar":

      $sentenciaSQL= $conexion->prepare("UPDATE proveedores SET correo=:correo WHERE idp=:idp");
      $sentenciaSQL->bindparam(':correo',$txtcorreo);
      $sentenciaSQL->bindparam(':idp',$txtidp);
      $sentenciaSQL->execute();

      $sentenciaSQL= $conexion->prepare("UPDATE proveedores SET telefono=:telefono WHERE idp=:idp");
      $sentenciaSQL->bindparam(':telefono',$txttelefono);
      $sentenciaSQL->bindparam(':idp',$txtidp);
      $sentenciaSQL->execute();

      $sentenciaSQL= $conexion->prepare("UPDATE proveedores SET likert=:likert WHERE idp=:idp");
      $totallikert='1';
      if ($uno=="si" ) {
        $totallikert=$totallikert+'1';
      }
      if ($dos=="si" ) {
          $totallikert=$totallikert+'1';
        }
        if ($tres=="si" ) {
          $totallikert=$totallikert+'1';
        }
        if ($cuatro=="si" ) {
          $totallikert=$totallikert+'1';
        }
        if ($cinco=="si" ) {
          $totallikert=$totallikert+'1';
        }
          if ($totallikert=='1') {
              $txtlikert = "Nada satisfecho";
          }

          if ($totallikert=='2') {
              $txtlikert = "Poco satisfecho";
          }

          if ($totallikert=='3') {
              $txtlikert = "Neutral";
          }

          if ($totallikert=='4') {
              $txtlikert = "Muy satisfecho";
          }
      if ($totallikert>='5') {
          $txtlikert = "Totalmente satisfecho";
      }
      $sentenciaSQL->bindparam(':likert',$txtlikert);
      $sentenciaSQL->bindparam(':idp',$txtidp);
      $sentenciaSQL->execute();

      $sentenciaSQL= $conexion->prepare("UPDATE proveedores SET banco=:banco WHERE idp=:idp");
      $sentenciaSQL->bindparam(':banco',$txtbanco);
      $sentenciaSQL->bindparam(':idp',$txtidp);
      $sentenciaSQL->execute();

      $sentenciaSQL= $conexion->prepare("UPDATE proveedores SET cuenta=:cuenta WHERE idp=:idp");
      $sentenciaSQL->bindparam(':cuenta',$txtcuenta);
      $sentenciaSQL->bindparam(':idp',$txtidp);
      $sentenciaSQL->execute();

      $sentenciaSQL= $conexion->prepare("UPDATE proveedores SET numerocuenta=:numerocuenta WHERE idp=:idp");
      $sentenciaSQL->bindparam(':numerocuenta',$txtnumerocuenta);
      $sentenciaSQL->bindparam(':idp',$txtidp);
      $sentenciaSQL->execute();

      $sentenciaSQL= $conexion->prepare("UPDATE proveedores SET nota=:nota WHERE idp=:idp");
      $sentenciaSQL->bindparam(':nota',$txtnota);
      $sentenciaSQL->bindparam(':idp',$txtidp);
      $sentenciaSQL->execute();

    break;

    case "Borrar":
        $sentenciaSQL=$conexion->prepare("DELETE FROM proveedores WHERE idp=:idp");
        $sentenciaSQL->bindparam(':idp', $txtidp);
        $sentenciaSQL->execute();
        break;

    case "Seleccionar":
        $sentenciaSQL=$conexion->prepare("SELECT * FROM proveedores WHERE idp=:idp");
        $sentenciaSQL->bindparam(':idp', $txtidp);
        $sentenciaSQL->execute();
        $Base=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
        $txtnombre=$Base['nombre'];
        $txtcorreo=$Base['correo'];
        $txttelefono=$Base['telefono'];
        $txttelefono=$Base['telefono'];
        $txtnota=$Base['nota'];
    break;
}

$sentenciaSQL=$conexion->prepare("SELECT * FROM proveedores");
$sentenciaSQL->execute();
$total=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);



?>