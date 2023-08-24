<?php
session_start();
$user = 'admin';
$pass = '321';

$usuario = $_POST['usuario'];
$contra = $_POST['contra'];

if($usuario === $user  && $contra === $pass){
    $_SESSION['ok'] = "ok";
    $_SESSION['nombre'] = $usuario;
    header("Location: principal.php");
}else{
    header("Location: index.php");
}
?>