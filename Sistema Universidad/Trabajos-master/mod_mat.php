<?php
$consulta=ConsultarProducto($_GET['data']);
function ConsultarProducto($idmateria_table){
    include ("conexion.php");
    $sentencia="SELECT * FROM materia_table WHERE idmateria_table='$idmateria_table'";
    
    $result=mysqli_query($conn,$sentencia);
    $fila=$result->fetch_assoc();
    
    return[ 
       $fila['nombre'],
       $fila['aula'],
       $fila['hora'],
       $fila['codigo'],
       $fila['idmateria_table']
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
   Modificacion datos
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
            <a class="navbar-brand" href="javascript:;">Modificar materia</a>
          </div>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                
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
                <div class="card-header card-header-danger">
                  <h4 class="card-title">Modificar materia</h4>
                  <p class="card-category">Modifique los datos de la materia:</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="mod_mat2.php">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">NOMBRE DE LA MATERIA</label>
                          <input type="hidden" name="idmateria_table" id="idmateria_table" class="form-control"value="<?php echo $consulta[4] ?>" placeholder="Nombre" >
                          <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $consulta[0] ?>" placeholder="Nombre" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">AULA</label>
                          <input type="text" name="aula" id="aula" class="form-control" value="<?php echo $consulta[1] ?>" placeholder="00-0">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">INICIO - FIN</label>
                          <input type="text" name="hora" id="hora" class="form-control"value="<?php echo $consulta[2] ?>" placeholder="0:00 - 0:00">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">CODIGO DE MATERIA</label>
                          <input type="text" name="codigo" id="cedula" class="form-control" value="<?php echo $consulta[3] ?>" placeholder="XX-000">
                        </div>
                      </div>                      
                    </div>                           
                    <a class="btn btn-danger  pull-right" href="./modificar_usuario.php" role="button">Cancelar</a>
                    <button type="submit" class="btn btn-success pull-right">Modificar</button>                   
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