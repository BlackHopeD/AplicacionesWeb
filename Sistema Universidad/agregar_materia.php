<?php 
include ("conexion.php");
session_start();

$nombre= $_POST['nombre'];
$aula=  $_POST['aula'];
$hora= $_POST['hora'];
$code= $_POST['code'];


$consulta2="Select * from materia_table where nombre='$nombre' or codigo='$code'";
$result2=mysqli_query($conn,$consulta2);

if(mysqli_num_rows($result2)>0){
    echo "<script>
    alert('El nombre de la materia ya existe');
    window.location = 'crear_materia.html';
 </script>";
}
else{  
$consulta="insert into materia_table(nombre,aula,hora,codigo) VALUES('$nombre','$aula','$hora','$code')";
$result=mysqli_query($conn,$consulta);
mysqli_close($conn);

echo "<script>
    alert('La materia ha sido agregada');
    window.location = 'admin_page.html';
    </script>";

}
?>