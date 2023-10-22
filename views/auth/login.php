<main class="auth">
  <h2 class="auth__heading"><?php echo $titulo; ?></h2>
  <p class="auth__texto">Inicia sesion en DevWebCamp</p>

  <?php
    require_once __DIR__ . '/../templates/alertas.php'
  ?>

  <form method="POST" action="/login" class="formulario">

    <div class="formulario__campo">
      <label for="email" class="formulario__label">Correo Electronico</label>
      <input type="email" class="formulario__input" name="email" id="email" placeholder="Tu Correo Electronico">
    </div>

    <div class="formulario__campo">
      <label for="password" class="formulario__label">Contraseña</label>
      <input type="password" class="formulario__input" name="password" id="password" placeholder="Tu contraseña">
    </div>

    <input type="submit" class="formulario__submit" value="Iniciar Sesion">

  </form>

  <div class="acciones">
    <a href="/registro" class="acciones__enlace">¿Aun no tienes una cuenta? Obtener una</a>
    <a href="/olvide" class="acciones__enlace">¿Olvidaste tu contraseña?</a>
  </div>

</main>