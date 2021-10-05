<?php
$consulta=ConsultarProducto($_GET['data']);
function ConsultarProducto($idprofesor_table){
    include ("conexion.php");
    $sentencia="SELECT * FROM profesor_table WHERE idprofesor_table='$idprofesor_table'";
    $result=mysqli_query($conn,$sentencia);
    $fila=$result->fetch_assoc();
    
    return[
      
       $fila['nombre'],
       $fila['email'],
       $fila['contra'],
       $fila['cedula'],
       $fila['telefono'],
       $fila['ubicacion'],
       $fila['idprofesor_table'],

    ];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="public/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="public/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Modificacion
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="public/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>
<body class="">
  
    <div class="main-panel">
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Añadir estudiante</a>
          </div>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">              
              </li>
              <li class="nav-item dropdown">        
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="Index.php" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Cuenta
                  </p>
                </a>
                
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Modificacion de datos</h4>
                  <p class="card-category">Por favor, Modifique los datos del profesor</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="./mod_prof2.php">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nombre completo</label>
                          <input type="hidden" name="idprof" id="idprof" class="form-control" value="<?php echo $consulta[6] ?>" placeholder="Nombre" >
                          <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $consulta[0] ?>" placeholder="Nombre" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">E-mail</label>
                          <input type="email" name="email" id="email" class="form-control" value="<?php echo $consulta[1] ?>" placeholder="Correo electronico">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contraseña</label>
                          <input type="text" name="contra" id="contra" class="form-control" value="<?php echo $consulta[2] ?>" placeholder="**********">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cedula</label>
                          <input type="text" name="cedula" id="cedula" class="form-control" value="<?php echo $consulta[3] ?>" placeholder="0-0000-0000">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Telefono</label>
                          <input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $consulta[4] ?>" placeholder="+507">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ubicacion completa</label>
                          <input type="text" name="ubicacion" id="ubicacion"class="form-control" value="<?php echo $consulta[5] ?>" placeholder="Ubicacion completa del usuario">
                        </div>
                      </div>
                    </div>            
                    <a class="btn btn-danger  pull-right" href="./modificar_usuario.php" role="button">Cancelar</a>
                    
                    <button type="submit" class="btn btn-success pull-right">Modificar Usuario</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>                       
          </div>
        </div>
      </div>    
    </div>
  </div>
</body>
</html>