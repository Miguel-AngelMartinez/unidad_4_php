<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/sweetalert2.min.css">
    <title>Contacto</title>
</head>
<body>
    <script src="../JS/sweetalert2.min.js"></script>

<?php
    $Destinatario = 'miguelangelmartinezcastro771@gmail.com';
    //este es el correo al que se le enviara el mensaje
    $nombre = $_POST['nombre'];
    $email = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $header =("Enviado de Develpment Dreams");
    $mensajeCompleto = $mensaje . "\n Atentamente: " . $nombre . "\n Mi correo es: " . $email . " & mi telefono es: " . $telefono. "\n Espero su respuesta Gracias ";

    mail($Destinatario, $header, $mensajeCompleto, "From: " . $email);
    
    
    guardar($nombre,$email,$telefono,$mensaje);
    redirigir();

    function guardar($nombre,$email,$telefono,$mensaje){
        include('conectar.php');
        
        $sql="INSERT INTO `pedidos`(`nombre`, `email`, `telefono`, `mensaje`) VALUES ( '$nombre','$email','$telefono','$mensaje' )";
            
        if(mysqli_query($conectar,$sql)){
            echo "<script> Swal.fire(
                'Enviado!',
                'sus datos fueron enviados!',
                'success'
              )</script>";
            
        } else {
            echo "Error: " .$sql. "<br>" .mysqli_error($conectar);
        }
    }

    function redirigir(){
        
        header("refresh:3;url=https://design.lindo-y-querido.com/Development_Dreams/Development_Dreams/view/Index.html");
    }
?>

</body>
</html>
