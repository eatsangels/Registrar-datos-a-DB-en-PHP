<?php
include 'con_db.php'; // Incluye tu script de conexión a la base de datos
include 'styles.php'; // Incluye los estilos CSS
$search = $_GET['search'] ?? ''; // Obtén el término de búsqueda del formulario
?>
<div class="navbar">
    <a href="index.php">Inicio</a>
    <a href="consulta_datos.php">Consultar Datos</a>
    <a href="buscar.php">Buscar</a>
</div>

<?php

if (!empty($search)) {
    $search = $conn->real_escape_string($search); // Limpia el término de búsqueda para evitar inyecciones SQL
    $query = "SELECT id, nombre, email, telefono, comentario, Hora FROM datos WHERE nombre LIKE '%$search%'"; // Consulta SQL que busca coincidencias

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Nombre</th><th>Email</th><th>Teléfono</th><th>comentario</th><th>Fecha de Registro</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["email"] . "</td><td>" . $row["telefono"] . "</td><td>" . $row["comentario"] . "</td><td>" . $row["Hora"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo '<h3 class="bad_search">¡No se encontraron los datos en la busqueda!</h3>';
    }
} else {
    echo  '<h3 class="bad_search">¡Por favor ingresa un término de búsqueda!</h3>';
}
$conn->close();
?>
