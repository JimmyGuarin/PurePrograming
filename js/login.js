/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    function ingresar() {  
        FB.login(function(response){  
            alert("ddd");
            validarUsuario();  
            
        }, {scope: 'public_profile, email'});  
    }  



    function validarUsuario() {  
        FB.getLoginStatus(function(response) {  
            if(response.status == 'connected') {  
                FB.api('/me', function(response) {  
                alert('Hola ' + response.name);  
                    crearCookie(response.name);
                });  
            } else if(response.status == 'not_authorized') {  
                alert('Debes autorizar la app!');  
            } else {  
                alert('Debes ingresar a tu cuenta de Facebook!');  
            }  
        });  
    }  
    
    
  function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    var nombre=profile.getEmail();
    signOut();
    crearCookie(nombre);
}

//Google
 function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
      
    });
  }

function crearCookie(nombreCoockie){

    var d = new Date();
    var n = d.getTime()+3600; 
   console.log(nombreCoockie);
    document.cookie = 
    'chsm=' + nombreCoockie + 
    '; expires=' + n + 
    '; path=/';

    window.location.href = "user.php";

}