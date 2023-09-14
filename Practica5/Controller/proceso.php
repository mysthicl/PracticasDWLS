<?php
include 'conf.php';

$opcion = $_POST['opciones'];

if($opcion == 1){
//insert
$nombre = $_POST['nombre'];
$estado = 1;
$descripcion = $_POST['descripcion'];
$fecha = date('YY,mm,dd');
$ingresado_en = date('YY,mm,dd');
$actualizado_en = date('YY,mm,dd');
$raza = $_POST['raza'];

$query = "INSERT INTO `tbl_especies`(`nombre`, `estado`, `descripcion`, `fecha`, `ingresado_en`, `actualizado_en`, `id_raza`) VALUES ('$nombre','$estado]','$descripcion','$fecha','$ingresado_en','$actualizado_en','$raza')";
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    header("Location: ../View/index.php");
}else{
    header("Location: agregar.php");
}
}else if($opcion == 2){
    //update

}else{
    //delete

}
?>