<?php
require 'admin/config.php';
require 'functions.php';

$conexion = establecerConexion($bd_config);

if(!$conexion){
    header('Location: error.php');
}else{
    // echo paginaActual();
    $posts = obtener_post($conexion, $blog_config['post_por_pagina']);
    
    if(!$posts){
        header('Location: error.php');
    }
}


require 'views/index.view.php'; 