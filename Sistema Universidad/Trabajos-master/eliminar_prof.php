<?php
EliminarProfesor($_GET['data']);

function EliminarProfesor($idprofesor_table){
   
    include ("conexion.php");
    $sentencia="DELETE FROM profesor_table where idprofesor_table='$idprofesor_table'";
    $result=mysqli_query($conn,$sentencia);

  

    echo "<script>
    alert('El usuario ha sido eliminado');
    window.location = './modificar_usuario.php';
 </script>";

  
}
?>