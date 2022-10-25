<?php

include ("conexion.php");

$llave = "SEPTIMOA";
$Nombre= $_POST['Nombre'];
$Correo= $_POST['Correo'];
$Passwor = $_POST['Passwor'];

//$mensaje_cifrar = "Mi materia Segurirdad Informatica";

   function cifrar ($mensaje, $llave){

        $inivec = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-256-CBC'));
        $men_encriptado = openssl_encrypt($mensaje,"AES-256-CBC",$llave,0,$inivec);

        return base64_encode($men_encriptado."::".$inivec);
    }
/*
    function descifrar($mensaje,$llave){

        list($datos_encriptados,$inivec) = explode("::",base64_decode($mensaje),2);
        return openssl_encrypt($datos_encriptados,"AES-256-CBC",$llave,0,$inivec);
    }
*/
    $mensaje_cifrado = cifrar($Passwor,$llave);
   // mysqli_query($conexion,"INSERT INTO tblpacientes(Nombre,Correo,Passwor) values('$Nombre','$Correo','$mensaje_cifrado')");
    $inser="INSERT INTO tblpacientes(Nombre,Correo,Passwor) values('$Nombre','$Correo','$mensaje_cifrado')";
    $query = mysqli_query($conexion,$inser);

    if($query){
        Header("Location: simetrico.php");
        
        
    }else {
        Header("Location: simetrico.php");
    }

  //  $mensaje_descifrado = descifrar( $mensaje_cifrado, $llave);

?>






