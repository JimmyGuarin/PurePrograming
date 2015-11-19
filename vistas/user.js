$(document).ready(function(){  
  $(".contenedorTemp").each(function () {
      
      var $this = $(this);
      var austDay = new Date();
      var s =  $this.find(".defaultCountdown").html();
      t=s.split(" ");
      console.log(t);
      var mes=(austDay.getMonth())+parseInt(t[0]);
    var dias=austDay.getDate()+parseInt(t[1]);
    var horas=austDay.getHours()+parseInt(t[2]);
    var minutos=austDay.getMinutes()+parseInt(t[3]);
    var segundos= austDay.getSeconds()+parseInt(t[4]);   



   austDay = new Date(austDay.getFullYear(),mes,dias,horas,minutos,segundos);
      
	$this.find(".defaultCountdown").countdown({until: austDay
         
         });
 
        });
});
    


function getCook(cookiename) 
  {
  // Get name followed by anything except a semicolon
  var cookiestring=RegExp(""+cookiename+"[^;]+").exec(document.cookie);
  // Return everything after the equal sign
  return unescape(!!cookiestring ? cookiestring.toString().replace(/^[^=]+./,"") : "");
  }

//Sample usage
var cookieValue = getCook('chsm');
alert (cookieValue);

if (cookieValue!="") {

	$('#usuario').text("Bienvenido "+cookieValue);
}
else{

	alert('Debes iniciar sesión, acceso denegado'); 
	window.location.href = "index.php";
}


