<?php

// Info base de datos
$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "sistemasolar";

// Pillar valores
$nombre = $_REQUEST['nombre'];
$diametro = $_REQUEST['diametro'];
$periodoOrbital = $_REQUEST['periodoOrbital'];
$sateliteNatural = $_REQUEST['sateliteNatural'];
$masa = $_REQUEST['masa'];

// Conectarme a la base de datos
$connect = mysqli_connect($servidor, $usuario, $clave, $bd);

// Query para insertar y ejecucion para insetar
if (empty($nombre) || empty($diametro) || empty($periodoOrbital) || empty($sateliteNatural) || empty($masa)) {
	
}else{
	$query = "INSERT INTO `planeta` (`nombre`, `diametro`, `periodoOrbital`, `sateliteNatural`, `masa`) VALUES ('$nombre', '$diametro', '$periodoOrbital', '$sateliteNatural', '$masa');";
   $result = mysqli_query($connect, $query);
}
?>

<!doctype html>
<html>

<head>
   <meta charset="utf-8">
   <title>Insertar planeta</title>

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

   <form method="post" action="insertar.php">
      <p>
         <label for="nombre">Nombre:</label>
         <input type="text" name="nombre" id="nombre" />
      </p>
      <p>
         <label for="diametro">Diámetro ecuatorial en KM: </label>
         <input type="number" name="diametro" id="diametro" />
      </p>
      <p>
         <label for="periodoOrbital">Periodo orbital:</label>
         <input type="number" name="periodoOrbital" id="periodoOrbital" />
      </p>
      <p>
         <label for="sateliteNatural">Satelites naturales:</label>
         <input type="number" name="sateliteNatural" id="sateliteNatural" />
      </p>
      <p>
         <label for="masa">Masa:</label>
         <input type="number" name="masa" id="masa" />
      </p>
      <p>
         <input type="submit" value="Registrar planeta">
      </p>
   </form>

   <form method="post" action="index.php">
      <input type="submit" value="Atrás">
   </form>

</body>

</html>