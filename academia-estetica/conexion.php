<?php

//class Cconexion{

 
  //function conexionBD(){    
      $host='localhost';
      $dbname='Consuelo';
      $username='sa';
      $pasword='1234';aqui
      $puerto= 1433;

      try{
            $conn = new PDO ("sqlsrv:Server=$host,$puerto;Database=$dbname",$username,$pasword);
            //echo "Se conecto correctamente a la base de datos";

      }
      catch(PDOException $exp){
          echo ("No se logro conectar a la base de datos: $dbname, error: $exp");
      }

      return $conn;
    //} 

//}

?>
