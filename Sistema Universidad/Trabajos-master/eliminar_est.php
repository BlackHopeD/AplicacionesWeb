<?php
EliminarEst($_GET['data']);

function EliminarEst($idalumnos){
   
    include ("conexion.php");
    $sentencia="DELETE FROM alumno_table where idalumnos='$idalumnos'";
    $result=mysqli_query($conn,$sentencia);

 

    echo "<script>
    alert('El usuario ha sido eliminado');
    window.location = './modificar_usuario.php';
 </script>";

  
}
?>