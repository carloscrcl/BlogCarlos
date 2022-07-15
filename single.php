<?php
require 'admin/config.php';
require 'functions.php';
$conexion = establecerConexion($bd_config);
$id = idPost($_GET['id']);
if(!$conexion){
    header('Location: error.php');
}
if(empty($id)){
    header('Location: index.php');
}
$post = obtener_post_por_id($conexion, $id);

if(!$post){
    header('Location: index.php');
}

$post = $post[0];


require 'views/single.view.php';