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


      // Creacion BD
      $consulta = "CREATE DATABASE IF NOT EXISTS sistemasolar";
      $mysqli->query($consulta);

      // Seleccionar BD
      $mysqli->select_db("sistemasolar");

      // Introduccion de planeta
      $consulta = "CREATE TABLE IF NOT EXISTS planeta
      (nombre VARCHAR(45) NOT NULL PRIMARY KEY,
      diametro FLOAT NOT NULL,
      periodoOrbital FLOAT NOT NULL,
      sateliteNatural INT NOT NULL,
      masa FLOAT NOT NULL)";
      $mysqli->query($consulta);

      // Introduccion de estrella
      $consulta = "CREATE TABLE IF NOT EXISTS estrella
      (nombre VARCHAR(45) NOT NULL PRIMARY KEY,
      tamanyo FLOAT NOT NULL,
      anyo FLOAT NOT NULL,
      nombrePlaneta VARCHAR(45) NOT NULL)";
      $mysqli->query($consulta);

      echo "<br>Base de datos sistemasolar creada con éxito.";


      if (!$mysqli->select_db($bd))
         echo ("<br>No existe la BBDD  $bd");
      else
         echo ("<br>Conectado a $bd");
   }
} else echo ("<br>ERROR: FALTA EL USUARIO O LA BASE DE DATOS");
?>

<html>
   <body>
   <form method="post" action="index.php">
      <input type="submit" value="Atrás">
   </form>
   </body>
</html>