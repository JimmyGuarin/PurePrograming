<!DOCTYPE html>
<html lang="es">     
    <head>        
        <title>Mis Subastas</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/user.css">
    <link rel="stylesheet" href="../css/modal.css">
    <link rel="stylesheet" href="../css/imagen.css">
    <link rel="stylesheet" href="../css/jquery.countdown.css">
    <script src="../js/jquery-1.11.2.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/jquery.plugin.js"></script>
    <script src="../js/jquery.countdown.js"></script>
    <style type="text/css">
        .defaultCountdown { width: 100%; height: 50px; }
    </style>
    <?php
    $conexion;
        $host="localhost";
        $db_name="u803155544_purep";
        $username="u803155544_felip";
        $password="TYUce9YxsQ";
        
        try{
            $conexion= new PDO("mysql:host={$host};dbname={$db_name}",
            $username, $password);

            
			$consulta= "select * from subastas ORDER BY UNIX_TIMESTAMP('fecha_cierre') DESC";
			$retorno = $conexion->query($consulta);

            
				
            
        } catch (Exception $ex) {

            echo "Connection error".$ex->getMessage();
        }
    ?>
    </head>
    
    <body>
        
        <header>
            <div class="contenedor">
                <h1 id="usuario" class="icon-carrito"> Bienvenido Usuario</h1>
                <h1 class="icon-subasta">Subasta</h1>
                <input type="checkbox" id="menu_bar">
                <label class="icon-menu" for="menu_bar"></label>
                
                <nav class="menu">
                    <a href="">Inicio</a>
                    <a href="/PurePrograming/home/cambiarVista/subastar">Subastar</a>
                    <a href="#">Subastas</a>
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
                <h2>PUJA AHORA . . . </h2>
               <p>Actualmente cuentas con 10 Pujas, para ofertar a cualquier producto, Animate !.</p>  
              
               
               </div>
            </section>
            <section id="blog">
                <h3>Lo ultimo en subastas en nuestro blog</h3>
                <div class="contenedor">
                    
                    <?php                
                   
                    include "../recursos/valorSubasta.php";
                    $f=$retorno->fetchAll();
                   // echo '<script language="javascript">alert("'.$f[0][0].'");</script>';
                   
                    
                    
                    foreach ($f as $row) {
        
                        
                        date_default_timezone_set('America/Bogota');
                        $objDateTime = new DateTime('NOW');
                        $date2=$row['fechacierre'];
                        $interval = $objDateTime->diff(new DateTime($date2));
                        $int= $interval->format('Y-m-d H:i:s');
                        

                    ?>
                    <article class="contenedorTemp" id="<?php echo $row['id']?>">
                       
                       
                        <?php echo "<img class=\"imagen\" src=\""."../imagenesSubastas/".$row['imagen']."\"/>";?>   
                        <h4><?php echo $row['nombre'];?> </h4>
                        <div class="defaultCountdown"><?php echo $interval->format('%m %a %H %I %S');?></div>
                        <div id="contenedorBoton">
                            <p>Propietrario Nº <?php echo $row['propietario'];?></p>
                            <h4 class="value" id="<?php echo $row['id']?>"><?php   valor( $row['id']);?></h4>
                            
                            
                            <p><?php echo $row['descripcion'];?></p>
                            <input class="botonTemporal" type="button" id="<?php echo $row['id']?>" value="Puja Ahora">
                        </div>
                        
                        
                        
                    </article>
                    <?php
                    
                    }
                    ?>
                    
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
     <script src="../js/user.js" > </script> 
    </body>
    
    
</html>