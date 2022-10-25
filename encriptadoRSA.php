<?php
include("conexion.php");

$config = array(
    "config" => "C:/xampp/php/extras/openssl/openssl.cnf",
    'private_key_bits'=> 2048,
    'default_md'=> "sha256",
);

$generar = openssl_pkey_new($config);
openssl_pkey_export($generar,$keypriv,NULL,$config);

 $keypub = openssl_pkey_get_details($generar);

 file_put_contents('privada.key',$keypriv);
 file_put_contents('publica.key',$keypub['key']);

 ////////////////////////////////////////////////////////

$Nombre= $_POST['Nombre'];
$Accidentes = $_POST['Accidentes'];
$Discapacidad = $_POST['Discapacidad'];


$keypublica = openssl_pkey_get_public(file_get_contents('publica.key'));
openssl_public_encrypt($Discapacidad,$datoscifrados,$keypublica);
//$keyprivada = openssl_pkey_get_private(file_get_contents('privada.key'));

$inser="INSERT INTO tblsensibles(Nombre,Accidentes,Discapacidad) values('$Nombre','$Accidentes','$datoscifrados')";
$query = mysqli_query($conexion,$inser);

//$antecedentes_cifrado_64 = base64_encode($antecedentes_cifrado);

if($query){
    Header("Location: asimetrico.php");
}
else{
    Header("Location: asimetrico.php");
}


?>