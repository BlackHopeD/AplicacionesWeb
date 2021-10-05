<?php
session_start(); 
include ("conexion.php"); 
$email= $_POST['email'];
$contra=sha1($_POST['contra']);


$consulta="Select * from admin_table where email='$email' and contra='$contra'";
$result=mysqli_query($conn,$consulta);
$row_admin=mysqli_num_rows($result);

$consulta2="Select * from alumno_table where email='$email' and contra='$contra'";
$result2=mysqli_query($conn,$consulta2);
$row_estudiante=mysqli_num_rows($result2);

$consulta3="Select * from profesor_table where email='$email' and contra='$contra'";
$result3=mysqli_query($conn,$consulta3);
$row_profesor=mysqli_num_rows($result3);



if($row_admin){
  
    header("location:admin_page.html");

   
}
else if($row_estudiante){
  $_SESSION['email'] = $email;
  
 header("location:\dash_alm\alumnos.php");
}
else if($row_profesor){
      $_SESSION['email'] = $email;
      
    header("location:\dash_prof\profesor_page.php");
}
else{
   /* echo "<script>
             alert('Usuario o contraseña incorrectos');
             window.location = 'index.php';
          </script>";*/
}


 mysqli_free_result($result);
 mysqli_close($conn);
?>

