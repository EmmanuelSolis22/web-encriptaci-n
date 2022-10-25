<?php

include("conexion.php");


$Discapacidad = $_POST['Discapacidad'];

$keyprivada = openssl_pkey_get_private(file_get_contents('privada.key'));

openssl_private_decrypt($Discapacidad,$datos_descifrados,$keyprivada);

 echo $datos_descifrados;

?>