<?php
session_start();
if(isset($_SESSION['ok'])){
    header('Location: principal.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>LOGIN</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form action="validacion.php" method="POST">
                    <input type="text" id="usuario" name="usuario" placeholder="Ingrese su usuario">
                    <input type="password" id="contra" name="contra" placeholder="Ingrese su contraseña">
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>