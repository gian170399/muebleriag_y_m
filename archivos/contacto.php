<?php
if(isset($_POST['submit'])){
  
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
    // $header = 'From: '.$_POST['correo']."\r\n";
    // $header = 'Reply-to: '.$_POST['correo']."\r\n";
    // $header = "X-Mailer: PHP/".phpversion();
    
    

    if(!empty($nombre)){
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    }else{
        $errores ='Por favor ingresa un nombre <br/>';
    }

    if(!empty($correo)){
        // $correo = trim($correo);
        $correo = filter_var($correo, FILTER_SANITIZE_STRING);  
            
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $errores = 'Por favor ingresa un correo valido <br/>';
        }

    }else{
        $errores ='Por favor ingresa un correo <br/>';
    }

    if(!empty($mensaje)){
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
        // $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
    }else{
        $errores ='Por favor ingresa el mensaje <br/>';
    }


    if(!$errores){
        $enviar_a='gian170399_ruiz@hotmail.com';
        $asunto = 'Correo enviado desde www.muebleriagm.com';
        $mensaje_preparado = "De: $nombre \n";
        $mensaje_preparado .= "Correo: $correo \n";
        $mensaje_preparado .= "Mensaje: ".$mensaje;

        mail($enviar_a, $asunto, $mensaje_preparado);
        $enviado = "Se envió correctamente";
        }
    }
?>
