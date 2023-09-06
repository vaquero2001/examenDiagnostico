<?php
    include("config.php");
    include("session.php");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confpassword = $_POST['confpassword'];
    
    $sql = "INSERT INTO users(nombre, apellido, email, password, confpassword) 
    VALUES('$nombre', '$apellido', '$email', '$password', '$confpassword')";
    if(mysqli_query($mysqli, $sql)){
        echo '<script language="javascript">';
        echo 'alert("Nuevo usuario agregado");';
        echo 'window.location="index.php";';
        echo '</script>';
        
    } else {
        echo '<script language="javascript">';
        echo 'alert("Usuario duplicado!");';
        echo 'window.location="registration.php";';
	echo '</script>';
    }
?>