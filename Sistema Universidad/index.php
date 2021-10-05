 <?php
   /*    function getVisitorIp()
{
  // Recogemos la IP de la cabecera de la conexión
  if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ipAdress = $_SERVER['HTTP_CLIENT_IP'];
  }
  // Caso en que la IP llega a través de un Proxy
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ipAdress = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  // Caso en que la IP lleva a través de la cabecera de conexión remota
  else
  {
    $ipAdress = $_SERVER['REMOTE_ADDR'];
  }
  return $ipAdress;
}
$var =getVisitorIp();

include ("conexion.php"); 
$consulta="INSERT INTO visitas_table(visitas) VALUES('$var')";
$result=mysqli_query($conn,$consulta);
mysqli_close($conn);*/

echo "<script>
    history.forward()
    </script>";
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="public\css\login.css">
</head>
<body>
<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="https://onaliat.mx/blog/wp-content/uploads/2018/07/carrera-profesional-como-organizarse-para-estudiar-y-trabajar.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="https://image.flaticon.com/icons/png/128/3569/3569417.png" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Bienvenido, inicie sesión</p>
              <form method="POST" action="validar_user.php">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Correo electronico" required>
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="contra" id="contra" class="form-control" placeholder="contraseña" required>
                  </div>                   
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Iniciar Sesion">
                </form>
        
                <br/>   <br/>
                <nav class="login-card-footer-nav">
                 <a href="#!">Terminos de condicion y uso.</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
