<?php
require 'admin/config.php';
require 'functions.php';

$conexion = establecerConexion($bd_config);

if (!$conexion) {
  header('Location: error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
  $busqueda = limpiarDatos($_GET['busqueda']);

  $sentencia = $conexion->prepare(
    "SELECT * 
     FROM articulos
     WHERE titulo LIKE :busqueda 
     OR 
     texto LIKE :busqueda"
  );
  $sentencia->execute(array(
    ':busqueda' => "%$busqueda%"
  ));
  $resultado = $sentencia->fetchAll();

  if (empty($resultado)) {
    $titulo = "<h3>No hemos encontrado alguna coincidencia con: $busqueda</h3>";
  }
  else {
    $titulo = "<h3>Coincidencias encontradas con: $busqueda</h3>";

  }


}
else {
  header("Location: " . RUTA . "/index.php");
}

require 'views/buscar.view.php';