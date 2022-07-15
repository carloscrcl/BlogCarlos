<?php require 'header.php'?>
<div class="contenedor">

  <div class="post">
    <article>
      <h2 class="titulo">Nuevo Articulo</h2>
      <div class="contentImage">
        <img src="" alt="" id="img-previa">
      </div>
      <form class="formulario" method="POST" action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>"
        enctype="multipart/form-data">
        <div class="file_select">
          <input class="files" type="file" name="thumb" placeholder="thumb" onchange="vistaPrevia(event)">
        </div>
        <input type="text" name="titulo" placeholder="titulo del articulo">
        <input type="text" name="extracto" placeholder="Extracto">

        <textarea name="texto" rows="10" cols="" placeholder="Texto del articulo"> </textarea>
        <input type="submit" value="Agregar">
      </form>

    </article>
  </div>

</div>

<?php require 'footer.php'?>