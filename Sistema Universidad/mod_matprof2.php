<?php 
include ("conexion.php");
$consulta=user($_GET['data']);
function user($idprofesor_table){
    include ("conexion.php");
    $sentencia="SELECT nombre,email FROM profesor_table WHERE idprofesor_table='$idprofesor_table'";
    $result=mysqli_query($conn,$sentencia);
    $fila=$result->fetch_assoc();
    return[ 
       $fila['nombre'],
       $fila['email']];
}
$consultav2=data_user($_GET['data_user']);
function data_user($materia){
    include ("conexion.php");
    $sentencia="SELECT nombre FROM materia_table WHERE nombre='$materia'";
    $result=mysqli_query($conn,$sentencia);
    $fila=$result->fetch_assoc();
    return[ 
       $fila['nombre']];
}

 $sentencia="UPDATE materia_table SET nombre_profesor='$consulta[0]', email_profesor='$consulta[1]' where nombre='$consultav2[0]'";
     $result=mysqli_query($conn,$sentencia);
  
  echo "<script>
    alert('el profesor se ha adjuntado');
    window.location = './modificar_usuario.php';
 </script>";

?>