<!DOCTYPE html>
<html lang="es">     
    <head>        
        <title>Mis Subastas</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/contacto.css">
    <link rel="stylesheet" href="../css/user.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-1.7-development-only.js"></script>
    </head>
    
    <body>
        
        <header>
            <div class="contenedor">
                <h1 id="usuario" class="icon-carrito"> Bienvenido Usuario</h1>
                <h1 class="icon-subasta">Susbasta</h1>
                <input type="checkbox" id="menu_bar">
                <label class="icon-menu" for="menu_bar"></label>
                
                <nav class="menu">
                   <a href="user.php">Inicio</a>
                    <a href="">Subastar</a>
                    <a href="user.php">Subastas</a>
                    <a href="/PurePrograming/home/cambiarVista/contactoU">Contactenos</a>
                    <a href="/PurePrograming/home/cambiarVista/pujas">Pujas</a>
                    <a href="/PurePrograming/home/logout">Log Out</a>
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
                <h2>Formulario de Registro de Producto</h2>
               
              
               
               </div>
            </section>
            <section id="blog">
                <h3>Porfavor digita todos los campos</h3>
                <div class="contenedor">
                 <form id="miFormulario" method="POST" class="miEstilo" action="/PurePrograming/home/registerS" enctype="multipart/form-data">
            
                    <label>Nombre del Articulo</label>
                    <input id="nombre" name="nombre" type="text" required/>
                    <label>Imagen</label>
                    <input id="imagen" name="imagen" type="file" required/>
                     <label>Monto inicial</label>
                     <input id="valor" name="valor" type="number" step="1000" min="1000" value="" placeholder="Ingresa el monto inicial" required/>
                    <label>Fecha de cierre</label>
                    <input type="date" name="Fecha" step="1" min="2015-19-22" max="2016-12-31"  required>
                    <label>Hora</label>
                    <input type="time" name="Hora" required>
                    <label>Descripcion</label> 
                    <br>
                    <textarea id="pass" name="textoamplio" required></textarea>
                    <input id="boton" name="boton" type="submit" value="Enviar"/>
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
        <script src="../js/user.js" > </script> 
        <script src="../js/jquery-ui.js" > </script> 
        <script src="../js/jquery.timepicker.js"></script> 
        <script src="../js/subastar.js" > </script> 
    </body>
    
    
</html>