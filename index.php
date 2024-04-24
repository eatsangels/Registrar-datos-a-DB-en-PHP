<!DOCTYPE html>
<html>
<head>
    <title>Registrar usuario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'styles.php'; ?>
</head>

<hgroup>
<body>
    <form  method="post">
        <h1>!Suscribete</h1>
        <input type="text" name="name" placeholder="Nombre Completo">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" name="register">
        
    </form>

  

</hgroup>
<?php require_once("registers.php");; ?>
</body>
</html>