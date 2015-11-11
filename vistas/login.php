<!DOCTYPE html>
<html lang="es">     
    <head>        
        <title>Mis Subastas</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">
    <link rel="stylesheet" href="/PurePrograming/css/fontello.css">
    <link rel="stylesheet" href="/PurePrograming/css/main.css">
    <link rel="stylesheet" href="/PurePrograming/css/login.css">
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
               <img src="/PurePrograming/img/banner1.jpg" alt="">
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
                   
                    
                    
                </div>
            </section>
            <section id="info">
                <h3>Para nosotros el cliente nuestra mayor prioridad, Registrate ahora y recibe 10 pujas GRATIS</h3>
                <div class="contenedor">
                    <div class="info-pet">
                        <img src="/PurePrograming/img/pet1.jpg" alt="">
                        <h4>Autos</h4>
                    </div>
                    <div class="info-pet">
                        <img src="/PurePrograming/img/pet2.jpg" alt="">
                        <h4>Motos</h4>
                    </div>
                    <div class="info-pet">
                        <img src="/PurePrograming/img/pet3.jpg" alt="">
                        <h4>Electrodomesticos</h4>
                    </div>
                    <div class="info-pet">
                        <img src="/PurePrograming/img/pet4.jpg" alt="">
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
    </body>
    
    
</html>