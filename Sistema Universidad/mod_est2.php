<?php 
ModificarProducto($_POST['idalumnos'],$_POST['nombre'],$_POST['email'],sha1($_POST['contra']),$_POST['cedula'],$_POST['telefono'], $_POST['ubicacion'] );

function ModificarProducto($idalumnos,$nombre,$email,$contra,$cedula,$telefono,$ubicacion){
    include ("conexion.php");
    $sentencia="UPDATE alumno_table SET nombre='$nombre', email='$email', contra='$contra',cedula='$cedula',telefono='$telefono',ubicacion='$ubicacion' where idalumnos='$idalumnos'";
    $result=mysqli_query($conn,$sentencia);

    echo "<script>
    alert('El cambio ha sido realizado exitosamente');
    window.location = './modificar_usuario.php';
 </script>";
    
}