<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Controlador
 *
 * @author JimmyG
 */
class Controlador {
    //put your code here
    
    private $parametros;
    
    
    


    protected function cargarModelo($nombre_modelo){
        
        $nombre_modelo= strtolower($nombre_modelo);
        $nombre_modelo=  ucfirst($nombre_modelo);
        $urlFile = 'modelos/' . $nombre_modelo . '.php';
        if (file_exists($urlFile)) {
           
            include $urlFile;
            $class = $nombre_modelo;
            $nombre_modelo = new $class();
            return $nombre_modelo;
        } else {
          return null;
          
          }
    }
    
     protected function cargarVista($nombre_vista){
        
        $nombre_vista= strtolower($nombre_vista);
        //$nombre_vista=  ucfirst($nombre_vista);
         echo "entré a vistas.";
        $urlFile = 'vistas/' . $nombre_vista.'.php';
         echo "url: ".$urlFile;
        if (file_exists($urlFile)) {

            require_once $urlFile;
            echo "entre a url file";
            echo $urlFile;
             header("Location:/".$urlFile);
            return true;
        } else {

          echo "no entre a url file";  
          return false;
          
          }
    }
    protected function insertar($nombreModelo){
         
            $modelo = $this->cargarModelo($nombreModelo);
            $modelo->insertar($this->getParametros());
            
    }
    
    
    public function listar($nombreModelo){
            
    }
    
    public function  setParametros($params){
        
        $this->parametros=$params;
    }
    
    public function getParametros(){
        
        return $this->parametros;
    }
}
