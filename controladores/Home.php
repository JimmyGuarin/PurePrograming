<?php

include 'libs/Controlador.php';

class Home extends Controlador{
    
	public function imprimir(){
            echo "asdasd";
            print_r($this->parametros);

        }
        
        public function insertarUsuario(){
            
            $this->insertar("Usuario");
            
        }
        
        public function agregarpuja(){

                 $email_user=$_POST["email"];
                 $cantidad=$_POST["cantidad"];

                $modelo=  $this->cargarModelo("Usuario");
                $modelo->comprarPujas($cantidad,$email_user);
                $this->cargarVista('pujas');
        }

        
        public function index(){
            if(!isset($_COOKIE["chsm"])){
                $this->cargarVista("index");
             }
             else{
                 //$this->cargarVista("user");
                 header("Location:/vistas/user.php");
             }
            
            
            
        }
       
        public function cambiarVista(){
            
                 $this->cargarVista($this->getParametros()[0]);
                 $this->setParametros(null);
                 
        }


        
        public function register(){
            $name=$_POST["nombre"];
            $apellidos=$_POST["apellidos"];
            $email=$_POST["email"];
            $edad=$_POST["edad"];
            $documento=$_POST["documento"];          
            $pass1=$_POST["pass1"];
            
            
                $values=array(
                    "nombre"=>$name,
                    "apellidos"=>$apellidos,
                    "email"=>$email,
                    "edad"=>$edad,
                    "documento"=>$documento,
                    "pass1"=>$pass1
                );
       
                $modelo=  $this->cargarModelo("Usuario");
                $modelo->insertar($values);
                setcookie("chsm",$email,  time()+3600,"/");
               // $this->cargarVista("user");
                
            
            
        } 
    
        public function idporemail($email)
        {
            
        }
        public function registerS()
        {
            
            $modelo=  $this->cargarModelo("Subasta");
            $email=   $_COOKIE['chsm'];
            $result=  $modelo->consultarID($email);
            $fila = $result->fetchAll();
            
            
             
            
            //echo"<script>alert('Usted esta siendo redireccionado a la pagina principal')</script>";
            
            $ruta="./imagenesSubastas/";
            opendir($ruta);
            $destino=$ruta.$_FILES['imagen']['name'];
            copy($_FILES['imagen']['tmp_name'],$destino);
            
            
            
            
            $name=$_POST["nombre"];
            $imagen=$_FILES['imagen']['name'];
            $monto_inicial=$_POST["valor"];
            $fechacierre=$_POST["Fecha"];
            $horacierre=$_POST["Hora"];
            $descripcion=$_POST["textoamplio"];
            
           
            $propietario=$fila[0][0];   //Recupere Por medio de la cookie el email, e hize una consulta para sacar, la ID y poder Asociar el Producto
            
            
                 $date = new DateTime($fechacierre." ".$horacierre);
                 $fechacierre= $date->format('Y-m-d H:i:s');
                 echo $fechacierre;
            
            
            
                $values=array(
                    "nombre"=>$name,
                    "descripcion"=>$descripcion,
                    "imagen"=>$imagen,
                    "monto_inicial"=>$monto_inicial,
                    "fechacierre"=>$fechacierre,
                    "propietario"=>$propietario
                    
                );
                
                    
                   
                    
                  
                $modelo->insertar($values);
               
            
                header("Location:/vistas/user.php");
           
                
                
                
            
            
        } 
        
        public function login(){
            $username=$_POST["username"];
            $pass=$_POST["pass"];
            $modelo=  $this->cargarModelo("Usuario");
            $respuesta=$modelo->authenticate($username,$pass);
            
            if($respuesta!=null&&$respuesta->rowCount()>0){
                //http://php.net/manual/es/function.setcookie.php
                setcookie("chsm",$username,  time()+3600,"/");
                header("Location:/vistas/user.php");
                exit;
            }else{
                 echo "Login Fallido<br><br><a href='/PurePrograming/Home/cambiarVista/login'>Volver</a>";
                
            }
        }
        
        public function logout(){
            setcookie("chsm","",  time()-3600,"/");
            header("Location:/");
        }
        
}

?>