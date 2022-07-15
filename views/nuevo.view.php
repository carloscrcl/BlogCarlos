<?php require 'header.php'?>
<div class="contenedor">

  <div class="post">
    <article>
      <h2 class="titulo">Nuevo Articulo</h2>
      <form class="formulario" method="POST" action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>"
        enctype="multipart/form-data">
        <input type="file" name="thumb" placeholder="thumb">
        <input type="text" name="titulo" placeholder="titulo del articulo">
        <input type="text" name="extracto" placeholder="Extracto">

        <textarea name="texto" rows="10" cols="" placeholder="Texto del articulo"> </textarea>
        <input type="submit" value="Agregar">
      </form>

    </article>
  </div>

</div>

<?php require 'footer.php'?>