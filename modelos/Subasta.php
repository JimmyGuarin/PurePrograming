<?php
require_once 'libs/Modelo.php';

class Subasta extends Modelo {
    
    
    function __construct() {
        parent::__construct();
        $this->nombre_tabla="subastas";
    }
    
    function getSubastas(){
        return $this->query("Select * from subastas");
    }
    
    public function consultarID($email)
    {
        return $this->query("SELECT id FROM `users` WHERE email='$email'");
    }
    
    public function insertar($valores){
	
        $consulta="";
        $coma="";
        print_r($valores);
        foreach ($valores as $key =>$value){
           
            $consulta = $consulta." ".$coma.$key."=?";
            $coma=",";
            
        }
        $consulta="INSERT INTO ".$this->nombre_tabla." SET ".$consulta;
        $this->insert($consulta, $valores);
        
        echo '<script language="javascript">alert("'.$consulta.'");</script>';
         
         
        
      
    }	
    
    public function authenticate($username,$password){
        
        return $this->query("Select * from users where email='$username' and pass1='$password'");
    }
    
    public function delete($id){
    		
    	$consulta= "delete from ".$this->nombre_tabla." where id=".$id;
    	print_r($consulta);
    	$this->query($consulta);
    	print_r($this->conexion->errorInfo());



    }

      
   

    public function update($valores,$id){
	$consulta  = "";

	$coma = "";
	foreach ($valores as $key => $value) {
	$consulta = $consulta." ".$coma.$key."=".$value;
	$coma=",";
	}
	       
	$consulta= "update ".$this->nombre_tabla." SET ".$consulta." where id=".$id;
	print_r($consulta);
	$this->query($consulta);
	print_r($this->conexion->errorInfo());
    }	

	
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */