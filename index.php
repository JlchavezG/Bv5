<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio de Sistema | Bootstrap5</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  </head>
  <body>
     <!-- contenedor principal -->
      <div class="container py-4">
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="darkSwitch" checked>
            <label for="darkSwitch" class="form-check-label">
              <svg class="bi" width="15" height="15" fill="currentColor">
                 <use xlink:href="main/icons/bootstrap-icons.svg#moon-stars-fill"/>
              </svg> |
              <svg class="bi" width="15" height="15" fill="currentColor">
                 <use xlink:href="main/icons/bootstrap-icons.svg#brightness-high-fill"/>
              </svg>
            </label>
          </div>
          <div class="row justify-content-center h-100 py-4">
              <img src="img/Logo_iscjlchavez-craken.png" alt="Logotipo del desarrollador" class="rounded mx-auto d-block" style="width:250px;">
          </div>
        <div class="row justify-content-center h-100">
            <div class="col-sm-8 col-md-6 col-lg-6 rounded">
              <div class="row">
                     <div class="col-sm-10 col-md-12 col-lg-12">
                          <!-- inicia formulario de login -->
                          <form class="needs-validation" novalidate action="index.html" method="post">
                             <div class="input-group mb-3">
                               <span class="input-group-text" id="perfil">
                                 <svg class="bi" width="15" height="15" fill="currentColor">
                                    <use xlink:href="main/icons/bootstrap-icons.svg#person-fill"/>
                                 </svg>
                               </span>
                               <input type="text" name="usuario" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedaby ="Usuario" required>
                               <div class="valid-feedback"> Usuario Ok</div>
                               <div class="invalid-feedback"> Por favor ingresa tu usuario</div>
                             </div>
                             <div class="input-group mb-3">
                               <span class="input-group-text" id="perfil">
                                 <svg class="bi" width="15" height="15" fill="currentColor">
                                    <use xlink:href="main/icons/bootstrap-icons.svg#lock-fill"/>
                                 </svg>
                               </span>
                               <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Pass" aria-describedaby ="Pass" required>
                               <div class="valid-feedback"> Se ingreso un password</div>
                               <div class="invalid-feedback"> Por favor ingresa tu Password</div>
                             </div>
                             <div class="d-grid gap-2">
                                <button class="btn btn-outline-primary btn-sm" type="submit"> Ingresar</button>
                             </div>
                          </form>
                          <!-- termina formulario de login -->
                     </div>
              </div>
            </div>
            <div class="container text-center">
               <p class="text-muted text-center py-2"> Sistema desarrollado por IscjlchavezG</p>
               <div class="col"></div>
               <div class="col"></div>
               <div class="col">
               <a href="#" class="text-decoration-none text-info" data-bs-toggle="offcanvas" data-bs-target="#AyudaRight" aria-controls="offcanvasRightAyuda">
                 <svg class="bi" width="15" height="15" fill="currentColor">
                    <use xlink:href="main/icons/bootstrap-icons.svg#question-circle-fill"/>
                 </svg> ayuda </a>
               </div>
               <div class="row">
                  <div class="col">
                    <svg class="bi" width="18" height="18" fill="currentColor">
                       <use xlink:href="main/icons/bootstrap-icons.svg#facebook"/>
                    </svg>
                    <svg class="bi" width="18" height="18" fill="currentColor">
                       <use xlink:href="main/icons/bootstrap-icons.svg#instagram"/>
                    </svg>
                    <svg class="bi" width="18" height="18" fill="currentColor">
                       <use xlink:href="main/icons/bootstrap-icons.svg#whatsapp"/>
                    </svg>
                  </div>
               </div>
               <div class="row text-center text-start py-4">
                   <img src="img/firma.png" alt="firma del desarrolador" style="width:70px;" class="mx-auto d-block">
               </div>
            </div>
        </div>
      </div>
      <!-- inicia ofcanvas -->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="AyudaRight" aria-labelledby="offcanvasRightAyuda">
         <div class="offcanvas-header">
             <h5 id="offcanvasRightAyuda">
               <svg class="bi" width="18" height="18" fill="currentColor">
                  <use xlink:href="main/icons/bootstrap-icons.svg#info-circle-fill"/>
               </svg> Ayuda para el inicio de sesión dentro del aplicativo</h5>
             <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body">
             <p class="text-justify"> Si no puedes ingresar con tus credenciales a la plataforma por favor comunicate al siguiente link</p>
             <p><svg class="bi" width="18" height="18" fill="currentColor">
                <use xlink:href="main/icons/bootstrap-icons.svg#envelope-open"/>
             </svg>
             <a href="mailto:soporte@iscjoseluischavezg.mx" class="text-decoration-none">Email : Soporte Tecnico</p></a>
             <div class="row">
                 <div class="col">
                     <p>Selecciona si la información fue de ayuda</p>
                     <form class="needs-validation" novalidate action="" method="post">
                       <div class="form-floating">
                            <select class="form-select" id="Respuesta" aria-label="Floating label select example" required>
                               <option value=""></option>
                               <option value="si">Si</option>
                               <option value="no">No</option>
                            </select>
                            <label for="Respuesta">¿Te sirvio la información?</label>
                        </div>
                        <div class="invalid-feedback"> Por favor selecciona una respuesta</div>
                        <div class="d-grid gap-2 py-2">
                           <input type="submit" name="respuesta" value="Responder" class="btn btn-sm btn-outline-success btn-block">
                        </div>
                     </form>
                 </div>
             </div>
         </div>
</div>
      <!-- termina offcanvas -->
      <!-- termina contenedor principal -->
<script>
     // Example starter JavaScript for disabling form submissions if there are invalid fields
         (function () { 'use strict'
     // Fetch all the forms we want to apply custom Bootstrap validation styles to
         var forms = document.querySelectorAll('.needs-validation')
     // Loop over them and prevent submission
         Array.prototype.slice.call(forms)
         .forEach(function (form) {
         form.addEventListener('submit', function (event) {
         if (!form.checkValidity()) {
         event.preventDefault()
         event.stopPropagation()
         }
      form.classList.add('was-validated')
      }, false)
         })
     })()
</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
