<?php
include 'con_db.php'; // Incluir el archivo de conexión
include 'styles.php';


?>

<div class="navbar">
    <a href="index.php">Inicio</a>
    <a href="consulta_datos.php">Consultar Datos</a>
    <a href="buscar.php">Buscar</a>
</div>

<?php



$sql = "SELECT id, nombre, email, telefono, comentario, Hora FROM datos ORDER BY id DESC"; // Ordena por ID descendent; // SQL query
$result = $conn->query($sql); // Ejecutar la consulta

if ($result->num_rows > 0) {
    // Mostrar datos de cada fila
    echo "<table border='1'><tr><th>ID</th><th>Nombre</th><th>Email</th><th>Teléfono</th><th>Comentarios</th><th>Fecha y Hora</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["nombre"]."</td><td>".$row["email"]."</td><td>".$row["telefono"]."</td><td>".$row["comentario"]."</td><td>".$row["Hora"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}
$conn->close(); // Cerrar la conexión
?>
