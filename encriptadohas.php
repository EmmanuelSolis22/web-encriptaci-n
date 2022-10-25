<?php

    include('conexion.php');

    $Nombre= $_POST['Nombre'];
    $Correo= $_POST['Correo'];
    $Passwor = $_POST['Passwor'];
    $Passwor2 = $_POST['Passwor2'];
     
    $pass = password_hash($Passwor,PASSWORD_DEFAULT);
    $veridicado = password_verify($Passwor2,$pass);
    
    if($veridicado){

        $inser = "INSERT INTO tblhas(Nombre,Correo,Passwor) VALUES ('$Nombre','$Correo', '$pass')";
        $query= mysqli_query($conexion,$inser);

        if($query){
            Header("Location: has.php");
        
        }
    }
    
?>