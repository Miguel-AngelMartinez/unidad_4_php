<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/sweetalert2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/admin.css">
    <title>development/Desarrolladores</title>
</head>
<body>
<script src="../../JS/sweetalert2.min.js"></script>
<div class="row" id="uno">
  <h1 class="text-center"> loggin de desarrolladores!!</h1>
    </div>
  <div class="content-center"style="display:flex;aling-items:center;justify-content:center;">
    
   <div class="row col-md-4" id="dos">
    <form action="inicio.php" method="post">
        <div class="form-group">
        <label>Email:</label>
        <input class="form-control" type="text" name="mail" placeholder="example@example.com" required>
        </div>
        <div class="form-group">
        <label>contraseña:</label>
        <input class="form-control" type="password" name="password" placeholder="password" required>
        </div>
        <div class="fa fa-align-center">
        <input  id="tres"class="btn btn-primary" type="submit">
        </div>
    </form>
    </div>
  </div>

</body>
<?php

if(isset($_POST["mail"]) && isset($_POST["password"])){

    $mail=$_POST["mail"];
    $pass=$_POST["password"];
    comprobar($mail,$pass);
}

function comprobar($mail,$pass){
    include("../../php/conectar.php");
    $sql = "SELECT * FROM admins WHERE mail = '$mail' AND contraseña = '$pass'";
    
    if(!$consulta = $conectar->query($sql)){
        echo "ERROR: no se pudo ejecutar la consulta!";
    }else{

        // 6. Cuento registros obtenidos del select. 
        // Como el nombre de usuario en la clave primaria no debería de haber mas de un registro con el mismo nombre.
        $filas = mysqli_num_rows($consulta);

        // 7. Comparo cantidad de registros encontrados

        if($filas){
            
            header('location:https://design.lindo-y-querido.com/Development_Dreams/Development_Dreams/view/admin/salas.php');
             // Si está todo correcto redirigimos a otra página
        }if($filas==0){
            echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";

            echo "";

        }
    }
}

?>
</html>