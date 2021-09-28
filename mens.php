<?php include("bd.php"); ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="sty.css">

    <title>Mensajes</title>
  </head>
  <body>

      <div  class="w-100 p-3" style="background-color: #000142"> 
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/vf.png" class="d-block w-100" height="500">
              </div>
            </div>
        </div>
      </div>

            <div class="row">
              <div class="col-4">
                <div class="d-grid gap-2">
                  <a href="index.html" class="btn btn-warning">Inicio</a>
                </div>
              </div>

              <div class="col-4">
                <div class="d-grid gap-2">
                  <a href="tin.php" class="btn btn-info">Tiendas</a>
                </div>
              </div>

              <div class="col-4">
                <div class="d-grid gap-2">
                  <a href="cont.php" class="btn btn-primary">Contactenos</a>
                </div>
              </div>
            </div>
<br><br>

<div class="container">
  <h2><b>Mensajes Recibidos</b></h2>
</div>
<br><br>

<div class="container">
<form action="guar.php" method="post">
  <div class="col-12">
    <table class="table table-success table-striped">
      <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Telefono</th>
        <th scope="col">Correo</th>
        <th scope="col">Mensaje</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $query="SELECT * FROM mensajes";
        $resul=mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($resul)){
        ?>

        <tr>
          <td><?php echo $row ['nombres']?></td>
          <td><?php echo $row ['telefono']?></td>
          <td><?php echo $row ['correo']?></td>
          <td><?php echo $row ['mensaje']?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
</form>
</div>
<br><br><br><br><br>

    <footer>
        &nbsp; PBX:&nbsp;1485-5820 &nbsp;&nbsp; - &nbsp;&nbsp; Direccion:&nbsp;Diagonal 1; 9 36-01 zona 12, sontano 1, local S10 Guatemala, 01066 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Carnet:&nbsp;2020-20048 &nbsp;&nbsp; Nombre:&nbsp;Gerson Ariel Cervantes Agustin.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  </body>
</html>