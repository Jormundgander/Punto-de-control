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

    <!-- Formulario en pasos -->
    <link rel="stylesheet" href="Vistas/css/formulario.css">

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

      
      <!-- multistep form -->
<form id="msform" action="index.php?url=activar" class="mx-auto">
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active">Ingresar cédula o RIF</li>
      <li>Establecer contraseña</li>
      <li>Finalizando proceso</li>
    </ul>
    <!-- fieldsets -->
    <fieldset class="form-group w-75 mx-auto mb-3 border-0">
      <h2 class="fs-title">Registro de usuario</h2>
      <h3 class="fs-subtitle"></h3>
      <div class="input-group w-75 mx-auto mb-3 border-0">
                      <select name="letra_cedula" class="input-group-prepend border-0 shadow" name="" id="" required>
                          <option value="V" class="text-center">&nbsp;&nbsp;&nbsp;V</option>
                          <option value="E" class="text-center">&nbsp;&nbsp;&nbsp;E</option>
                          <option value="C" class="text-center">&nbsp;&nbsp;&nbsp;C</option>
                          <option value="P" class="text-center">&nbsp;&nbsp;&nbsp;P</option>
                        </select>
                        <input name="cedula" type="text" class="form-control border-0 shadow" placeholder="Ingresar cédula o RIF" aria-label="Text input with dropdown button">
                  </div>
                    <div class="input-group mb-3 w-75 mx-auto">
                      <div class="input-group-prepend">
                        <span class="input-group-text border-0 shadow" id="basic-addon1">
                          <img src="Vistas/img/user.png" alt="Usuario">
                        </span>
                      </div>
                      <input name="usuario" type="text" class="form-control form-contrl-lg border-0 shadow " placeholder="Ingresar usuario" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
      <a href="index.php?url=index" class="action-button">Volver al login</a>
      <input type="button" name="next" class="next action-button" value="Siguiente" />
    </fieldset>
    <fieldset>
      <h2 class="fs-title">Establecer contraseña</h2>
      <h3 class="fs-subtitle"></h3>
      <div class="input-group mb-3 w-75 mx-auto">
                      <div class="input-group-prepend">
                        <span class="input-group-text border-0 shadow" id="basic-addon1">
                          <img src="Vistas/img/key.png" alt="Contraseña">
                        </span>
                      </div>
                      <input name="pass" type="password" class="form-control form-contrl-lg border-0 shadow " placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3 w-75 mx-auto">
                      <div class="input-group-prepend">
                        <span class="input-group-text border-0 shadow" id="basic-addon1">
                          <img src="Vistas/img/key.png" alt="Contraseña">
                        </span>
                      </div>
                      <input name="pass" type="password" class="form-control form-contrl-lg border-0 shadow " placeholder="Confirmar contraseña" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3 w-75 mx-auto">
                      <div class="input-group-prepend">
                        <span class="input-group-text border-0 shadow" id="basic-addon1">
                          <img src="Vistas/img/user.png" alt="Correo">
                        </span>
                      </div>
                      <input name="correo" type="text" class="form-control form-contrl-lg border-0 shadow " placeholder="Ingresar correo" aria-label="Correo" aria-describedby="basic-addon1" required>
                    </div>
      <input type="button" name="previous" class="previous action-button" value="Regresar" />
      <input type="button" name="next" class="next action-button" value="Siguiente" />
    </fieldset>
    <fieldset>
      <h2 class="fs-title">Ya casi terminamos</h2>
      <h3 class="fs-subtitle"></h3>
      <div class="form-group d-flex justify-content-center">
                    <select name="pregunta_secreta" class="form-control w-75 mx-auto preguntas border-0 shadow" id="preguntas" required>
                        <option selected disabled>Seleccionar pregunta de seguridad</option>
                        <option value="¿Cuál fué su mejor amigo de la infancia?">¿Cuál fué su mejor amigo de la infancia?</option>
                        <option value="¿Cuál es su comida favorita?">¿Cuál es su comida favorita?</option>
                        <option value="¿Por qué usted se considera increíble?">¿Por qué usted se considera increíble?</option>
                        <option value="¿Qué es lo que más te caracteriza?">¿Qué es lo que más te caracteriza?</option>
                      </select>
                    </div>

                    
                    <div class="input-group mb-4 w-75 mx-auto">
                      <div class="input-group-prepend">
                        <span class="input-group-text border-0 shadow" id="basic-addon1">
                          <img src="Vistas/img/pencil.png" alt="Contraseña">
                        </span>
                      </div>
                      <input name="respuesta_secreta" type="text" class="form-control form-contrl-lg border-0 shadow " placeholder="Respuesta de seguridad" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
      <input type="button" name="previous" class="previous action-button" value="Regresar" />
      <input type="submit" name="submit" class="submit action-button" value="Registrarme" />
    </fieldset>
  </form>
       
      <!--<div class="row mb-5">
        <div class="col-lg-12 px-lg-12 col-xl-12 pr-4">
          <div class="card w-50 mx-auto">
            <div class="card-header">
                <h3 class="text-center zoomIn animated">Registro de usuario</h3>
            </div>
            <div class="card-body mb-5">
                <form id="loginForm" action="index.html" class="mt-4 zoomIn animated">
              
                  <div class="input-group w-75 mx-auto mb-3 border-0">
                      <select name="letra_cedula" class="input-group-prepend border-0 shadow" name="" id="" required>
                          <option value="V" class="text-center">&nbsp;&nbsp;&nbsp;V</option>
                          <option value="E" class="text-center">&nbsp;&nbsp;&nbsp;E</option>
                          <option value="C" class="text-center">&nbsp;&nbsp;&nbsp;C</option>
                          <option value="P" class="text-center">&nbsp;&nbsp;&nbsp;P</option>
                        </select>
                        <input name="cedula" type="text" class="form-control border-0 shadow" placeholder="Cédula" aria-label="Text input with dropdown button">
                  </div>
                  
                  <div class="input-group mb-3 w-75 mx-auto">
                      <div class="input-group-prepend">
                        <span class="input-group-text border-0 shadow" id="basic-addon1">
                          <img src="Vistas/img/key.png" alt="Contraseña">
                        </span>
                      </div>
                      <input name="pass" type="password" class="form-control form-contrl-lg border-0 shadow " placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    
                  
                   <div class="form-group d-flex justify-content-center">
                    <select name="pregunta_secreta" class="form-control w-75 mx-auto preguntas border-0 shadow" id="preguntas" required>
                        <option selected disabled>Seleccione una pregunta de seguridad</option>
                        <option value="¿Cuál fué su mejor amigo de la infancia?">¿Cuál fué su mejor amigo de la infancia?</option>
                        <option value="¿Cuál es su comida favorita?">¿Cuál es su comida favorita?</option>
                        <option value="¿Por qué usted se considera increíble?">¿Por qué usted se considera increíble?</option>
                        <option value="¿Qué es lo que más te caracteriza?">¿Qué es lo que más te caracteriza?</option>
                      </select>
                    </div>

                    
                    <div class="input-group mb-4 w-75 mx-auto">
                      <div class="input-group-prepend">
                        <span class="input-group-text border-0 shadow" id="basic-addon1">
                          <img src="Vistas/img/pencil.png" alt="Contraseña">
                        </span>
                      </div>
                      <input name="respuesta_secreta" type="text" class="form-control form-contrl-lg border-0 shadow " placeholder="Respuesta de seguridad" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>

                    <div class="d-flex justify-content-center mb-2">
                      <a href="login.html" class="badge badge-pill badge-danger">Iniciar sesión</a>&nbsp;&nbsp;
                      <a href="recuperacion.html" class="badge badge-pill badge-danger"> Recuperar datos</a>
                    </div>
                    <div class="d-flex justify-content-center">
                      <button type="submit" class="btn btn-danger btn-lg shadow px-5">Registrarme</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>-->
    <!-- JavaScript files-->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--<script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>-->
  <script src="Vistas/vendor/jquery/formulario.js"></script>
  <script src="Vistas/vendor/jquery/jquery-ui.js"></script>
  <script src="Vistas/vendor/jquery/jquery-ui.min.js"></script>  
  

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    
    <script>
      $(document).ready(function() {
          $('.preguntas').select2({});

      });
    </script>-->

  </body>
</html>