<?php
$server = "localhost";
$user = "root";
$pwd = "";
$db = "zoounivo";

$conexion = mysqli_connect($server, $user, $pwd, $db);

if(!$conexion){
    echo "Error";
}
?>