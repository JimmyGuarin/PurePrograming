<?php

 	
     

		$conexion;
        $host="localhost";
        $db_name="u803155544_purep";
        $username="u803155544_felip";
        $password="TYUce9YxsQ";
        
        try{
            $conexion= new PDO("mysql:host={$host};dbname={$db_name}",
            $username, $password);

            $email_user=$_POST["email"];
			$consulta= "select pujas from users where email='$email_user'";
			$retorno = $conexion->query($consulta);

             foreach ($conexion->query($consulta) as $row) {
                echo $row['pujas']; 
                
            }
           
				
            
        } catch (Exception $ex) {

            echo "Connection error".$ex->getMessage();
        }
        
?>



