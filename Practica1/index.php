<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="index.php" method="POST">
            <label for="">Ingrese un numero</label>
            <input type="number" name="numero" id="" min="0">
            <button type="submit">Enviar!</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $numero = $_POST['numero'];

            for ($i = 1; $i <= 10; $i++) {
                echo $numero . " * " . $i . " el resultado es:" . $numero * $i . "<br>";
            }
        }
        ?>
    </div>
</body>

</html>