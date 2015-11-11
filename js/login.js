/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    function ingresar() {  
        FB.login(function(response){  
            validarUsuario();  
        }, {scope: 'public_profile, email'});  
    }  



    function validarUsuario() {  
        FB.getLoginStatus(function(response) {  
            if(response.status == 'connected') {  
                FB.api('/me', function(response) {  
                    alert('Hola ' + response.name);  
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
    console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
    console.log('Name: ' + profile.getName());
    console.log('Image URL: ' + profile.getImageUrl());
    console.log('Email: ' + profile.getEmail());
}

//Google
 function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }

