<?php
include "con_db.php";

if (isset($_POST['register']))
 {
    if (strlen($_POST['name']) >=  1 && strlen($_POST['email']) >= 1) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO datos (nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
        
        $resultado = mysqli_query($conn,$consulta);

        // Limpiar los campos
        $_POST['name'] = "";
        $_POST['email'] = "";


        

        if ($resultado) {
            ?>
                <h3 class="ok">!Registro exitoso</h3>
                
            <?php

            // Redirigir a la página de inicio luego de 2 segundos
        header("Refresh: 2; url=index.php");
        }
    
        else {
            ?>
                <h3 class="bad">!Error al registrarse</h3>
            <?php
        }

    } else {
        ?>
            <h3 class="bad">!Por favor rellena todos los campos</h3>
        <?php
    }
    
}



?>

