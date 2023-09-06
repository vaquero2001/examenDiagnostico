<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $name = 'loginformulario';
    
   $config=mysqli_connect($host, $user, $pass, $name); 

   if($conn->connect_error){
    die ("Connection Failed!". $conn->connect_error);
    }

?>