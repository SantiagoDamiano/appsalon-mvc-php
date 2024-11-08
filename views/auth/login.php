<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" placeholder="Tu Email" name="email" id="email">
    </div>
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" placeholder="Tu Password" name="password" id="password">
    </div>

    <input type="submit" class="boton" value="Iniciar Sesión">
</form>

<div class="acciones">
    <a href="/crear-cuenta" class="descripcion-texto">¿Aún no tienes una cuenta? Crea una</a>
    <a href="/olvide" class="descripcion-texto">Olvide mi Password</a>
</div>

