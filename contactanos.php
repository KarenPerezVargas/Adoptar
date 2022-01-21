<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>adopta.com</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="./styles/iniciar.css">
    </head>
<body>

    <div class="container-fluid">
        <header class="row">
            <div class="col border" style="background: #000000;">
              <img src="./imagenes/LOGO.PNG" width="250px" alt="" class="img-fluid">
            </div>

            <div class="px-3 py-2 bg-dark text-white">
                <div class="container">
                  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                      <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                    </a>
          
                    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                      <li>
                        <a href="./index.html" class="nav-link text-secondary">
                          <svg class="bi d-block mx-auto mb-1" width="24" height="0"><use xlink:href="#home"/></svg>
                          Inicio
                        </a>
                      </li>
                      <li>
                        <a href="./index.html" class="nav-link text-secondary">
                          <svg class="bi d-block mx-auto mb-1" width="24" height="0"><use xlink:href="#home"/></svg>
                          Contáctanos
                        </a>
                      </li>
                      <li>
                        <a href="./index.html" class="nav-link text-secondary">
                          <svg class="bi d-block mx-auto mb-1" width="24" height="0"><use xlink:href="#home"/></svg>
                          Ubicación
                        </a>
                      </li>
                      <li>
                        <a href="./index.html" class="nav-link text-secondary">
                          <svg class="bi d-block mx-auto mb-1" width="24" height="0"><use xlink:href="#home"/></svg>
                          Mas información
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
          </header>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
              <form action="">
                  <div class="row md-12">
                      <img src="./imagenes/fondito3.jpg" alt="">
                  </div>
              </form>
            </div>
      
            <div class="col-xs-12 col-sm-12 col-md-6" style="background-color: #15243E;">
              <h1>Registrate:</h1>
              <form action="" style="margin-top: 3rem;">
      
                  <div class="row" style="margin-top: 2rem;">
                      <div class="col-auto">
                        <label for="" class="col-form-label">Nombres</label>
                      </div>
                      <div class="col-auto">
                        <input type="text" id="" class="form-control" aria-describedby="" required name="txtnombres">
                      </div>
                  </div>

                  <div class="row" style="margin-top: 2rem;">
                    <div class="col-auto">
                      <label for="" class="col-form-label" >Apellidos</label>
                    </div>
                    <div class="col-auto">
                      <input type="text" id="" class="form-control" aria-describedby="" required name="txtapellidos">
                    </div>
                </div>
      
                  <div class="row" style="margin-top: 2rem;">
                      <div class="col-auto">
                        <label for="exampleInputEmail1" class="col-form-label">Correo electronico</label>
                      </div>
                      <div class="col-auto">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="correo">
                      </div>
                  </div>
                  
                  <div class="row" style="margin-top: 2rem;">
                      <div class="col-auto">
                        <label for="" class="col-form-label">N° Celular</label>
                      </div>
                      <div class="col-auto">
                        <input type="text" id="" class="form-control" aria-describedby="" required name="txtcelular">
                      </div>
                  </div>

                  <div class="row" style="margin-top: 2rem;">
                    <div class="col-auto">
                      <label for="" class="col-form-label">Dirección</label>
                    </div>
                    <div class="col-auto">
                      <input type="text" id="" class="form-control" aria-describedby="" required name="txtdireccion">
                    </div>
                  </div>

                  <div>
                    <div class="row" style="margin-top: 3rem;">
                      <div class="col-auto">
                        <label for="" class="col-form-label">¿Qué mascota desea adoptar?</label>


                        <?php
                            $conexion = mysqli_connect('localhost', 'root', '', 'adoptame');
                            $consulta = 'SELECT * FROM mascotas';
                            $resultado = $conexion -> query($consulta);
                        ?>

                        <select id="disabledSelect" class="form-select" name="cboidmascotas">
                        <?php
                            while($row=mysqli_fetch_row($resultado)){
                            echo '<option value='.$row[0].'>'.$row[1].'</option>';
                            }
                          $conexion -> close();
                        ?>
                        </select>


                      </div>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Perros
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Gatos
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Cerdos
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Conejos
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Caballos
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Aves
                      </label>
                    </div>
                  </div>
                  <div>
                    <div class="row" style="margin-top: 3rem;">
                      <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Cantidad de mascotas:</label>
                      </div> 
                      <div class="col-auto">
                        <input type="number" id="" class="form-control" aria-describedby="" style="margin-left: 3rem; margin-top: 1rem;"  name="txtcantidad">
                      </div>     
                  </div>
                </div> 
                <div class="boton" style="text-align: center;">
                  <button type="submit" class="btn btn-light">ENVIAR</button>
                </div>
              </form>
            </div>    
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
  integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
  integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>