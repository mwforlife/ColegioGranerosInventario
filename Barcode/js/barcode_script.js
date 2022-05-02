function validarcampos(valor){
    if(valor.length <= 0 ){
           return true;
       }else{
           return false;
       }
    
}

var arrayCantidad = [];
var arrayType = [];
var x=0;
var y=0;
function agregar(){
    var type = $("#type").val();
    var cantidad = $("#cantidad").val();

    arrayCantidad.push(cantidad);
    arrayType.push(type);

    console.log("Agregago con exito");
    console.log(arrayType+" "+arrayCantidad);

    $("#cantidad").val("");
    $("#cantidad").focus();
}

function generar(){
    var type = JSON.encode(arrayType);
    var cantidad = JSON.encode(arrayCantidad);
    var parametros = "type="+type+"&cantidad="+cantidad;

    window.location = "generador.php?"+parametros;
    
    /*$.ajax({
        url: 'generador.php',
        type: 'POST',
        data: parametros,
    })
    .done(function(datos){
        $("#root").append(datos);      
    })
    .fail(function(){
        swal.fire("Error", "Error de Generacion de Codigo","error");
    })
*/

    /*var miAjax = new Request({
        url: "generador.php",
        data: parametros,
        onSuccess: function(datos){
            $("#root").append(datos);
        },
        onFailure: function(){
            swal.fire("Error", "Error de Generacion de Codigo","error");
        }
     })
     miAjax.send();*/
}

function imprSelec() {
	  var ficha = document.getElementById("root");
	  var ventimp = window.open(' ', 'popimpr');
	  ventimp.document.write( ficha.innerHTML );
	  ventimp.document.close();
	  ventimp.print( );
	  ventimp.close();
	}
