<?php require 'header.php'?>
<div class="contenedor">
  <div class="post">
    <article>
      <h2 class="titulo">Iniciar Sesión</h2>
      <form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <input type="text" name="usuario" placeholder="usuario"
          value="<?php if(isset($_POST['usuario'])) echo $_POST['usuario'] ;?>">
        <input type="password" name="pass" placeholder="constraseña">
        <input type="submit" value="Iniciar Sesión">
      </form>

    </article>
  </div>
  <ul>
    <?php if(isset($error)): 
      echo $error;
    endif;?>
  </ul>

</div>

<?php require 'footer.php'?>