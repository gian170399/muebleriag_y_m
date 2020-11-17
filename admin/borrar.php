<?php session_start();

require '../archivos/funciones.php';

// Comprobamos si la session esta iniciada, sino, redirigimos.
$conexion = conexion('may08mud_muebleria','may08mud','GCruiz99GCruiz99');
    if(!$conexion){
        die();
    }

$id = limpiarDatos($_GET['id']);

// Comprobamos que exista un ID
if (!$id) {
	header('Location: modificar.php');
}

$statement = $conexion->prepare('DELETE FROM productos WHERE id = :id');
$statement->execute(array('id' => $id));


header('Location: modificar.php');

?>