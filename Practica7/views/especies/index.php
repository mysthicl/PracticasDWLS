<?php
require '../../db/db.php';
require '../../constantes.php';
$css = CDN_BS_CSS;
$js = CDN_BS_JS;
$fa = CDN_BS_FA;

$query = "SELECT * FROM tbl_especies";
$ejecutar = $conn->prepare($query);
$ejecutar->execute();
$data = $ejecutar->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= $css ?>
    <?= $fa?>
</head>

<body>
    <div class="container">
        <h1>Listado de especies</h1>
        <div class="card-header">
            <div class="card-body">
                <table class="table table-bordered table-stripped" style="text-align: center;">
                    <thead>
                        <th>Nombre: </th>
                        <th>Estado: </th>
                        <th>Fecha creacion: </th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data as $especie) {
                        ?>
                            <tr>
                                <td><?= $especie->nombre ?></td>
                                <td><?= $especie->estado ?></td>
                                <td><?= $especie->fecha ?></td>
                                <td style="width: auto;">
                                    <button class="btn btn-warning">Modificar</button>
                                    <button class="btn btn-danger">Eliminar</button>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?= $js ?>
</body>

</html>