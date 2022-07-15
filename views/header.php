<!DOCTYPE html>
<html lang="En">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6233882342.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="" href="<?php echo RUTA; ?>/css/estilos.css">

    <title>Blog</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <div class="logo izquierda">
                <p><a href="">INE Blog</a></p>
            </div>

            <div class="derecha">
                <form action="<?php echo RUTA;?>/buscar.php" name="busqueda" class="buscar" method="get">
                <input type="text" name="busqueda" placeholder="Buscar" id="">
                <button type="submit" class="icono fa fa-search"></button>
            </form>

            <nav class="menu">
                <ul>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#">Contacto <i class="fa fa-envelope"></i></a></li>
                    
                </ul>
            </nav>
        </div
            
            </div>
        </div>
    </header>