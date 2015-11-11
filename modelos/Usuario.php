<?php
require_once 'libs/Modelo.php';

class Usuario extends Modelo {
    
    
    function __construct() {
        parent::__construct();
        $this->nombre_tabla="users";
    }
    
    function getUsuarios(){
        return $this->query("Select * from users");
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

