<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Modelo{
    
    protected $conexion;
    protected $nombre_tabla;


    public function Modelo(){
        
        $host="localhost";
        $db_name="pureprograming";
        $username="root";
        $password="";
        
        try{
            $this->conexion= new PDO("mysql:host={$host};dbname={$db_name}",
            $username, $password);
            
        } catch (Exception $ex) {

            echo "Connection error".$ex->getMessage();
        }
        
        
    }
   
    
    
    
    
    protected function query($query){
        return $this->conexion->query($query);
        
       
    }
    
    protected  function insert($query,$valores){
        
       $stmt= $this->conexion->prepare($query);
        $i=1;
         foreach ($valores as $key =>$value){
           
           print_r("entra".$i);
           $stmt->bindValue($i++,$value);
            
            
        }
        $stmt->execute();
        $result = $stmt->fetchAll();
    }
    
    
    
}



?>