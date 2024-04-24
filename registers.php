<?php

// Activar la visualización de errores
ini_set('display_errors', 1);
error_reporting(E_ALL);

include "con_db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $telefono = trim($_POST['telefono'] ?? '');
    $comentario = isset($_POST['comentario']) ? trim($_POST['comentario']) : ''; // Verifica si comentario está seteado

    if (strlen($name) >= 1 && strlen($email) >= 1 && strlen($telefono) >= 10 && str_word_count($comentario) <= 2000) {
        if (!preg_match('/^\d{10,}$/', $telefono)) {
            echo '<h3 class="bad">¡El número de teléfono debe contener al menos 10 dígitos y solo números!</h3>';
        } else {
            $fechareg = date("Y-m-d H:i:s");
            $consulta = "INSERT INTO datos (nombre, email, telefono, fecha_reg, comentario) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($consulta);
            $stmt->bind_param("sssss", $name, $email, $telefono, $fechareg, $comentario);
            $resultado = $stmt->execute();

            if ($resultado) {
                echo '<h3 class="ok">¡Registro exitoso!</h3>';
                echo '<script>setTimeout(function(){ window.location.href = "index.php"; }, 2000);</script>';
            } else {
                echo '<h3 class="bad">¡Error al registrarse!</h3>';
            }
        }
    } else {
        echo '<h3 class="bad">¡Por favor rellena todos los campos correctamente y asegúrate de que el comentario no exceda las 2000 palabras! y el campo telefono tenga al menos 10 dígitos</h3>';
    }
}
?>