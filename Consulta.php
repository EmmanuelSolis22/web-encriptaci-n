<?php

    require ("conexion.php");

    $consulta = "SELECT * FROM tblpacientes";
    $query = mysqli_query($conexion,$consulta);

    $consulta2 = "SELECT * FROM tblsensibles";
    $query2 = mysqli_query($conexion,$consulta2);

    $consulta3 = "SELECT * FROM tblhas";
    $query3 = mysqli_query($conexion,$consulta3);

    $consulta4 = "SELECT * FROM tblmd5";
    $query4 = mysqli_query($conexion,$consulta4);

    

?>