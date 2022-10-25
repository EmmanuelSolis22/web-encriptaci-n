<?php
  require("Consulta.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Metdodo Simetrico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>

  <body>
    <div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark" >
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="Simetrico.php">Cifrado Simetrico</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="asimetrico.php">Cifrado Asimetrico</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="has.php">hash</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="md5.php">Cifrado MD5</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="miencriptado.php">Mi encriptado</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
   </div>
    <center><h1 class="mt-5">Mi metodo</h1></center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <center>
        <form method="post" class="mt-5" action="">        
      
          <div for="colFormLabel" class="col-sm-4 col-form-label">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Introducir Mensaje" required>
                  <label for="floatingInput">Introducir Mensaje</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="text"  class="form-control" name="MensajeCifrado" id="MensajeCifrado" placeholder="MensajeCifrado" readonly="readonly" >
                  <label for="floatingInput">Mensaje Cifrado</label>
                </div> 
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="MensajeDescifrado" id="MensajeDescifrado" placeholder="MensajeDescifrado"  readonly="readonly">
                  <label for="floatingInput"> Mensaje Descifrado</label>
                </div>
          </div>     
        <div>
              <input type="button" class="btn btn-primary" onclick = "Encriptar()"  value ="Cifrar "  name ="Cifrar" id="Cifrar" >
              <input type="button" class="btn btn-primary" onclick = "Desencriptar()"  value ="Descifrar "  name ="Descifrar" id="Descifrar" >
              <input type="button" class="btn btn-primary" onclick = "Limpiar()"  value ="Limpiar "  name ="Limpiar" id="Limpiar" >

       </div>
        </form>

        <script src="miencriptado.js"></script>
    
     </center>
  </body>

</html>