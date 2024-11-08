<h1 class="nombre-pagina">Reestablecer Password</h1>
<p class="descripcion-pagina">A continuación coloca tu nuevo Password</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<?php if($error) return; ?>
<form class="formulario" method="POST">
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" placeholder="Tu nuevo Password" name="password" id="password">
    </div>
    <input type="submit" class="boton" value="Guardar nuevo Password">
</form>

<div class="acciones">
    <a href="/" class="descripcion-texto">¿Ya tiene cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta" class="descripcion-texto">¿Aún no tienes una cuenta? Crea una</a>
</div>