  $("span.help-block").hide();

  var pass;  
function validar(campo){
    
        if(campo=='nombre'){
            
             nombre = document.getElementById(campo).value;
            if(nombre==null||nombre.length == 0|| /^\s+$/.test(nombre) ){
                
               $("#glypcn"+campo).remove();
               $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
               $('#'+campo).parent().children('span').text("Ingrese su nombre").show();
               $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
               return false;
            }
            else{
                
                if(!isNaN(nombre)){
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("No Acepta Numeros").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                }
                else{
                    
                 $("#glypcn"+campo).remove();
                 $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                 $('#'+campo).parent().children('span').hide();
                 $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                 return true;
                    
                }
                
		 
            }
            
        }
        
        if(campo=='apellidos'){
            
             apellidos = document.getElementById(campo).value;
            if(apellidos==null||apellidos.length == 0|| /^\s+$/.test(apellidos) ){
                
               $("#glypcn"+campo).remove();
               $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
               $('#'+campo).parent().children('span').text("Ingrese su nombre").show();
               $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
               return false;
                
            }
            else{
                
                if(!isNaN(apellidos)){
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("No Acepta Numeros").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                }
                else{
                    
                 $("#glypcn"+campo).remove();
                 $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                 $('#'+campo).parent().children('span').hide();
                 $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                 return true;
                    
                }
                
		
	
            }
            
           
        }
        
        if (campo==='documento')
            {
                documento = document.getElementById(campo).value;
                if( documento == null || documento.length == 0 || /^\s+$/.test(documento) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese algo").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                   
                }
                else
                {
                    if(isNaN(documento)) {

                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#'+campo).parent().children('span').text("No Acepta letras").show();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");

              
                        return false;
                    }
                    else{

                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#'+campo).parent().children('span').hide();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
             
                        return true;
                    }
                    
                    
                }
                
            }
        if (campo==='email'){
                email = document.getElementById(campo).value;
                if( email == null || email.length == 0 || /^\s+$/.test(email) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese algun Email").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        
                    return false;
                    
                }
                else{
                    if (!(/\S+@\S+\.\S+/.test(email))) {
                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#'+campo).parent().children('span').text("Ingrese un Email valido").show();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        return false;
                    }
                    else{
                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#'+campo).parent().children('span').hide();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    
                        return true;
                    }
                }

            }
            
            
            if(campo=='pass1'){
                 pass1 = document.getElementById(campo).value;
                 
                 if(pass1.length<=3){
                     
                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#'+campo).parent().children('span').text("Contraseña muy corta").show();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        return false;
                     
                 }
                 else{
                     
                     if(pass1.length<=6){
                     
                        pass=pass1;
                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-warning has-feedback");
                        $('#'+campo).parent().children('span').text("Contraseña poco segura").show();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-warning-sign form-control-feedback'></span>");
                        return true;
                     
                     }
                     else{
                         
                        pass=pass1; 
                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#'+campo).parent().children('span').hide();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                        return true;
                         
                     }
                     
                 }
             }
                 if(campo=='pass2'){
                 pass2 = document.getElementById(campo).value;
                
                 if(pass2.length<=3){
                     
                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#'+campo).parent().children('span').text("Las contraseñas no coinciden").show();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        return false;
                     
                 }
                 else{
                     
                     if(pass2.length>3){
                     
                        pass=document.getElementById('pass1').value;
                        if(pass.length==pass2.length&&pass==pass2){
                      
                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                         $('#'+campo).parent().children('span').text("Las Contraseñas Coinciden").show();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                        return true;
                     
                        }
                        
                     else{
                         
                        ("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#'+campo).parent().children('span').text("Las contraseñas no Coinciden").show();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        return false;
                        
                         
                     }
                     
                    }
                    
                 
                
                }
            }
        
      
	
}