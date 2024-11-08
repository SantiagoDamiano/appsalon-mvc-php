<h1 class="nombre-pagina">Olvide mi Password</h1>
<p class="descripcion-pagina">Reestablece tu Password escribiendo tu email a continuación</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<form class="formulario" method="POST" action="/olvide">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" placeholder="Tu Email" name="email" id="email">
    </div>
    <input type="submit" class="boton" value="Enviar Instrucciones">
</form>

<div class="acciones">
    <a href="/" class="descripcion-texto">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta" class="descripcion-texto">¿Aún no tienes una cuenta? Crea una</a>
</div>