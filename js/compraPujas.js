
function getCook(cookiename) 
  {
  // Get name followed by anything except a semicolon
  var cookiestring=RegExp(""+cookiename+"[^;]+").exec(document.cookie);
  // Return everything after the equal sign
  return unescape(!!cookiestring ? cookiestring.toString().replace(/^[^=]+./,"") : "");
  }

//Sample usage
var email = getCook('chsm');

$.ajax({

	type:'POST',
	url:'../recursos/consultarPujas.php',
	data:{email:email},	success:function(data){
		$('#pujasDisponibles').html("Actualmente cuentas con "+data+ "Pujas");
	}
});

$('#miFormulario').submit(function(){

		var input = $("<input>")
               .attr("type", "hidden")
               .attr("name", "email").val(email);
		$('#miFormulario').append($(input));

		alert('Transaccion realizada correctamente');

});

