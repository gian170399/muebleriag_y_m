<?php   
    session_start();
    require '../archivos/funciones.php';
    $conexion = conexion('may08mud_muebleria','may08mud','GCruiz99GCruiz99');
    if(!$conexion){
        die();
    }

    // Determinamos si se estan enviado datos por el metodo POST o GET
    # Si se envian por POST significa que el usuario los ha enviado desde el formulario
    # por lo que tomamos los datos y los cambiamos en la base de datos.

    # De otra forma significa que hay datos enviados por el metodo GET
    # es decir, el ID que pasamos por la URL, si es asi entonces traemos los 
    # datos de la base de datos a pantalla para que el usuario los pueda modificar.
    if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_FILES)){

    // Limpiamos los datos para evitar que el usuario inyecte codigo.
    // $articulo=$_POST['titulo'];
	$titulo = limpiarDatos($_POST['titulo']);
    $extracto = limpiarDatos($_POST['extracto']);
    $categoria = $_POST['categoria'];
	// Con la funcion nl2br podemos transformar los saltos de linea en etiquetas <br>
	// $texto = nl2br($_POST['texto']);
	$descripcion = limpiarDatos($_POST['descripcion']);
	$id = limpiarDatos($_POST['id']);
	$imagen_guardada = $_POST['imagen-guardada'];
    $imagen = $_FILES['imagen'];
    $precio=limpiarDatos($_POST['precio']);

	# Comprobamos que el nombre del imagen no este vacio, si lo esta
	# significa que el usuario no agrego una nueva imagen y entonces utilizamos la imagen anterior.
	if (empty($imagen['name'])) {
		$imagen = $imagen_guardada;
	} else {
		// De otra forma cargamos la nueva thumb
		// Direccion final del archivo incluyendo el nombre
		# Importante recordar que este archivo se encuentra dentro de la carpeta admin, asi que
		# tenemos que concatenar al inicio '../' para bajar a la raiz de nuestro proyecto.
        $carpeta_destino='../fotos/';
		$archivo_subido= $carpeta_destino . $_FILES['imagen']['name'];
        move_uploaded_file($_FILES['imagen']['tmp_name'], $archivo_subido);
        $imagen = $_FILES['imagen']['name'];
    }

	$statement = $conexion->prepare('UPDATE productos SET titulo = :titulo, extracto = :extracto, categoria = :categoria, descripcion = :descripcion, imagen = :imagen, precio = :precio WHERE id = :id');
	$statement->execute(array(
		':titulo' => $titulo,
        ':extracto' => $extracto,
        ':categoria' => $categoria,
		':descripcion' => $descripcion,
        ':imagen' => $imagen,
        ':precio'=>$precio,
		':id' => $id
	));

	header("Location: modificar.php");
    } else {
        // return (int)limpiarDatos($id);
        $id_articulo = id_articulo($_GET['id']);

        if (empty($id_articulo)) {
            header('Location: modificar.php');
        }

        //Obtenemos el post por id
        $post = obtener_post_por_id($conexion, $id_articulo);

        //Si no hay post en el ID entonces redirigimos.
        if (!$post) {
            header('Location: modificar.php');
        }
        $post = $post[0];//guardamos en el segundo arreglo el cual nos interesa ya que esta como 
        /*Array{(primer array)
            [0]=> Array{(Segundo array)
                id=>?
                titulo=>?
                ......
            }
        }*/
    }
    
    require '../views/editar.view.php';
?>