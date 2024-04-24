<!DOCTYPE html>
<html>
<head>
    <title>Registrar usuario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'styles.php'; ?>
</head>

<hgroup>

<div class="navbar">
    <a href="index.php">Inicio</a>
    <a href="consulta_datos.php">Consultar Datos</a>
    <a href="buscar.php">Buscar</a>
</div>

<body>
 
    <form  method="post">
        <h1>¡Suscribete!</h1>
        <input type="text" name="name" placeholder="Nombre Completo">
        <input type="email" name="email" placeholder="Email">
        <input type = "telefono " name="telefono" placeholder="Telefono">
        <textarea name="comentario" placeholder="Ingresa tu comentario aquí..." maxlength="12000" required></textarea>
        <input type="submit" name="register">
        
    </form>

  

</hgroup>
<?php require_once("registers.php");; ?>

</body>


</html>