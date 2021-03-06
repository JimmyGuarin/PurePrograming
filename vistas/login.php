<!DOCTYPE html>
<html lang="es">     
    <head>        
        <title>Mis Subastas</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">
        <meta name="google-signin-client_id" content="932395650705-nc6mg50akfd5bpovecradv2r87re19c1.apps.googleusercontent.com">
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/login.css">
     <script src="../js/jquery-1.11.2.js"></script>  
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="../js/login.js"></script>  

    <script>  
        (function(d,s,id) {  
            var js, fjs = d.getElementsByTagName(s)[0];  
            if(d.getElementById(id)) return;  
            js = d.createElement(s); js.id = id;  
            js.src = "http://connect.facebook.net/es_ES/sdk.js";  
            fjs.parentNode.insertBefore(js, fjs);  
        }(document, 'script', 'facebook-jssdk'));  
        window.fbAsyncInit = function() {  
            FB.init({  
                appId    : '684207505047553',  
                cookie   : true,  
                xfbml    : true,  
                version  : 'v2.0'  
            });  
        }  
    </script> 
    
    
    
    </head>
    
    <body>
        
        <header>
            <div class="contenedor">
                
                <h1 class="icon-subasta">Susbasta</h1>
                <input type="checkbox" id="menu_bar">
                <label class="icon-menu" for="menu_bar"></label>
                
                <nav class="menu">
                    <a href="/PurePrograming/home/cambiarVista/index">Inicio</a>
                    <a href="/PurePrograming/home/cambiarVista/quienesSomos">Quienes Somos</a>
                    <a href="/PurePrograming/home/cambiarVista/subastas">Subastas</a>
                    <a href="/PurePrograming/home/cambiarVista/contacto">Contactenos</a>
                    <a href="">Login</a>
                </nav>
            </div>
            
        </header>
        <main>
            <section id="banner">
               <img src="../img/banner1.jpg" alt="">
               <div class="contenedor">
               <h2>Encuentra lo que necesitas</h2>
               <p>¿Que esta buscando?</p>
                                
               
                <a href="/PurePrograming/home/cambiarVista/registrate">Registrate</a>
                         
                   
               </div>             
                        
            </section>
            <section id="Bienvenidos">
              <div class="contenedor">
                <h2>Ingresa tus datos</h2>
               
               </div>
            </section>
            <section id="blog">
                
                <div class="contenedor">
                   
                    <form class="login" action="/PurePrograming/home/login" method="POST" id="miFormulario">
                   <label for="username">Usuario</label>
                   <input type="email" placeholder="Ingresa tu email" name="username" id="username" required>  
                    <label for="password">Contraseña</label>
                    <input type="password" placeholder="Ingresa tu Contraseña" name="pass" id="pass" required>  
                    <a href="#" class="forgot">Perdiste tu Contraseña?</a>
                    <input type="submit" id="boton" value="Entrar">
                     
                    </form>
                    
                    <div class="social-wrap a">
                        <button id="facebook" onclick="ingresar();">Sign in with Facebook</button>
                         <div id="my-signin2"></div>
                        <script>
                          function onSuccess(googleUser) {
          
                            onSignIn(googleUser);
                          }
                          function onFailure(error) {
                            console.log(error);
                          }
                          function renderButton() {
                            gapi.signin2.render('my-signin2', {
                              'scope': 'https://www.googleapis.com/auth/plus.login',
                              'width': 100,
                              'height': 35,
                              'longtitle': true,
                              'theme': 'dark',
                              'font-size':17,  
                              'onsuccess': onSuccess,
                              'onfailure': onFailure
                            });
                          }
                        </script>
                        
                    </div>
                      
                   
                                
  
                    
                </div>
            </section>
            <section id="info">
                <h3>Para nosotros el cliente nuestra mayor prioridad, Registrate ahora y recibe 10 pujas GRATIS</h3>
                <div class="contenedor">
                    <div class="info-pet">
                        <img src="../img/pet1.jpg" alt="">
                        <h4>Autos</h4>
                    </div>
                    <div class="info-pet">
                        <img src="../img/pet2.jpg" alt="">
                        <h4>Motos</h4>
                    </div>
                    <div class="info-pet">
                        <img src="../img/pet3.jpg" alt="">
                        <h4>Electrodomesticos</h4>
                    </div>
                    <div class="info-pet">
                        <img src="../img/pet4.jpg" alt="">
                        <h4>Joyas</h4>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="contenedor">
                <p class="copy">Mis Subastas &copy; 2015</p>
                <div class="sociales">
                    <a class="icon-facebook" href="#"></a>
                    <a class="icon-twitter" href="#"></a>
                    <a class="icon-instagram" href="#"></a>
                    <a class="icon-googleplus" href="#"></a>
                </div>
            </div>
        </footer>
        
         <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
    </body>
    
    
</html>