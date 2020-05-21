<?php

// Info base de datos
$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "sistemasolar";

// Pillar valores
$nombre = $_REQUEST['nombre'];

// Conectarme a la base de datos
$connect = mysqli_connect($servidor, $usuario, $clave, $bd);

// Query para insertar y ejecucion
if (empty($nombre)) {

} else {
   // Query para insertar y ejecucion para eliminar
   $query="DELETE FROM `planeta` WHERE `planeta`.`nombre` = 'Mercurio';";
   $result = mysqli_query($connect, $query);
}
?>
?>

<!doctype html>
<html>

<head>
   <meta charset="utf-8">
   <title>Eliminar planeta</title>

   <style>
      body {
         background-color: beige;
      }

      h1 {
         color: black;
         font-family: Georgia, serif;
      }

      h2 {
         color: black;
         font-family: Georgia, serif;
      }

      p {
         color: black;
         font-family: Georgia, serif;
      }
   </style>

</head>

<body>

   <h1>EL SISTEMA SOLAR</h1>
   <h2>Identifica un nuevo planeta:</h2>

   <form method="post" action="eliminar.php">
      <p>
         <label for="nombre">Introduce el nombre del planeta que quieres eliminar:</label>
         <input type="text" name="nombre" id="nombre" />
      </p>
      <p>
         <input type="submit" value="Eliminar planeta">
      </p>
   </form>

   <form method="post" action="index.php">
      <input type="submit" value="Atrás">
   </form>

</body>

</html>