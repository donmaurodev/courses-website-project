<main class="auth">
  <h2 class="auth__heading"><?php echo $titulo; ?></h2>
  <p class="texto">Registrate en DevWebCamp</p>

  <?php
    require_once __DIR__ . '/../templates/alertas.php'
  ?>

  <form method="POST" action="/registro" class="formulario">

    <div class="formulario__campo">
      <label for="nombre" class="formulario__label">Nombre</label>
      <input
        type="text"
        class="formulario__input"
        name="nombre"
        id="nombre"
        placeholder="Tu nombre"
        value="<?php echo $usuario->nombre; ?>"
      >
    </div>

    <div class="formulario__campo">
      <label for="apellido" class="formulario__label">Apellido</label>
      <input type="text" class="formulario__input" name="apellido" id="apellido" placeholder="Tu apellido" value="<?php echo $usuario->apellido; ?>">
    </div>


    <div class="formulario__campo">
      <label for="email" class="formulario__label">Correo Electronico</label>
      <input type="email" class="formulario__input" name="email" id="email" placeholder="Correo Electronico" value="<?php echo $usuario->email; ?>">
    </div>

    <div class="formulario__campo">
      <label for="password" class="formulario__label">Contraseña</label>
      <input type="password" class="formulario__input" name="password" id="password" placeholder="Contraseña">
    </div>

    <div class="formulario__campo">
      <label for="password2" class="formulario__label">Repetir Contraseña</label>
      <input type="password" class="formulario__input" name="password2" id="password2" placeholder="Repetir contraseña">
    </div>

    <input type="submit" class="formulario__submit" value="Crear Cuenta">

  </form>

  <div class="acciones">
    <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Iniciar sesion</a>
    <a href="/olvide" class="acciones__enlace">¿Olvidaste tu contraseña?</a>
  </div>

</main>