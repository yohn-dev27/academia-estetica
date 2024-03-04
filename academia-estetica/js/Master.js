function AjaxEjecutar(Page, Datos, Objet) {
    $.ajaxSetup({ cache: false });
    var Objet = "#" + Objet;
    //$("#img_cargando").modal("show");
    $(Objet).load(Page, Datos, function(response, Estado, xhr) {
        if (Estado == "error") {
            var Message = "Error al cargar la Vista. ";
            $(Objet).html(Message + xhr.Estado + " " + xhr.Estado);
        }
    });
   // $("#img_cargando").modal("hide");
}

function Suma(valor1, valor2) {        
    var parametros = {                
        "valor1": valor1,
        "valor2": valor2
    };        
    $.ajax({                
        data:  parametros,
                        url:    './logics/Suma.php',
                        type:   'post',
                        beforeSend: function() {                         //$("#respuesta").html("Procesando, espere por favor...");
            $("#ResultadoSuma").html("Cargando...");
        },
                        success:   function(response) {                        
            $("#ResultadoSuma").html(response);
        }        
    });
}

function CrearActa() {
    AjaxEjecutar('CrearActa.php', {  }, 'mainContainer');
}

function SubirActa() {
    AjaxEjecutar('Views/SubirActa.php', {  }, 'mainContainer');
}
    
function BuscarActa() {
    AjaxEjecutar('Views/BuscarActa.php', {  }, 'mainContainer');
}

function CrearUsuario() {
    AjaxEjecutar('Views/CrearUsuario.php', {  }, 'mainContainer');
}

