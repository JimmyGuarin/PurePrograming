<?php

include 'db_conection.php';

include 'valorSubasta.php';

    
    
    $email=$_POST["email"];
    $idsu=$_POST["id"];
    $valor=$_POST["valor"];
    $valor=$valor;
    
    $consulta1="SELECT id,nombre,pujas FROM `users` WHERE email='$email'";
    $result1=$conexion->query($consulta1);
    $fila = $result1->fetchAll();
    $idp=$fila[0][0];
    $nombrep=$fila[0][1];
    $pujas=$fila[0][2];


    if($pujas!=0){
        
        $consultaU="update users SET pujas=pujas-'1' where id='$idp'";
        $conexion->query($consultaU);
        
         $consulta="INSERT INTO pujasusuario (idUsuario,idSubasta,monto_Actual,estado)VALUES ('$idp','$idsu','$valor','1');";
         $respuesta=$conexion->query($consulta);
         $retorno= valor($idsu);
        
        echo $retorno;
    }
    else{
        
         echo "Te has quedado sin pujas";
    }

    
    
   
    
    
        
   


?>