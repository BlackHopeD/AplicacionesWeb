<?php 
include ("conexion.php");
session_start();

$nombre= $_POST['nombre'];
$email=  $_POST['email'];
$contra=sha1($_POST['contra']);
$cedula= $_POST['cedula'];
$telefono= $_POST['telefono'];
$ubicacion= $_POST['ubicacion'];

$consulta2="Select * from profesor_table where email='$email' or cedula='$cedula'";
$result2=mysqli_query($conn,$consulta2);

if(mysqli_num_rows($result2)>0){
    echo "<script>
    alert('El email o la cedula ya existen');
    window.location = 'admin_page.html';
 </script>";
}
else{  
$consulta="insert into profesor_table(nombre,email,contra,cedula,telefono,ubicacion) VALUES('$nombre','$email','$contra','$cedula','$telefono','$ubicacion')";
$result=mysqli_query($conn,$consulta);
mysqli_close($conn);

echo "<script>
    alert('El usuario ha sido creado exitosamente');
    window.location = 'admin_page.html';
 </script>";
}

?>