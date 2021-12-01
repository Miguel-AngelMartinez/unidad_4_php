<?php
$server="162.241.62.55";
$usuario="lindoyqu_admin_development";
$password="Hola2125";
$database="lindoyqu_development-dreams";

$conectar=mysqli_connect($server , $usuario , $password , $database);

if(!$conectar){
    die("Error de coneccion: ".mysqli_connect_error());
}

?>