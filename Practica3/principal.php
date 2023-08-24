<?php
session_start();
// if($_SESSION['ok'] != "ok"){
//     header("Location: index.php");
// }
 if(!isset($_SESSION['ok'])){
     header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="salir.php">Salir</a>
    </nav>
    <h1>Bienvenido <?= $_SESSION['nombre'] ?></h1>
</body>

</html>