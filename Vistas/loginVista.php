<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema de Incidencias</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="Vistas/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google fonts - Popppins for copy-->
  
    <!-- orion icons-->
    <link rel="stylesheet" href="Vistas/css/orionicons.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="Vistas/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="Vistas/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="Vistas/img/favicon.png?3">

    <link rel="stylesheet" href="Vistas/css/animate.css">
  </head>
  <body>
      <div class="row">
        <div class="col-xl-12 col-12 col-lg-12 d-flex justify-content-center">
            <img src="Vistas/img/cintillo.jpg" style="width:100%;" class="img-fluid zoomIn animated text-center" style="height:15px;" alt="Cintillo de la Gobernación">
        </div>
      </div>

      <div class="row mb-3 mt-2">
        <div class="col-xl-12 col-12 col-lg-12">
          <img src="Vistas/img/nombre_sistema_1.png" class="img-fluid text-center" style="width:100%;" alt="Presentación del Sistema">
        </div>
      </div>
       
      <div class="row mb-5">
        <div class="col-lg-12 px-lg-12 col-xl-12 pr-4">
          <div class="card w-50 mx-auto">
            <div class="card-header">
              <h3 class="text-center zoomIn animated">Iniciar Sesión</h3>
            </div>
            <div class="card-body mb-5">

                <div class="respuestaServidor"></div>

                <form id="loginForm" action="#" method="POST" class="mt-4 zoomIn animated">
                    <div class="input-group w-75 mx-auto mb-3">
                        <select name="letra_cedula" id="letra_cedula" class="input-group-prepend border-0 shadow" required>
                            <option value="V" class="text-center">&nbsp;&nbsp;&nbsp;V</option>
                            <option value="E" class="text-center">&nbsp;&nbsp;&nbsp;E</option>
                            <option value="C" class="text-center">&nbsp;&nbsp;&nbsp;C</option>
                            <option value="P" class="text-center">&nbsp;&nbsp;&nbsp;P</option>
                          </select>
                          <input name="cedula" id="cedula" type="text" class="form-control border-0 shadow" placeholder="Cédula" aria-label="Text input with dropdown button">
                    </div>
                    <div class="input-group mb-3 w-75 mx-auto">
                        <div class="input-group-prepend">
                          <span class="input-group-text border-0 shadow" id="basic-addon1">
                            <img src="Vistas/img/key.png" alt="">
                          </span>
                        </div>
                      <input name="pass" id="pass" type="password" class="form-control form-contrl-lg border-0 shadow " placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="form-group mb-2 d-flex justify-content-center">
                      <div class="custom-control custom-checkbox">
                        <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                        <label for="customCheck1" class="custom-control-label">Recuérdame</label>
                      </div>
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                      <a href="index.php?url=registro" class="badge badge-pill badge-danger">Deseo registrarme</a>&nbsp;&nbsp;
                      <a href="recuperacion.html" class="badge badge-pill badge-danger"> Recuperar datos</a>
                    </div>
                    <div class="d-flex justify-content-center">
                      <input type="submit" id="submit" class="btn btn-danger btn-lg shadow px-5" value="Acceder">
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    <!-- JavaScript files-->
    <!--<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>-->
    <script src="Vistas/vendor/jquery/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <!--<script>
      $(function(){
        $('#submit').click(function(){
          
          //Obtenemos los datos ingresados por los usuarios
          var datosFormulario = {
            'letra_cedula' : $('#letra_cedula').val(),
            'cedula'       : $('#cedula').val(),
            'pass'         : $('#pass').val()
          }

          $.ajax({
            url: 'index.php?url=login',
            type: 'POST',
            data: datosFormulario,
            success: function(response){

              if (response == 'homeControlador') {
                //Si el controlador devuelve 'homeControlador' redireccionamos
                window.location.href = 'index.php?url=home';
              } else {
                //Autenticacion fallida, disparamos alerta
                Swal.fire({
                  type                : 'error',
                  title               : 'Autenticación fallida',
                  text                : response,
                  confirmButtonColor  : '#bd2130',
                  confirmButtonText   : 'Lo intentaré de nuevo'
                });

              }

            }
          });
        });
      })
    </script>-->

  </body>
</html>