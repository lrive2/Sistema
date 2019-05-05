     
     function agregardatos(nombre, apellido, email, telefono) {
        cadena = "nombre=" + nombre + "&apellido=" + apellido + "&email=" + email + "&telefono=" + telefono;
        $.ajax({
            type: "POST",
            url: "php/agregarDatos.php",
            data: cadena,
            success: function(r) {
                if (r == 1) {
                    $('#tabla').load('componente/tabla.php');
                    alertify.success("agregado con exito :)");
                } else {
                    alertify.error("Fallo el servidor :(");
                }
            }
        });
    }


function agregaform(datos) {
    
        d = datos.split('||');
    
        $('idpersona').val(d[0]);
        $('nombreu').val(d[1]);
        $('apellidou').val(d[2]);
        $('emailu').val(d[3]);
        $('telefonou').val(d[4]);
    }

   
function actualizarDatos() {
    
        id = $('idpersona').val();
        nombre = $('nombreu').val();
        apellido = $('apellidou').val();
        email = $('emailu').val();
        telefono = $('telefonou').val();
        
    cadena =    "id=" + id + 
                "&nombre=" + nombre + 
                "&apellido=" + apellido + 
                "&email=" + email + 
                "&telefono=" + telefono;
        
    
    $.ajax({
            type: "POST",
            url: "php/actualizarDatos.php",
            data: cadena,
            success: function(r) {
                if (r == 1) {
                    $('#tabla').load('componente/tabla.php');
                    alertify.success("Actualizado con exito :)");
                } else {
                    alertify.error("Fallo el servidor :(");
                }
            }
        });
    }

 function preguntrSiNo(id) {
        alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar ese registro?', 
                    function(){eliminarDatos(id) }, 
                    function() {alertify.error('Se cancelo')});
    }

   function eliminarDatos(id) {
       
       cadena = "id=" + id;
        
       $.ajax({
            type: "POST",
            url: "php/eliminarDatos.php",
            data: cadena,
            success: function(r){
                if(r == 1){
                    $('#tabla').load('componente/tabla.php');
                    alertify.success("Eliminado con exito!");
                } else {
                    alertify.error("Fallo el servidor :(");
                }
            }
        });
    }