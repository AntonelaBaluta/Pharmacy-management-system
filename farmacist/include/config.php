<?php

   $serverName = "DESKTOP-A9B1JEC\SQLEXPRESS";   //server microsoft SQL
   $database = "Farmacie";  //nume BD
  
   $uid = "sa";     //utilizator
   $pwd = "1234";   //parola
  
   try {  
      $conn = new PDO( "sqlsrv:server=$serverName;Database=$database;TrustServerCertificate=1", $uid, $pwd);   
      $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );   
   }  
  
   catch( PDOException $e ) {  
      die( "Error connecting to SQL Server" );   
   }  
  
   // echo "Connected to SQL Server\n";  
?>