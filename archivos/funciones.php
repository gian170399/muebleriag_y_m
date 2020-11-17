<?php

// function comprobar_sesion(){
// 	if(isset($_SESSION['usuario'])){
//         header('Location: index.login.php');
//     }
// }
# Funcion para conectarnos a la base de datos.
# Return: la conexion o false si hubo un problema.
function conexion($tabla, $usuario, $pass){
	try {
		$conexion = new PDO("mysql:host=localhost;dbname=$tabla", $usuario, $pass);
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conexion;	
	} catch (PDOException $e) {
		return false;
	}
}

# Funcion para limpiar y convertir datos como espacios en blanco, barras y caracteres especiales en entidades HTML.
# Return: los datos limpios y convertidos en entidades HTML.
function limpiarDatos($datos){
	// Eliminamos los espacios en blanco al inicio y final de la cadena
	$datos = trim($datos);

	// Quitamos las barras / escapandolas con comillas
	$datos = stripslashes($datos);

	// Convertimos caracteres especiales en entidades HTML (&, "", '', <, >)
	$datos = htmlspecialchars($datos);
	return $datos;
}


function id_articulo($id){
	return (int)limpiarDatos($id);
}

function pagina_actual(){
	return isset($_GET['p']) ? (int)$_GET['p']: 1; 
}

function obtener_post($post_por_pagina, $conexion){
	//1.- Obtenemos la pagina actual
	// $pagina_actual = isset($_GET['p']) ? (int)$_GET['p']: 1;
	// Para reutilizar el codigo creamos una funcion que nos dice la pagina actual.

	//2.- Determinamos desde que post se mostrara en pantalla
	$inicio = (pagina_actual() > 1) ? (pagina_actual() * $post_por_pagina - $post_por_pagina) : 0;

	//3.- Preparamos nuestra consulta trayendo la informacion e indicandole desde donde y cuantas filas.
	// Ademas le pedimos que nos cuente cuantas filas tenemos.
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM productos ORDER BY id DESC LIMIT {$inicio}, {$post_por_pagina}");

	$sentencia->execute();
	return $sentencia->fetchAll();
}

function numero_paginas($post_por_pagina, $conexion){
	//4.- Calculamos el numero de filas / articulos que nos devuelve nuestra consulta
	$total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_post->execute();
	$total_post = $total_post->fetch()['total'];

	//5. Calculamos el numero de paginas que habra en la paginacion
	$numero_paginas = ceil($total_post / $post_por_pagina);
	return $numero_paginas;
}

function obtener_post_por_id($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM productos WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
} function comprobarSesion(){
	// Comprobamos si la session esta iniciada
	if (!isset($_SESSION['usuario'])) {
		header('Location: ../admin/login.php');
	}
}
?>