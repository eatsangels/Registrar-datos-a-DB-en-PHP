<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar registro</title>

    <?php include 'buscador_datos.php'; ?>
    <?php include 'styles.php'; ?>
   
</head>


<body>
    <h1>Buscar en los Registros</h1>
    <form method="GET" action="buscador_datos.php"> <!-- Asegúrate de que el archivo de acción sea el correcto -->
        <input type="text" name="search" placeholder="Buscar...">
        <button class ="btn" type="submit">Buscar</button>
    </form>
</body>
</html>