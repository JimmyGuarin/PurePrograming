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
        
        
        public function index(){
            if(!isset($_COOKIE["chsm"])){
                $this->cargarVista("index");
             }
             else{
                 $this->cargarVista("user");
                 
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
                $this->cargarVista("user");
                
            
            
        } 
        
        
        public function login(){
            $username=$_POST["username"];
            $pass=$_POST["pass"];
            $modelo=  $this->cargarModelo("Usuario");
            $respuesta=$modelo->authenticate($username,$pass);
            
            if($respuesta!=null&&$respuesta->rowCount()>0){
                //http://php.net/manual/es/function.setcookie.php
                setcookie("chsm",$username,  time()+3600,"/");
                header("Location:/PurePrograming/Home/cambiarVista/user");
                exit;
            }else{
                 echo "Login Fallido<br><br><a href='/PurePrograming/Home/cambiarVista/login'>Volver</a>";
                
            }
        }
        
        public function logout(){
            setcookie("chsm","",  time()-3600,"/");
            header("Location:/PurePrograming");
        }
        
}

?>