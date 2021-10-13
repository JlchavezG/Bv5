<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Navbar | Menu Web</title>
  </head>
  <body>
    <!-- inicia navbar -->
       <div class="row">
           <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:rgb(33,97,140);">
              <div class="container-fluid">
                  <div class="d-flex flex-grow-1">
                     <span class="w-100 d-lg-none d-block"></span>
                       <a href="#" class="navbar-brand"> JP Capital Human</a>
                       <div class="w-100 text-right">
                           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbarJl">
                              <span class="navbar-toggler-icon"></span>
                           </button>
                       </div>
                  </div>
                  <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbarJl">
                    <ul class="navbar-nav ms-auto flex-nowrap">
                       <li class="nav-item">
                          <a href="#" class="nav-link active">
                            <svg class="bi" width="17" height="17" fill="currentColor">
                               <use xlink:href="main/icons/bootstrap-icons.svg#house"/>
                            </svg> Inicio</a>
                       </li>
                       <li class="nav-item">
                          <a href="#" class="nav-link">
                            <svg class="bi" width="17" height="17" fill="currentColor">
                               <use xlink:href="main/icons/bootstrap-icons.svg#award"/>
                            </svg> Nosotros</a>
                       </li>
                       <li class="nav-item">
                          <a href="#" class="nav-link">
                            <svg class="bi" width="17" height="17" fill="currentColor">
                               <use xlink:href="main/icons/bootstrap-icons.svg#building"/>
                            </svg> Empresas</a>
                       </li>
                       <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg class="bi" width="17" height="17" fill="currentColor">
                               <use xlink:href="main/icons/bootstrap-icons.svg#columns-gap"/>
                            </svg> Servicios </a>
                            <ul class="dropdown-menu" style="background-color:rgb(33,97,140);" aria-labelledby="submenu">
                               <li><a class="dropdown-item text-light" href="#">Reclutamiento</a></li>
                               <li><a class="dropdown-item" href="#">Selección</a></li>
                               <li><a class="dropdown-item" href="#">Procesos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="nav-link">
                             <svg class="bi" width="17" height="17" fill="currentColor">
                                <use xlink:href="main/icons/bootstrap-icons.svg#person-bounding-box"/>
                             </svg> Inicio de sesión</a>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="nav-link">
                             <svg class="bi" width="17" height="17" fill="currentColor">
                                <use xlink:href="main/icons/bootstrap-icons.svg#envelope-fill"/>
                             </svg> Contacto</a>
                        </li>
                    </ul>
                  </div>
              </div>
           </nav>
       </div>
    <!-- termina nabvar -->
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
