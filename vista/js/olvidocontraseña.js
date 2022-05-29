
//AGREGUÉEEEEEEEEEEEEEEEEEEEEEEEEEEEEE
$(document).ready(function(){
    id=null;
    $(document).on('click', '#btnEnviar', function(){

        email=$("#email").val();

        if(email!=""){
            ajaxolvidocontraseña(email);
        }
        else{
            Swal.fire({
                text:"Ingrese los datos del correo electrónico",
                icon:"Error",
                title:"Correo Electrónico"
            })
        }
    });
    $(document).on('click', '#btnVolver', function(){
        $(location).attr('href',"iniciar.php");
    });

});

function ajaxolvidocontraseña(email){
    $.ajax({
        data: {
            "email" : email
        },
        type: "POST",
        dataType: "json",
        url: "/fitness-mvc-main/controlador/accion/ajax_olvidocontraseña.php"
    })

    .done(function(response) {   // Cuando no hay problema
        var mens=response.msg;

        if(mens!=""){
            Swal.fire({
                text:mens,
                icon: response.type,
                title: "Correo enviado con exito"

            }).then((result) => {
                if (result.isConfirmed) {
                $(location).attr('href',response.ruta); //Redireccinar a una ruta
                }
              })
            
           
        }
 
     })
     .fail(function(jqXHR, textStatus, errorThrown) {  // Si encuentra algun problema

        Swal.fire({
            title: "ALERTA",
            text: "La solicitud a fallado: " +  errorThrown
        });
    });
}