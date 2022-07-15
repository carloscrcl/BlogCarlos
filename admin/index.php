<?php
// archivo index del admin

session_start();
require 'config.php';
require '../functions.php';

$conexion = establecerConexion($bd_config);

comprobarSesion();

if (!$conexion) {
  header('Location: ../error.php');
}

$posts = obtener_post($conexion, $blog_config['post_por_pagina']);

require '../views/admin.index.view.php';