<!DOCTYPE html>
<html lang="es">     
    <head>        
        <title>Mis Subastas</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">
    <link rel="stylesheet" href="/PurePrograming/css/fontello.css">
    <link rel="stylesheet" href="/PurePrograming/css/main.css">
    <link rel="stylesheet" href="/PurePrograming/css/contacto.css">
    <link rel="stylesheet" href="/PurePrograming/css/user.css">
    </head>
    
    <body>
        
        <header>
            <div class="contenedor">
                <h1 class="icon-carrito"> Bienvenido Usuario</h1>
                <h1 class="icon-subasta">Susbasta</h1>
                <input type="checkbox" id="menu_bar">
                <label class="icon-menu" for="menu_bar"></label>
                
                <nav class="menu">
                  <a href="/PurePrograming/home/cambiarVista/user">Inicio</a>
                    <a href="/PurePrograming/home/cambiarVista/subastar">Subastar</a>
                    <a href="/PurePrograming/home/cambiarVista/user">Subastas</a>
                    <a href="/PurePrograming/home/cambiarVista/contactoU">Contactenos</a>
                    <a href="">Pujas</a>
                    <a href="/PurePrograming/home/logout">Log Out</a>
                </nav>
            </div>
            
        </header>
        <main>
            <section id="banner">
               <img src="img/banner1.jpg" alt="">
               <div class="contenedor">
               <h2>Encuentra lo que necesitas</h2>
               <p>¿Que esta buscando?</p>
               <a href="/PurePrograming/home/cambiarVista/registrate">Registrate</a>                   
               </div>               
            </section>
            <section id="Bienvenidos">
              <div class="contenedor">
                <h2>Formulario de Compra</h2>
               
              
               
               </div>
            </section>
            <section id="blog">
                <h3>Porfavor selecciona la cantidad y el medio de pago</h3>
                <h3>Disponibles: 10</h3>
                <div class="contenedor">
                   <form id="miFormulario" method="GET" class="miEstilo" action="/">
            
                    <label>Cantidad</label>
                    <input id="cantidad" name="cantidad" type="text" value="" placeholder="Ingresa la Cantidad " />
                     <label>Medio de Pago</label>
                       <select name="pais">
                    <option value="">Selecionar</option>    
                    <option value="AF">Visa</option>
                    <option value="AL">MasterCard</option>
                    <option value="DE">PSE</option>
                    <option value="AD">Neteller</option>
                    
                    
                    <input id="boton" type="button" value="Comprar"/>
                </form>
                    
                </div>
            </section>
            <section id="info">
                <h3>Para nosotros el cliente nuestra mayor prioridad, Registrate ahora y recibe 10 pujas GRATIS</h3>
                <div class="contenedor">
                    <div class="info-pet">
                        <img src="img/pet1.jpg" alt="">
                        <h4>Autos</h4>
                    </div>
                    <div class="info-pet">
                        <img src="img/pet2.jpg" alt="">
                        <h4>Motos</h4>
                    </div>
                    <div class="info-pet">
                        <img src="img/pet3.jpg" alt="">
                        <h4>Electrodomesticos</h4>
                    </div>
                    <div class="info-pet">
                        <img src="img/pet4.jpg" alt="">
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