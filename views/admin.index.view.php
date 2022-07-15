<?php require '../views/header.php'?>
<div class="contenedor">
  <h2 class="titulo">Panel de Control</h2>
  <a href="nuevo.php" class="btn">Nuevo post</a>
  <a href="../admin/cerrar.php" class="btn">Cerrar sesión</a>
  <?php foreach ($posts as $post) :?>
  <div class="post">
    <article>
      <h2 class="titulo"><?php echo $post['id'] . '.-  ' .utf8_encode ($post['titulo'] )?></h2>
      <a href="Editar.php?id=<?php echo $post['id'];?>" class="admin">Editar</a>
      <a href="modificar.php?id=<?php echo $post['id'];?>" class="admin">modificar</a>
      <a href="eliminar.php?id=<?php echo $post['id'];?>" class="admin">Eliminar</a>

    </article>
  </div>
  <?php endforeach; ?>

  <?php require '../paginacion.php'?>
</div>

<?php require '../views/footer.php'?>