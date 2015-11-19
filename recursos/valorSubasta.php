<?php

include 'db_conection.php';


function valor($id){
    
    include 'db_conection.php';
    
    
    
    $consulta1="select idUsuario, MAX(monto_Actual) AS monto_Actual from pujasusuario where idSubasta='$id' GROUP BY idUsuario order by monto_Actual desc;";
        
    $respuesta1=$conexion->query($consulta1);
    $fila = $respuesta1->fetchAll();
    $idu=$fila[0][0];
    $idp=$fila[0][1];
    
    if($idp!=null&&$idp!=""){
        
        $consulta2="SELECT id,nombre FROM `users` WHERE id='$idu'";
        $result1=$conexion->query($consulta2);
        $fila = $result1->fetchAll();
        $nombrep=$fila[0][1];   
        
        
        
        echo "Pujando Win: ".$nombrep." Valor: $".$idp;
     }
    
    
    else{
        
        
         $consulta="select monto_inicial  from subastas where id='$id' ";
        $respuesta=$conexion->query($consulta);
    
         $A=$respuesta->fetchAll(); 
        foreach ($A as $row) {
        
             echo "Valor inicial $".$row['monto_inicial'];      

         }
        
    }
    
   
        
    
   
    
        
        
        
        //echo"subasta";
    //}

}


?>