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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
    <!-- orion icons-->
    <link rel="stylesheet" href="Vistas/css/orionicons.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="Vistas/css/style.default.css" id="theme-stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="Vistas/img/favicon.png?3"> 
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a><a href="index.html" class="navbar-brand font-weight-bold text-uppercase text-base"></a>
        <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
          <li class="nav-item"><strong class="d-block text-uppercase headings-font-family">Maria Rodriguez</strong>
            <li class="nav-item dropdown ml-auto"><a id="userInfo" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src="img/avatar-6.jpg" alt="Jason Doe" style="max-width: 2.5rem;" class="img-fluid rounded-circle shadow"></a>
            <div aria-labelledby="userInfo" class="dropdown-menu"><a href="#" class="dropdown-item"><small>Jefa de dpto</small></a>
              <div class="dropdown-divider"></div><a href="perfil.html" class="dropdown-item">Mi perfil</a>
              <div class="dropdown-divider"></div><a href="login.html" class="dropdown-item">Cerrar sesión</a>
            </div>
          </li>
            <!--<form id="searchForm" class="ml-auto d-none d-lg-block">
              <div class="form-group position-relative mb-0">
                <button type="submit" style="top: -3px; left: 0;" class="position-absolute bg-white border-0 p-0"><i class="o-search-magnify-1 text-gray text-lg"></i></button>
                <input type="search" placeholder="Search ..." class="form-control form-control-sm border-0 no-shadow pl-4">
              </div>
            </form>
          </li>
          <li class="nav-item dropdown mr-3"><a id="notifications" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-gray-400 px-1"><i class="fa fa-bell"></i><span class="notification-icon"></span></a>
            <div aria-labelledby="notifications" class="dropdown-menu"><a href="#" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <div class="icon icon-sm bg-violet text-white"><i class="fab fa-twitter"></i></div>
                  <div class="text ml-2">
                    <p class="mb-0">You have 2 followers</p>
                  </div>
                </div></a><a href="#" class="dropdown-item"> 
                <div class="d-flex align-items-center">
                  <div class="icon icon-sm bg-green text-white"><i class="fas fa-envelope"></i></div>
                  <div class="text ml-2">
                    <p class="mb-0">You have 6 new messages</p>
                  </div>
                </div></a><a href="#" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <div class="icon icon-sm bg-blue text-white"><i class="fas fa-upload"></i></div>
                  <div class="text ml-2">
                    <p class="mb-0">Server rebooted</p>
                  </div>
                </div></a><a href="#" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <div class="icon icon-sm bg-violet text-white"><i class="fab fa-twitter"></i></div>
                  <div class="text ml-2">
                    <p class="mb-0">You have 2 followers</p>
                  </div>
                </div></a>
              <div class="dropdown-divider"></div><a href="#" class="dropdown-item text-center"><small class="font-weight-bold headings-font-family text-uppercase">View all notifications</small></a>
            </div>-->
          </li>
          
        </ul>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <div id="sidebar" class="sidebar py-3">
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family"></div>
        <ul class="sidebar-menu list-unstyled">
          
              <li class="sidebar-list-item"><a href="index.html" class="sidebar-link text-muted active"><i class="o-home-1 mr-3 text-gray"></i><span>Panel de control</span></a></li>

          <!--  
            <div id="pages" class="collapse">
              <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page one</a></li>
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page two</a></li>
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page three</a></li>
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page four</a></li>
              </ul>
            </div> 
          </li>--> 
              
        </ul>
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 small headings-font-family">Opciones</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="perfil.html" class="sidebar-link text-muted"><i class="o-database-1 mr-3 text-gray"></i><span>Mi perfil</span></a></li>
              <li class="sidebar-list-item"><a href="login.html" class="sidebar-link text-muted"><i class="o-imac-screen-1 mr-3 text-gray"></i><span>Cerrar sesión</span></a></li>
        </ul>
      </div>
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row mb-4">
              <div class="col-xl-12 col-lg-12">
                <h2 class="text-center">¿Qué desea gestionar?</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-violet"></div>
                    <div class="text">
                      <h6 class="mb-0">Departamentos</h6><span class="text-gray"></span>
                    </div>
                  </div>
                  <div class="icon text-white bg-violet"><i class="fas fa-server"></i></div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-green"></div>
                    <div class="text">
                      <h6 class="mb-0">Equipos</h6><span class="text-gray"></span>
                    </div>
                  </div>
                  <div class="icon text-white bg-green"><i class="far fa-clipboard"></i></div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-blue"></div>
                    <div class="text">
                      <h6 class="mb-0">Empleados</h6><span class="text-gray"></span>
                    </div>
                  </div>
                  <div class="icon text-white bg-blue"><i class="fa fa-dolly-flatbed"></i></div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-red"></div>
                    <div class="text">
                      <h6 class="mb-0">Incidencias</h6><span class="text-gray"></span>
                    </div>
                  </div>
                  <div class="icon text-white bg-red"><i class="fas fa-receipt"></i></div>
                </div>
              </div>
            </div>
          </section>
          <section class="mb-4">
            <div class="row">
              <div class="col-lg-12">
                <div class="col-xl-12 col-lg-6">
                  <div class="card mb-5 mb-lg-0">         
                    <div class="card-header">
                      <h2 class="h3 mb-0 text-center">Área de reportes</h2>
                    </div>
                    <div class="card-body">
                      <h6 class="text-black mb-4">Seleccione un reporte:</h6>
                      <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                        <div class="left d-flex align-items-center">
                          <a href="#"><div class="icon icon-lg shadow mr-3 text-gray"><i class="fab fa-dropbox"></i></div></a>
                          <div class="text">
                            <h6 class="mb-0 d-flex align-items-center"> <span>Total de equipos</span><span class="dot dot-sm ml-2 bg-violet"></span></h6><small class="text-gray">Cantidad total de equipos en el dpto</small>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                        <div class="left d-flex align-items-center">
                          <a href="#"><div class="icon icon-lg shadow mr-3 text-gray"><i class="fab fa-dropbox"></i></div></a>
                          <div class="text">
                            <h6 class="mb-0 d-flex align-items-center"> <span>Total de equipos activos</span><span class="dot dot-sm ml-2 bg-violet"></span></h6><small class="text-gray">Equipos actualmente operables</small>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                        <div class="left d-flex align-items-center">
                          <a href="#"><div class="icon icon-lg shadow mr-3 text-gray"><i class="fab fa-dropbox"></i></div></a>
                          <div class="text">
                            <h6 class="mb-0 d-flex align-items-center"> <span>Total de equipos dañados</span><span class="dot dot-sm ml-2 bg-green"></span></h6><small class="text-gray">Equipos actualmente inoperables</small>
                          </div>
                        </div>
                      </div>
                      <div class="left d-flex align-items-center">
                          <div class="icon icon-lg shadow mr-3 text-gray"><a href="#"><i class="fab fa-dropbox"></i></a></div>
                          <div class="text">
                            <h6 class="mb-0 d-flex align-items-center"> <span>Total de empleados</span><span class="dot dot-sm ml-2 bg-violet"></span></h6><small class="text-gray">Cantidad total de empleados en el dpto.</small>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      </div>
    </div>
    <!-- JavaScript files-->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="Vistas/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="Vistas/vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="Vistas/js/charts-home.js"></script>
    <script src="Vistas/js/front.js"></script>
  </body>
</html>