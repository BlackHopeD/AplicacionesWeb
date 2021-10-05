<?php
//Arrancamos la sesión
session_start();
$_SESSION['email'];

$consulta=ConsultarProducto($_GET['data']);
function ConsultarProducto($nombre){
    include ("conexion.php");

    $consulta3= "SELECT * FROM materia_alumno_table where materia='$nombre' and email='$_SESSION[email]'";
    $result3=mysqli_query($conn,$consulta3);
   

    if(mysqli_num_rows($result3)>0){
        echo "<script>
        alert('Esta materia ya ha sido agregada a su horario');
        window.location = 'materias.php';
     </script>";
    }

    else{

    $consulta2= "SELECT * FROM materia_table where nombre='$nombre'";
    $result2=mysqli_query($conn,$consulta2);
    $fila=$result2->fetch_assoc();
    $fila['codigo'];$fila['aula'];$fila['hora'];
      
    $consulta="INSERT INTO materia_alumno_table (email,materia,codigo,hora,aula)VALUES ('$_SESSION[email]','$nombre','$fila[codigo]','$fila[aula]','$fila[hora]')";
    $result=mysqli_query($conn,$consulta);
  
    mysqli_close($conn);
 
     
echo "<script>
    alert('materia añadida');
    window.location = './materias.php';
 </script>";
}

}
    
?> 