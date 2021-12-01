<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="confirmar.css">
    <title>registro</title>
</head>
<body class="m-0 row justify-content-center">
   
    <header class="container-fluid, Contacto">
        <h1> Registrate para iniciar sesion</h1>
        <div class="content-center, Datos" id="uno">
            <form action="registro.php" method="post">
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="usuario" placeholder="Usuario" required>
                <input type="password" name="contaseña" placeholder="Contraseña" required>
                <input type="text" name="telefono" placeholder="Telefono" required>
                <input class="Button" type="submit" placeholder="enviar">
            </form>
        </div>
    </header>

   
    
    <?php
    
    require("conectar.php");

    if(isset($_POST["nombre"],$_POST["usuario"],$_POST["contraseña"])){
        $nombre=$_POST["nombre"];
        $usuario=$_POST["usuario"];
        $password=$_POST["contraseña"];
        $telefono=$_POST["telefono"];
        $sql="INSERT INTO `usuarios` (`usuario`, `contraseña`, `nombre`, `telefono`) VALUES ('$usuario','$password','$nombre','$telefono')";
        
        if(mysqli_query($conectar,$sql)){
            
            
            $Destinatario = $usuario;
            //este es el correo al que se le enviara el mensaje
            $nombre="Don pendejo: Miguel Angel Castrado Martinez";
            $email ='miguelangelmartinezcastro771@gmail.com';
            $telefono = $_POST['telefono'];
            $mensaje = "bienvenido:  "."$Destinatario"." tu contraseña es:"."$password";

            $header =("Enviado de Develpment Dreams");
            $mensajeCompleto = $mensaje . "\n Atentamente: " . $nombre . "\n Gracias por registrarte. ";

            mail($Destinatario, $header, $mensajeCompleto, "From: " . $email);
            echo "<script> alert('Correo enviado exitosamente')</script>";
            header('location:https://design.lindo-y-querido.com/development-dreams/Index.html');
        }else{
            echo"error: ".$sql."<br>".mysqli_error($conectar);
        }

    }

    
    
    ?>
</body>
</html>