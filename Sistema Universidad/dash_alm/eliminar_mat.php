<?php
EliminarEst($_GET['data']);

function EliminarEst($idalumnos){
   
    include ("conexion.php");
    $sentencia="DELETE FROM materia_alumno_table where idmateria_alumno='$idalumnos'";
    $result=mysqli_query($conn,$sentencia);

 

    echo "<script>
    alert('La materia ha sido eliminada');
    window.location = './horario.php';
 </script>";

  
}
?>