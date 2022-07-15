<?php session_start();
require 'admin/config.php';
require 'functions.php';
$error = '';

//Validamos si se estan recibiendo los datos por medio de POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $usuario = limpiarDatos($_POST['usuario']);
  $pass = limpiarDatos($_POST['pass']);
  if (empty($_POST['usuario'])) {
    $error .= "<li> Se requiere del usuario</li>";
  }

  if (empty($_POST['pass'])) {
    $error .= "<li> Se requiere contraseña</li>";
  }

  // print_r($_POST);
  if ($usuario == $blog_admin['usuario'] && $pass == $blog_admin['pass']) {
    $_SESSION['admin'] = $blog_admin['usuario'];
    header('Location:' . RUTA . '/admin');
  }
  else {
    $error .= "<li> El Usuario y/o contraseña no son validos </li>";
  }
}


require 'views/login.view.php'; 