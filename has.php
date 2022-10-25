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
                <a class="nav-link active" href="Simetrico.php">Cifrado Simetrico</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="asimetrico.php">Cifrado Asimetrico</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="has.php">hash</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
   </div>
    <center><h1 class="mt-5">hash</h1></center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <center>
        <form method="post" class="mt-5" action="encriptadohas.php">        
      
          <div for="colFormLabel" class="col-sm-4 col-form-label">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Introducir el Nombre" required>
                  <label for="floatingInput">Introducir el Nombre</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="email"  class="form-control" name="Correo" id="Correo" placeholder="Correo" required >
                  <label for="floatingInput">Correo</label>
                </div> 
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="Passwor" id="Passwor" placeholder="Contraseña" required>
                  <label for="floatingInput"> Contraseña a cifrar</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="Passwor2" id="Passwor2" placeholder="Contraseña" required>
                  <label for="floatingInput">  Repetir contraseña Contraseña </label>
                </div>
          </div>     
        <div>
              <input type="submit" class="btn btn-primary"  value ="Cifrar "  name ="Cifrar" id="Cifrar" >
              
       </div>
        </form>

        <br><br>
        
        <div class = "col-6">

          <table class="table table-hover table-striped">
            
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Contraseña</th>
              </tr>
            </thead>
            <tbody>
                <?php
                  foreach ($query3 as $row){?>
                  <tr>

                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['Nombre'] ?></td>
                    <td><?php echo $row['Correo'] ?></td>
                    <td><?php echo $row['Passwor'] ?></td>
                    
                  </tr>

                  <?php
                  }

                ?>
            </tbody>

          </table>
    
        </div>
       
     <br><br>
    
     </center>
  </body>

</html>