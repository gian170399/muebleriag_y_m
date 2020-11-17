<?php
    require '../archivos/funciones.php';
    
    $conexion = conexion('may08mud_muebleria','may08mud','GCruiz99GCruiz99');
    if(!$conexion){
        die();
    }

    $id= isset($_GET['id']) ? (int)$_GET['id'] : false;

    if(!$id){
        header('Location: ../index.php');
    }

    $statement = $conexion->prepare('SELECT * FROM productos WHERE id= :id');
    $statement->execute(array(':id'=> $id));

    $foto = $statement->fetch();

    if(!$foto){
        header('Location: ../index.php');
    }
    
    require '../views/single.view.php';
    
?>