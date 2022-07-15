<?php

function establecerConexion($datosDB)
{
    try {
        $conexion = new PDO(
            "mysql:host=localhost:3307; 
            dbname=" . $datosDB['baseDatos'],
            $datosDB['usuario'],
            $datosDB['pass']
            );

        return $conexion;

    }
    catch (PDOexception $e) {
        return false;
    }
}

function limpiarDatos($texto)
{
    return $texto = htmlspecialchars(stripcslashes(trim($texto)));
}

function paginaActual()
{
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtener_post($conexion, $postPorPagina)
{
    $inicio = (paginaActual() > 1) ? (paginaActual() * $postPorPagina) - $postPorPagina : 0;
    $sentencia = $conexion->prepare(
        "SELECT SQL_CALC_FOUND_ROWS * 
         FROM articulos
         LIMIT $inicio, $postPorPagina"
    );
    $sentencia->execute();
    return $sentencia->fetchAll();

}

function idPost($id)
{
    return (int)limpiarDatos($id);
}

function obtener_post_por_id($conexion, $id)
{
    $resultado = $conexion->query(
        "SELECT * 
        FROM articulos
        WHERE id = $id
        LIMIT 1"
    );
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function fecha($fecha)
{
    $timeStamp = strtotime($fecha);
    $meses = ["enero", "Febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
    $dia = date('d', $timeStamp);
    $mes = date('m', $timeStamp) - 1;
    $year = date('Y', $timeStamp);

    return $fecha = "$dia de $meses[$mes] del $year ";
}


function numeroPaginas($post_por_pagina, $conexion)
{
    $total_post = $conexion->prepare(
        "SELECT FOUND_ROWS() as total"
    );
    $total_post->execute();
    $total_post = $total_post->fetch()['total'];

    return $numeroPaginas = ceil($total_post / $post_por_pagina);
}

function comprobarSesion()
{
    if (!isset($_SESSION['admin'])) {
        header('Location: ' . RUTA . '/login.php');
    }
}