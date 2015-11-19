<!DOCTYPE html>
<html lang="es">     
    <head>        
        <title>Mis Subastas</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/registrate.css">
   
    </head>
    
    <body>
        
        <header>
            <div class="contenedor">
                
                <h1 class="icon-subasta">Susbasta</h1>
                <input type="checkbox" id="menu_bar">
                <label class="icon-menu" for="menu_bar"></label>
                
                <nav class="menu">
                    <a href="/PurePrograming/Home">Inicio</a>
                    <a href="/PurePrograming/home/cambiarVista/quienesSomos">Quienes Somos</a>
                    <a href="/PurePrograming/home/cambiarVista/subastas">Subastas</a>
                    <a href="/PurePrograming/home/cambiarVista/contacto">Contactenos</a>
                    <a href="/PurePrograming/home/cambiarVista/login">Login</a>
                </nav>
            </div>
            
        </header>
        <main>
            <section id="banner">
               <img src="../img/banner1.jpg" alt="">
               <div class="contenedor">
               <h2>Bienvenido a Subastas Web</h2>
               <p>Encontraras lo que buscas</p>
                                
               
                <a href="/PurePrograming/home/cambiarVista/registrate">Registrate</a>
                         
                   
               </div>             
                        
            </section>
            <section id="Bienvenidos">
              <div class="contenedor">
                <h2>Formulario de Registro</h2>
              
               
               </div>
            </section>
            <section id="blog">
                <h3>Por favor diligencia todos los campos</h3>
                <div class="contenedor">
                    <form id="miFormulario" method="POST" class="miEstilo form-horizontal" action="/PurePrograming/home/register">
            
                       
                     <div class="form-group">
                        <label class="control-label">Nombres</label> 
                        <div>
                             <input id="nombre" class="form-control" name="nombre" type="text" value="" placeholder="Ingresa tus nombres" onkeyup="validar('nombre');" required/>
                             <span class="help-block"></span>
                        </div>    
                       

                    </div>   
                    <br>
                    <div class="form-group">
                         <label class="control-label">Apellidos</label>
                         <div>
                             <input id="apellidos" class="form-control" name="apellidos" type="text" value="" placeholder="Ingresa tus apellidos" onkeyup="validar('apellidos');" required/>
                            <span class="help-block"></span>
                         </div>
                      
                    </div>
                    <br>
                    <div class="form-group">
                        
                        <label>Correo Electrónico</label>
                        <div>
                            <input id="email" name="email" type="email" value="" placeholder="Ingresa tu correo electrónico" onkeyup="validar('email');" required/>
                            <span class="help-block"></span>
                        </div>    
                        

                    </div> 
                     <br>
                     
                     <div class="form-group">
                        <label class="control-label">Documento de Identidad</label>
                        <div >
                        
                            <input id="documento" class="form-control" name="documento" type="text" value="" placeholder="Ingresa tu documento" onkeyup="validar('documento');" required/>
                            <span class="help-block"></span>

                        </div> 
                    </div>
                     <br>
                    <div class="Campo">
                        
                        <label>Edad</label>
                        <input id="edad" name="edad" type="number"  min="18" value="" placeholder="Ingresa tu edad" required />
			<span class="help-block"></span>

                    </div>
                    <br>

                    <div class="form-group">
                        <label class="control-label">Contraseña</label>
                        
                        <div>
                            <input id="pass1" class="form-control" name="pass1" type="password" value="" placeholder="Ingresa tu Contraseña" onkeyup="validar('pass1');" required/>
                             <span class="help-block"></span>
                        </div>
                       
                    </div>
                    <br>
                    
                     <div class="form-group">
                         <label class="control-label">Confirmar Contraseña</label>
                         <div>
                             <input id="pass2" class="form-control" name="pass2" type="password" value="" placeholder="Confirma tu contraseña" onkeyup="validar('pass2');" required/>
                            <span class="help-block"></span>
                         </div>    
                    </div>
                    <br>
                    <input id="boton" type="submit" value="Registrarme"/>
                </form>
                   
                    
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
     <script src="../js/jquery-1.11.2.js"></script>   
     <script src="../js/bootstrap.min.js"></script>
     <script src="../js/validarFormulario.js" > </script>    
    </body>
    
    
</html>