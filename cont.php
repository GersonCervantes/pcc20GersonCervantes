<?php include("bd.php"); ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="sty.css">

    <title>Contacto</title>
  </head>
  <body>

              <div class="row">
                
              <div class="col-3">
                <div class="d-grid gap-2">
                    <a href="index.html" class="btn btn-warning">Inicio</a>
                </div>
              </div>

              <div class="col-3">
                <div class="d-grid gap-2">
                  <a href="tin.php" class="btn btn-info">Tiendas</a>
                </div>
              </div>

              <div class="col-3">
                <div class="d-grid gap-2">
                  <a href="pro.php" class="btn btn-primary">Productos / Servicios</a>
                </div>
              </div>

              <div class="col-3">
                <div class="d-grid gap-2">
                  <a href="log.php" class="btn btn-secondary">Ver Mensajes</a>
                </div>
              </div>
            </div>
<br><br><br>
    

    <h2><b>Contáctenos</b></h2> 
    <br><br><br>


    <form action="guar.php" method="post"> 
    <div class="container">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><b>Nombres</b></label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su nombre y apellido" name="nombre">
          </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><b>Telefono / Celular</b></label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese número telefonico, debe contar con 8 digitos" name="telefono">
          </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><b>Correo Electronico</b></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese correo electronico" name="correo">
          </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><b>Mensaje</b></label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su mensaje" name="mensaje">
        </div>

        <center>
            <input type="submit" value="Enviar Mensaje" class="btn btn-light" name="enviar">
        </center>

    </div>
</form>
<br><br><br><br><br><br>

    <footer>
        &nbsp; PBX:&nbsp;1485-5820 &nbsp;&nbsp; - &nbsp;&nbsp; Direccion:&nbsp;Diagonal 1; 9 36-01 zona 12, sontano 1, local S10 Guatemala, 01066 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Carnet:&nbsp;2020-20048 &nbsp;&nbsp; Nombre:&nbsp;Gerson Ariel Cervantes Agustin.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  </body>
</html>