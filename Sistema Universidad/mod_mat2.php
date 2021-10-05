<?php 
ModificarProducto($_POST['idmateria_table'],$_POST['nombre'],$_POST['aula'],$_POST['hora'],$_POST['codigo']);

function ModificarProducto($idmateria_table,$nombre,$aula,$hora,$codigo){
    include ("conexion.php");
    $sentencia="UPDATE materia_table SET nombre='$nombre', aula='$aula', hora='$hora',codigo='$codigo' where idmateria_table='$idmateria_table'";
    $result=mysqli_query($conn,$sentencia);
  

   echo "<script>
    alert('El cambio ha sido realizado exitosamente');
    window.location = './modificar_usuario.php';
 </script>";
    
}