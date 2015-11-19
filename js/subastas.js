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
    
    
     
                              
                                    
                                    

                               
                       