<?php
    session_start();
     require '../archivos/funciones.php';
   

     if(isset($_SESSION['usuario'])){
        header('Location: index.login.php');
    }

    // $errores='';
     
     // Comprobamos si ya han sido enviado los datos
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);//comprobamos que la cadena de texto no tenga caractéres extraños
         $password = $_POST['password'];
         $password = hash('sha512', $password);
        
         //COMPRUEBAS QUE LOS DATOS SE ESTAN RECIBIENDO
         $conexion = conexion('may08mud_muebleria','may08mud','GCruiz99GCruiz99');

         //verificamos si hay usuarios en la base de datos(statement)
         $statement = $conexion->prepare('SELECT * FROM usuario WHERE nombre_usuario = :usuario AND pass = :password');
         //les pasamos los placeholders
         $statement->execute(array(
                 ':usuario' => $usuario,
                 ':password' => $password
             ));
     
         $resultado = $statement->fetch();//el metodo fetch nos devuelve el resultado
         //si el resultado nos devuelve false significa que la consulta statement falló
         //es necesario que el resultado sea true.
         //var_dump($resultado);
         if ($resultado !== false) {//si el resultado es diferente de false
            $_SESSION['usuario'] = $usuario;//creamos una sesion
             header('Location: index.login.php');//rederigimos al usuario al contenido
            // echo "Datos correctos";
         } else {
            $errores = "Datos incorrectos";
         }
     }
     require '../views/login.view.php';
     
     
?>