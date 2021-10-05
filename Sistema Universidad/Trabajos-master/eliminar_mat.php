<?php
EliminarProfesor($_GET['data']);

function EliminarProfesor($idmateria_table){
   
    include ("conexion.php");
    $sentencia="DELETE FROM materia_table where idmateria_table='$idmateria_table'";
    $result=mysqli_query($conn,$sentencia);

  

    echo "<script>
    alert('El usuario ha sido eliminado');
    window.location = './modificar_usuario.php';
 </script>";

  
}
?>