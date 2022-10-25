<?php

include ('conexion.php');

$Nombre = $_POST['Nombre'];
$Colonia = $_POST['Colonia'];
$Enfermedad = $_POST['Enfermedad'];



$Enfermedad_md5 = md5($Enfermedad);
$Colonia_en = password_hash($Colonia,PASSWORD_BCRYPT);


    $inser = "INSERT INTO tblmd5(Nombre,Colonia,Enfermedad) values ('$Nombre','$Enfermedad_md5','$Colonia_en')";
    $query = mysqli_query($conexion,$inser);


    if($query){
        Header("Location:md5.php");
    }else{
        error_reporting();
    }


?>