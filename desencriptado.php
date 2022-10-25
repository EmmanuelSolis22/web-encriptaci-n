<?php
    include("conexion.php");
    
    $llave = "SEPTIMOA";
    $Passwor = $_POST['Passwor'];


    function descifrar($mensaje,$llave){

        list($datos_encriptados, $inivec) = explode('::', base64_decode($mensaje),2);

        return openssl_decrypt($datos_encriptados,"AES-256-CBC",$llave,0,$inivec);

    }

    $mensaje_descifrado = descifrar($Passwor, $llave);
    echo $mensaje_descifrado;

?>