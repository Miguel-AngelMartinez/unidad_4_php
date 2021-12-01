<?php
if(!isset($_GET["Acceso"]))
header('location:view/Index.html');
else
header('location:view/admin/inicio.php');
?>