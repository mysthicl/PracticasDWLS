<?php
require '../Controller/conf.php';
include '../Controller/conf.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Especies</title>
</head>
<body>
    <div class="container">
    <form action="../Controller/proceso.php" method="post">
  <div class="row">
    <div class="col">
        <input type="hidden" value="1" name="opciones">
      <input type="text" class="form-control" id="" placeholder="Nombre" name="nombre">
      <input type="text" class="form-control" id="" placeholder="Descripcion" name="descripcion">
      <select name="raza" id="">
        <option value="1">Pitbull</option>
        <option value="2">Chihuahua</option>
        <option value="3">Doberman</option>
      </select>
      <input type="submit" value="Registrar">
    </div>
  </div>
</form>
    </div>
</body>
</html>