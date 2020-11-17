<?php
    require 'archivos/funciones.php';
    $conexion = conexion('may08mud_muebleria','may08mud','GCruiz99GCruiz99');

    if(!$conexion){
        die();
    }
    require 'archivos/paginacion.php';
    require 'archivos/contacto.php';
    require 'views/index.view.php';
?>