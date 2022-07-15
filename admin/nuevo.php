<?php
session_start();

require 'config.php';
require '../functions.php';

comprobarSesion();
$conexion = establecerConexion($bd_config);

if (!$conexion) {
  header('Location: ../error.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $titulo = limpiarDatos($_POST['titulo']);
  $extracto = limpiarDatos($_POST['Extracto']);
  $texto = $_POST['texto'];
  $thumb = $_FILES['thumb']['tmp_name'];
  $nombreArchivo = $_FILES['thumb']['name'];

  $archivoSubido = '../' . $blog_config['carpeta_imagenes'] . $nombreArchivo;

  move_uploaded_file($thumb, $archivoSubido);

  $sentencia = $conexion->prepare(
    "INSERT INTO articulos (id, titulo, extracto, texto, thumb)
    VALUES (null, :titulo, :extracto, :texto, :thumb )"
  );
  $sentencia->execute(array(
    ":titulo" => $titulo,
    ":extracto" => $extracto,
    ":texto" => $texto,
    ":thumb" => $nombreArchivo
  ));
  header('Location:' . RUTA . '../');

}


require '../views/nuevo.view.php';