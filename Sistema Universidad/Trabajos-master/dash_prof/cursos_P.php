<?php
//Arrancamos la sesión
session_start();
$_SESSION['email'];
echo "<script>
  
    history.forward()
    </script>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="public/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="public/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    CRUD
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="../public/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>
<body class="">
  <div class="wrapper ">
     <div class="sidebar" data-color="purple" data-background-color="white" data-image="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAhFBMVEX///8AAAD29vbZ2dnj4+P8/PzS0tLp6en4+Pj09PQEBATx8fEjIyPt7e0XFxcbGxu8vLyCgoKvr6+UlJRqamqnp6eenp6MjIw4ODhJSUliYmIQEBBdXV3Kysq2trYwMDB5eXksLCzExMRVVVVzc3NFRUWPj48+Pj6YmJhOTk6GhoYuLi52Eh6cAAAMVklEQVR4nO1djXKqOhAGJBYCirVa21Jrta22ve//fjcByW6QQDABT2fyzZm2RwLsspv9ywY9z8HBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHhj4CQW1NgG+Hi+Plx2p1+VpvlNLo1NbZBFqvcl/Cxnt2aKFtguhi++0342N6aNksIXxr543j6+zwSj9wr+eP4ubs1iaaYZj5tYZAdW9+aRBMQ77FVgCVeSDFZ/yY+NRhkszH5sxy+tmknQv5XHcfqgrHTarPZvP/k9c+z5Na0XoWaEU0fpkIXw/WzfHB3S0KvxVJi4etQOxzKEl7dhEYjhBIDi/phJs7JEx6xvAWRF9C3eMTD5L8q4uwjZvHWrp/0zHXWyFz+KkctEIcvpiReCzJdf55KGuY/98uw+KzzrAA5hGPLuCli8SYxKkt6/Bqy+6kGi99wwnvrQCTFL0tEa4LzkBzr7JXYdVoFAoNPHbfZVMKm/tQW8VogXrRp5o8jf2s/9w2GdhoQMEkje4xF+VxVOIVtqvojznzovNEELhpYpL8dxAvUWWuFR3UpaQajOmcs8eBWrZphF2HamtWVUJv3KpyhTIRdLBJmT6t7jaWmRLLhLdjFCvohadJKGnbVaGqVjxZM2yYggPpp0sxhWg3RcwDgWkKbbKhA8NQvkb18Lw+HxXrzUT+yj5qkmIjj31q3hBvWw/NhcFfj4jiBY2Rby9q/mjgEivXCFPCej5Z4aIcU8V+G/MnGx0p833CFgziqmbuf2q5mHVLeet80z8IfPKRBscDfa0brotoxhjGddlBf4AFJMb/kYtlyrBFC9cfIL5CO5uqAa9GaG62rQ5nmTQWHr1dS3QMooGQRpSpoIWiqNUSeUL/QlKFIYEbQ0ux8K9rlm5Y+rcT4Xj8Gj0lzDU1M7M8rSO4DgrO1t9Z4i+Bib70UuBVHND149Vz9zbWka4LAw+ye81ElQnrhxaAIpRdKQ6A+eDkKOftuTwa6uKuJGzz4u9ZtQXMGz4GFEWSut9tI/KdUxq/qQK51W1D4wUvfEHfqlPbAZNbVFKofOmFbJEY/XUFzL8CtfroHEzS87sYqU0O1HBxoztCGBkXMejNeBFvz+hGYz5OmEyUQWKcZfBrCjNez8vDw63YJgtvnzqtAdpheQXM/wL30YhGIYesPH6WY6w6/KlwL9zpDL5SKnpDuB18AMt2LhZdnoLtDT/cQ4g5fahPhoWaID37vYt5OgUOmwirREGy+h7czyHLohodzUMU6EOWZMnrAlUTtINYELz05JJmaQ4jcqNpGBlA5pqN0nVjUUmltRlV/kbLt5zH6MfpamliQd2FpPBS6cZwuxTj7lIqWoyyQiseuWZkFn9CkhjNfwvOinGeklNVUKtrRkeqIkC3oeXwITBtsSUPd9WU9vYs8Mpu8vae+XHUe3hUW6Bu1CcukSCG2vhYobV0mtgkIpT90hoOhaY6viS6LjMGxur4gxe9OgPEyqLJUPeleAaGjNppAJ+FG46lC4VEVmBEveW7iSmZxOmLfHury6c62D6Laps4JiNfZf7kat6f9WShVd1gjAhr/u1UId23LybvtyI2XbzBtuhwUak7vmrRTVRfmjkcKI7eWor7I9iADFcfVhWpS/bw7ppf8fUKcMOLmEpG2Uz+NW8bhkLIlPCDL9/tFyenkEWvr83F7Xlw9DxkPe6Cipa0VHB1Vr/lVJXRYC4/D6WKx2E6QWpdRxn4ynrJiJ01VXmCN3VykUrHkpRhG29qikupK3X031iBFxA3r8KSgHDhs1jAitRyprdZDpQn+abRe72iPWdxfMBDJDk7pVfBGIHV9Avc+jNabWOtUSB+xUZ38+lIgpqpSz6RuAHWDqbRgPtrekot4eX+/Pmyn28Xjqh5kZo329iLkVttKufvxfizveNDtGFL5+qV8gVRNdk1hRuoTltewWxhMGxkklfnw/TJynbfFDrX+q49RpEga0vMmfCkquL9VSE73u91/vGNFTTTxZnKj1SgFKY7gtV1Tqap9O0JGdJdS7su7sJaurJV8W8GyzpSMvaoGKrqa/fkun9+TIOoQCtMYaZfQeJ3CyftZWE1QGHaCy6RZOn/zgqSLQ37aB3R2UK3s2xLQ9t08RazSx8aWRI43/Ei+piSK40CHXmmj8AitwiLrCZZnO5DmYo3i8+ApDd70HInmlP34CkiSkEQvh3/ALHbPXWOEm9X9OYgKDg+vqV/wR3erx/P0I154FEMEquU2mqa8ABfFJNLQ0RIQDFJ/PnRl47w5mdcIz3lDfBeGs7M0oiiISoKo/8o9IgmYNYmC4FwEyTKaZ3sWsDLm+Eh2Aj8cFWczlpu1lkgsDur5WchVKWSR+RESRzGjP/IYlexnwBBFLCZIs3yesYCMWUv+ETu0KSZszv5l/ifnuzgtYT/ioPizeBhxoJDQA5rD7R1ZhviF+VCkwJzQOI4jxmkQF0QzEp98xl+a+SljhX/ERVPk/amfpvPcf2HC4oOZ+Pj4qHgIhIuSXUklxRVsn/HbCgxmCPdoxh+4WgVBzHJCRm7MFZERmjCCue3J/DzLcv8UsjFMMFHGZc/ZY5EJ4yIqpF5wWTwV/lEpTeUsQ8tVg+npQvKA3JKUFBUc8qkUsL+YASmNScFmlm+512PziNcXme4yVU0CLjsh3WKmFlpbCFZ598SX7z0Ajr7EIddSLgGPP/rSwgRcXHz/ZMEK5zCd+0uPcXgCDqdRqc6lDOOCU1JeISliHFXhA2Vd2SAzsbYVr7Q0bAaxqRORksOosBlkwSdcRksO5/43m297mvEwhol2XRqfWOaQ/ZeUjHtRkijmWbWbjA6y6k3wGgPlU6F4ikweTDOZHEtrWBpO8s1YzNOCQz7/fvkkythfecq9DJ9vQXEKi2qCsww5azHXARLNVBzC/hmfWpdh8CQzKBLzgqdCmPye7BezrLE32VEmPRbMZUxqc8biI83Z5MwK3eaCD8pTSGmf2G9msIrHFLTIkKBCrO3NFwQbURbhI3tQ7QEWv0jxibzf/qFaizpIYyHAK69S/VRRgWeKXQYjeSOJVvArG951wXJDS0I/CHtKLa8rSut8/6nb9CWEGT7r4EWhhaLnUXBotd0U1hRonxw0eobEztbOM1hrt9mNKeUuPQrsRHp9iZWUgDAhKvc5XH1N0VhK+7/zZ4Wk+GrFS6PIpq2I1QdS0bLnShdvvgM9teOlV9cS0wzCQzCctvQ8HW/ctjQVwSeubMgQ7fn3r2v8IE+Q9ZysqBUsGFtRUtzz0r31+hIEdbBZiiZhNcOKNYWNIVeXKvGat41NIVByt7FwipYDr32VEYGHTv13CzR5QqksvA0EJ50GLZ4oO7dhbKB8au5iUSl2aWAlUDeVjX2g0MtiXDoNz2aGmlbwkLJbqOfeocduCLxP0sQyE2ThbRSRRIXddP86imba97Z0A62qWmjZFouKpottkMTujYmC/EvdmKAN8fYfw5eBiETFRic5cormkUjv7eCd13myEG2BxzBfHuu9WVoBqFwsjDnE/Q3mK9WhiCQN4ja0Mc7Szj+oaRiHbhCIGEwf3BVip3AH1zOvIdnReKi+2tlDXfkeWhWTDSBIM0lWwBnaWeghyNYY2y0r6gV9LLZ6dCF0M87rRFCj9yKmZkAF0db2VDBdJnQVEByayFD06dhrQxJ0aWzob0dugUN44PbWsUQgb/zmNRvEwe57e+0rECSZRt/iQgaOB15taW+hrvbmNeJFd1dhBgp2tRVE9XjNPbFaVxWEFdOn41sDtGCwni9iLJsvSROR7jv7D9k1E90LV08hYidqqEN4IG6fHxpJ7onrwy3QdJubjMXkTqXChgGupwWMgs0XTq4RZYENBg1eRw/ZnM1XF4ELIsj/G8CgY7j3yw21AO+TnfEqkM6mhjYYVVewPtmDpPtxE9H9YFJeFnmA1Vfbgv3iVj7pft9yO4yqdoLDi5c8mUDm0PNmUwNMAqPNpaKpXvcFlVqoc3hLjKGlt8UwluZf4nA5CIdQ+L71F3JI6WFoD/DchmvU1oXme9evxq35gxljGnYoObz513BF3USawE5jjRmG5fD2399EvO43x5hghBfodaL5mzNtYcQv41CCL0IOY2b4Vf+Jr4r7HJDDf+M7xrS+YPIqpOZLyrYQTobAKN80clv8KwJ0cHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHBwcHCwiv8BpruFZO2rx8MAAAAASUVORK5CYII=">
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link " href="./profesor_page.html">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="./lista_e.php">
              <i class="material-icons">person</i>
              <p>Visualizar Estudiantes </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">content_paste</i>
              <p>Añadir Calificaciones</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./cursos_P.php">
              <i class="material-icons">library_books</i>
              <p>Lista de Cursos</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Lista de usuarios</a>
          </div>        
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">        
              </div>
            </form>
            <ul class="navbar-nav">   
              <li class="nav-item dropdown">
                <a class="nav-link" href="logout.php" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">cursos</h4>
                  <p class="card-category">Aqui podra visualizar la informacion de los cursos</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                      
                        <th>
                          Nombre
                        </th>
                        <th>
                          Aula
                        </th>
                        <th>
                          Hora y Dia 
                        </th>
                        
                      </thead>

                      <tbody>
                                        <?php 
                                        include("conexion.php");
                                        $consulta = "SELECT * FROM materia_table where email_profesor='$_SESSION[email]'";
                                        $result = mysqli_query($conn, $consulta);
                                        while ($fila = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>";
                                            echo $fila['nombre'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $fila['aula'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $fila['hora'];
                                            echo "</td>";
                                            echo "<td>";
                                      
                                            echo "</td>";
                                            echo "<td>";
                                         
                                            echo "</td>";
                                            echo "<td>";
                                         
                                            
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
            
</body>
</html>