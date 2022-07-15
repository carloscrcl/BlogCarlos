<?php require 'header.php'?>
<div class="contenedor">
  <div class="post">
    <article>
      <h2 class="titulo"><?php echo utf8_encode( $post['titulo']) ;?></h2>
      <p class="fecha"><?php echo fecha($post['fecha']) ;?></p>
      <div class="thumb">
        <a href="">
          <img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['id'] ;?>.png" alt="<?php echo $post['titulo'] ;?>">
        </a>
      </div>
      <p class="extracto">
        <?php echo $post['extracto'] ;?>

      </p>
      <p class="extracto"><?php echo nl2br($post['texto'])  ;?></p>

    </article>
  </div>



</div>

<?php require 'footer.php'?>