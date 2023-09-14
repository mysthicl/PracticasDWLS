<?php

$servername="localhost";
$username="root";
$pass="";



try {
$conn=new PDO("mysql:host=$servername;dbname=zoounivo",$username,$pass);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//echo "Connected successfully";
} catch (\Throwable $th) {
//throw $th;
}

?>