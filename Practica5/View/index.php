<?php
include '../Controller/conf.php';
require '../Controller/constante.php';
$css = CDN_BS_CSS;
echo $css;
$js = CDN_BS_JS;
echo $js;

$query = "SELECT * FROM tbl_especies";
$ejecutar = mysqli_query($conexion, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="agregar.php">Agregar +</a>
  </li>
</ul>
    <div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th hidden>Id</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>Ingresado</th>
                <th>Actualizado</th>
                <th>Raza</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($datos = mysqli_fetch_array($ejecutar)){
            echo "<tr>";
                echo "<td hidden>".$datos[0]."</td>";
                echo "<td>".$datos[1]."</td>";
                echo "<td>".$datos[2]."</td>";
                echo "<td>".$datos[3]."</td>";
                echo "<td>".$datos[4]."</td>";
                echo "<td>".$datos[5]."</td>";
                echo "<td>".$datos[6]."</td>";
                echo "<td>".$datos[7]."</td>";
                echo "<td></td>";
            echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>