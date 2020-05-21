<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "sistemasolar";

// Comprobando conexion
if (strlen($usuario) > 0 && strlen($bd) > 0) {
   $mysqli = @mysqli_connect($servidor, $usuario, $clave);

   if (mysqli_connect_errno($mysqli)) {

      echo "<br>Fallo al conectar a Mysql: " . mysqli_connect_error() . " " .
         mysqli_connect_errno($mysqli) . "<br>";
      die("<br>Fallo en la conexión");
   } else {
      echo ("<br>$usuario Te has conectado a MYSQL <br>");

      if (!$mysqli->select_db($bd))
         echo ("<br>No existe la BBDD  $bd");
      else
         echo ("<br>Conectado a $bd");
   }
} else echo ("<br>ERROR: FALTA EL USUARIO O LA BASE DE DATOS");
