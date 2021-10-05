<?php
//Arrancamos la sesión
session_start();
$_SESSION['email'];

if (session_destroy()) {
echo "<script>
    window.location = '../index.php';
    history.forward()
    </script>";
 
} else {
    echo "Error al destruir la sesión";
}

?>