<?php 
ModificarProducto($_POST['idprof'],$_POST['nombre'],$_POST['email'],sha1($_POST['contra']),$_POST['cedula'],$_POST['telefono'], $_POST['ubicacion'] );

function ModificarProducto($idprofesor_table,$nombre,$email,$contra,$cedula,$telefono,$ubicacion){
    include ("conexion.php");
    $sentencia="UPDATE profesor_table SET nombre='$nombre', email='$email', contra='$contra',cedula='$cedula',telefono='$telefono',ubicacion='$ubicacion' where idprofesor_table='$idprofesor_table'";
    $result=mysqli_query($conn,$sentencia);

    echo "<script>
    alert('El cambio ha sido realizado exitosamente');
    window.location = './modificar_usuario.php';
 </script>";
    
}