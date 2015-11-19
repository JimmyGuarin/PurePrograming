<?php

 	
     

		$conexion;
        $host="localhost";
        $db_name="u803155544_purep";
        $username="u803155544_felip";
        $password="TYUce9YxsQ";
        
        try{
            $conexion= new PDO("mysql:host={$host};dbname={$db_name}",
            $username, $password);

            
			$consulta= "select * from subastas";
			$retorno = $conexion->query($consulta);

            
				
            
        } catch (Exception $ex) {

            echo "Connection error".$ex->getMessage();
        }
        
?>