<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistema</title>
    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" href="librerias/alertifyjs/css/themes/default.css">
    

</head>

<body>
    <div class="container">
        <div id="tabla"></div>
    </div>

    <!-- Modal Registro Nuevos-->

    
    <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">Agregar nuevo usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <label>Nombre</label>
            <input type="text" name="" id="nombre" class="form-control input-sm">
            <label>Apellido</label>
            <input type="text" name="" id="apellido" class="form-control input-sm">
            <label>Email</label>
            <input type="text" name="" id="email" class="form-control input-sm">
            <label>Telefono</label>
            <input type="text" name="" id="telefono" class="form-control input-sm">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">Agregar</button>
            
          </div>
        </div>
      </div>
    </div>
    
     <!-- Modal Edicion-->

    
    <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">Actualizar datos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
             <input type="text" hidden="" id="idpersona">
             <label>Nombre</label>
              <input type="text" name="" id="nombreu" class="form-control input-sm">
              
              <label>Apellido</label>
              <input type="text" name="" id="apellidou" class="form-control input-sm">
             
              <label>Email</label>
              <input type="text" name="" id="emailu" class="form-control input-sm">
              
              <label>Telefono</label>
              <input type="text" name="" id="telefonou" class="form-control input-sm">
          
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" id="actualizardatos" data-dismiss="modal">Actualizar</button>
           
          </div>
        </div>
      </div>
    </div>


     <script src="librerias/jquery-3.2.1.min.js"></script>
     <script src="js/app.js"></script>
     <script src="librerias/bootstrap/js/bootstrap.js"></script>
     <script src="librerias/alertifyjs/alertify.js"></script>

</body>

</html>
    <script>

        $(document).ready(function(){
            
            $('#tabla').load('componente/tabla.php');
            
        });

     </script>


    <script>

         $(document).ready(function(){
            $('#guardarnuevo').click(function(){

            nombre = $('#nombre').val();
            apellido = $('#apellido').val();
            email = $('#email').val();
            telefono = $('#telefono').val();

            agregardatos(nombre,apellido,email,telefono);

        });
    });

    </script>