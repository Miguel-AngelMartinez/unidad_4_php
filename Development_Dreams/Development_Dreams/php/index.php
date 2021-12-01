<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="confirmar.css">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Development Dreams</title>
</head>

<body class="m-0 row justify-content-center">
   
    <header class="container-fluid, Contacto">
        <h1><img src="Logo.png" class="Logo"> Development Dreams</h1>
        <h2>Ingresa para disfrutar de esta experiencia</h2>
        <div class="content-center, Datos" id="uno">
            <form action="index.php" method="post">
                <label for="">Inicia Sesión</label>
                <input type="text" name="usuario" placeholder="Usuario" required>
                <br>
                <input type="password" name="password" placeholder="Contraseña" required>
                <br>
                <input class="Button"type="submit" placeholder="Ingresar">
                <a href="">¿No tienes cuenta? Registrate</a>
            </form>
        </div>
    </header>

    <!--documento php-->
    
    <?php
        require("conectar.php");
    
    if(isset($_POST["usuario"],$_POST["password"])){
        $usuario=$_POST["usuario"];
        $pass=$_POST["password"];
           
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$pass'";
        
        if(!$consulta = $conectar->query($sql)){
            echo "ERROR: no se pudo ejecutar la consulta!";
        }else{

            // 6. Cuento registros obtenidos del select. 
            // Como el nombre de usuario en la clave primaria no debería de haber mas de un registro con el mismo nombre.
            $filas = mysqli_num_rows($consulta);

            // 7. Comparo cantidad de registros encontrados
            if($filas){
                
                header('location:https://design.lindo-y-querido.com/development-dreams/Index.html'); // Si está todo correcto redirigimos a otra página
            }if($filas==0){
                echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
                echo "<script> setTimeout(\"location.href='Index.html'\",100)</script>";
                echo "";

            }
        }
    }
    ?>
</body>
</html>