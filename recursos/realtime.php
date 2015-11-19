<?php

include 'db_conection.php';

include 'valorSubasta.php';


 $idsu=$_POST["id"];
 $retorno= valor($idsu);


 echo $retorno;


?>