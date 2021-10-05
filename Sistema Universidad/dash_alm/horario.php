<?php
//Arrancamos la sesión
session_start();
$_SESSION['email'];
?>

<!DOCTYPE HTML>
<html>
<style>
    .shadowbox {
        width: auto;
        border: 0.5px solid #333;
        box-shadow: 8px 8px 5px #444;
        padding: 1px 12px;
    }
</style>
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <!----- Navbar --------------------------------------------------------------------------------->

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #c7c7c7;">
        <a class="navbar-brand" href="#">Pagina Estudiantes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="alumnos.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="materias.php">Materias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="horario.php">Horario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="asignaciones.php">Asignaciones</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Usuario
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Perfil</a>
                        <a class="dropdown-item" href="./logout.php">Cerrar sesion</a>
                    </div>
                </div>
            </form>
        </div>
    </nav>

    <!----- Navbar --------------------------------------------------------------------------------->


    </br>
   
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-secondary">
                            <h4 class="card-title ">Lista de Materias</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-secondary">
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            NOMBRE
                                        </th>
                                        <th>
                                            CODIGO
                                        </th>
                                        <th>
                                           HORA
                                        </th>
                                        <th>
                                           AULA
                                        </th>
                                        <th>
                                            ACCIONES
                                        </th>
                                    </thead>

                                    <tbody>
                                        <?php 
                                        include("conexion.php");
                                        $consulta = "SELECT * FROM materia_alumno_table where email='$_SESSION[email]'";
                                        $result = mysqli_query($conn, $consulta);
                                        while ($fila = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>";
                                            echo $fila['idmateria_alumno'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $fila['materia'];
                                            echo "</td>";
                                             echo "<td>";
                                            echo $fila['codigo'];
                                            echo "</td>";
                                             echo "<td>";
                                            echo $fila['aula'];
                                            echo "</td>";
                                             echo "<td>";
                                            echo $fila['hora'];
                                            echo "</td>";
                                            
                                            echo "<td>";
                                            echo "<a href='eliminar_mat.php?data=".$fila['idmateria_alumno']."'> <buttontype='button' class='btn btn-warning'>Eliminar materia</button>";
                                            echo "</td>";
                                            echo "</tr>";
                                        } 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    </br>
    </br>
    </br>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>