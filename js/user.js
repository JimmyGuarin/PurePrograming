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
    
    
   function realtime(){
       
         $(".value").each(function () {
      
                var $this = $(this);
                var id=$( this ).attr('id');
                
            $.ajax({

                type:'POST',
                url:'../recursos/realtime.php',
                data:{id:id},	
                    success:function(data){

                        $this.text(data);
                    }   
                });       
      
        });
    
       
   }
  
    setInterval(realtime, 2000);
    
});


$( ":button" ).click(function() {
  
    
    var email=getCook('chsm');
    var id=$( this ).attr('id');
    var valor=$(this).siblings('h4').html();
    var v=$(this).siblings('h4');
    valor=parseInt(valor.split("$")[1]);
    valor=valor+1000;
    var status = '';
    $.ajax({

	type:'POST',
	url:'../recursos/agregarPuja.php',
	data:{id:id,email:email,valor:valor},	
        success:function(data){
        
            
            var status=data;
            if(status=="Te has quedado sin pujas"){
                alert(data);
            }
            else{
                v.text(data);
            }
            

        
	}
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


if (cookieValue!="") {

	$('#usuario').text("Bienvenido "+cookieValue);
}
else{

	alert('Debes iniciar sesión, acceso denegado'); 
	window.location.href = "index.php";
}


