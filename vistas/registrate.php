<!DOCTYPE html>
<html lang="es">     
    <head>        
        <title>Mis Subastas</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">
    <link rel="stylesheet" href="/PurePrograming/css/bootstrap.min.css">
    <link rel="stylesheet" href="/PurePrograming/css/fontello.css">
    <link rel="stylesheet" href="/PurePrograming/css/main.css">
    <link rel="stylesheet" href="/PurePrograming/css/registrate.css">
   
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
               <img src="/PurePrograming/img/banner1.jpg" alt="">
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
                    <label>Pais</label>
                    <select name="pais">
                    <option value="">Selecionar</option>    
                    <option value="AF">Afganistán</option>
                    <option value="AL">Albania</option>
                    <option value="DE">Alemania</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antártida</option>
                    <option value="AG">Antigua y Barbuda</option>
                    <option value="AN">Antillas Holandesas</option>
                    <option value="SA">Arabia Saudí</option>
                    <option value="DZ">Argelia</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaiyán</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrein</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BE">Bélgica</option>
                    <option value="BZ">Belice</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermudas</option>
                    <option value="BY">Bielorrusia</option>
                    <option value="MM">Birmania</option>
                    <option value="BO">Bolivia</option>
                    <option value="BA">Bosnia y Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BR">Brasil</option>
                    <option value="BN">Brunei</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="BT">Bután</option>
                    <option value="CV">Cabo Verde</option>
                    <option value="KH">Camboya</option>
                    <option value="CM">Camerún</option>
                    <option value="CA">Canadá</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CY">Chipre</option>
                    <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comores</option>
                    <option value="CG">Congo</option>
                    <option value="CD">Congo, República Democrática del</option>
                    <option value="KR">Corea</option>
                    <option value="KP">Corea del Norte</option>
                    <option value="CI">Costa de Marfíl</option>
                    <option value="CR">Costa Rica</option>
                    <option value="HR">Croacia (Hrvatska)</option>
                    <option value="CU">Cuba</option>
                    <option value="DK">Dinamarca</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egipto</option>
                    <option value="SV">El Salvador</option>
                    <option value="AE">Emiratos Árabes Unidos</option>
                    <option value="ER">Eritrea</option>
                    <option value="SI">Eslovenia</option>
                    <option value="ES" selected>España</option>
                    <option value="US">Estados Unidos</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Etiopía</option>
                    <option value="FJ">Fiji</option>
                    <option value="PH">Filipinas</option>
                    <option value="FI">Finlandia</option>
                    <option value="FR">Francia</option>
                    <option value="GA">Gabón</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GD">Granada</option>
                    <option value="GR">Grecia</option>
                    <option value="GL">Groenlandia</option>
                    <option value="GP">Guadalupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GY">Guayana</option>
                    <option value="GF">Guayana Francesa</option>
                    <option value="GN">Guinea</option>
                    <option value="GQ">Guinea Ecuatorial</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="HT">Haití</option>
                    <option value="HN">Honduras</option>
                    <option value="HU">Hungría</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IQ">Irak</option>
                    <option value="IR">Irán</option>
                    <option value="IE">Irlanda</option>
                    <option value="BV">Isla Bouvet</option>
                    <option value="CX">Isla de Christmas</option>
                    <option value="IS">Islandia</option>
                    <option value="KY">Islas Caimán</option>
                    <option value="CK">Islas Cook</option>
                    <option value="CC">Islas de Cocos o Keeling</option>
                    <option value="FO">Islas Faroe</option>
                    <option value="HM">Islas Heard y McDonald</option>
                    <option value="FK">Islas Malvinas</option>
                    <option value="MP">Islas Marianas del Norte</option>
                    <option value="MH">Islas Marshall</option>
                    <option value="UM">Islas menores de Estados Unidos</option>
                    <option value="PW">Islas Palau</option>
                    <option value="SB">Islas Salomón</option>
                    <option value="SJ">Islas Svalbard y Jan Mayen</option>
                    <option value="TK">Islas Tokelau</option>
                    <option value="TC">Islas Turks y Caicos</option>
                    <option value="VI">Islas Vírgenes (EEUU)</option>
                    <option value="VG">Islas Vírgenes (Reino Unido)</option>
                    <option value="WF">Islas Wallis y Futuna</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italia</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japón</option>
                    <option value="JO">Jordania</option>
                    <option value="KZ">Kazajistán</option>
                    <option value="KE">Kenia</option>
                    <option value="KG">Kirguizistán</option>
                    <option value="KI">Kiribati</option>
                    <option value="KW">Kuwait</option>
                    <option value="LA">Laos</option>
                    <option value="LS">Lesotho</option>
                    <option value="LV">Letonia</option>
                    <option value="LB">Líbano</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libia</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lituania</option>
                    <option value="LU">Luxemburgo</option>
                    <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                    <option value="MG">Madagascar</option>
                    <option value="MY">Malasia</option>
                    <option value="MW">Malawi</option>
                    <option value="MV">Maldivas</option>
                    <option value="ML">Malí</option>
                    <option value="MT">Malta</option>
                    <option value="MA">Marruecos</option>
                    <option value="MQ">Martinica</option>
                    <option value="MU">Mauricio</option>
                    <option value="MR">Mauritania</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">México</option>
                    <option value="FM">Micronesia</option>
                    <option value="MD">Moldavia</option>
                    <option value="MC">Mónaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="MS">Montserrat</option>
                    <option value="MZ">Mozambique</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Níger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk</option>
                    <option value="NO">Noruega</option>
                    <option value="NC">Nueva Caledonia</option>
                    <option value="NZ">Nueva Zelanda</option>
                    <option value="OM">Omán</option>
                    <option value="NL">Países Bajos</option>
                    <option value="PA">Panamá</option>
                    <option value="PG">Papúa Nueva Guinea</option>
                    <option value="PK">Paquistán</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Perú</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PF">Polinesia Francesa</option>
                    <option value="PL">Polonia</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="UK">Reino Unido</option>
                    <option value="CF">República Centroafricana</option>
                    <option value="CZ">República Checa</option>
                    <option value="ZA">República de Sudáfrica</option>
                    <option value="DO">República Dominicana</option>
                    <option value="SK">República Eslovaca</option>
                    <option value="RE">Reunión</option>
                    <option value="RW">Ruanda</option>
                    <option value="RO">Rumania</option>
                    <option value="RU">Rusia</option>
                    <option value="EH">Sahara Occidental</option>
                    <option value="KN">Saint Kitts y Nevis</option>
                    <option value="WS">Samoa</option>
                    <option value="AS">Samoa Americana</option>
                    <option value="SM">San Marino</option>
                    <option value="VC">San Vicente y Granadinas</option>
                    <option value="SH">Santa Helena</option>
                    <option value="LC">Santa Lucía</option>
                    <option value="ST">Santo Tomé y Príncipe</option>
                    <option value="SN">Senegal</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leona</option>
                    <option value="SG">Singapur</option>
                    <option value="SY">Siria</option>
                    <option value="SO">Somalia</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="PM">St Pierre y Miquelon</option>
                    <option value="SZ">Suazilandia</option>
                    <option value="SD">Sudán</option>
                    <option value="SE">Suecia</option>
                    <option value="CH">Suiza</option>
                    <option value="SR">Surinam</option>
                    <option value="TH">Tailandia</option>
                    <option value="TW">Taiwán</option>
                    <option value="TZ">Tanzania</option>
                    <option value="TJ">Tayikistán</option>
                    <option value="TF">Territorios franceses del Sur</option>
                    <option value="TP">Timor Oriental</option>
                    <option value="TG">Togo</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad y Tobago</option>
                    <option value="TN">Túnez</option>
                    <option value="TM">Turkmenistán</option>
                    <option value="TR">Turquía</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UA">Ucrania</option>
                    <option value="UG">Uganda</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistán</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Vietnam</option>
                    <option value="YE">Yemen</option>
                    <option value="YU">Yugoslavia</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabue</option>
                    </select>
                    <br>

                    <label>Departamento</label>
                    <select name="intereses">
                        <option value="">Selecionar</option>    
                        <option value="AF">Cundinamarca</option>
                        <option value="AL">Antioquia</option>
                        <option value="AL">Quindio</option>
                        <option value="AL">Risaralda</option>
                    </select>
                    <br>

                    <label>Ciudad</label>
                    <select name="intereses">
                        <option value="">Selecionar</option>    
                        <option value="AF">Armenia</option>
                        <option value="AL">Calarca</option>
                        <option value="AL">Circasia</option>
                        <option value="AL">Salento</option>
                    </select>
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
     <script src="/PurePrograming/js/jquery-1.11.2.js"></script>   
     <script src="/PurePrograming/js/bootstrap.min.js"></script>
     <script src="/PurePrograming/js/validarFormulario.js" > </script>    
    </body>
    
    
</html>