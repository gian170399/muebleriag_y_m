<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="../img/logo.ico">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/8ed3a36f97.js"></script>
    <style>
        .contacto .row .enviar{
            border-radius: 50px;
            padding:15px 20px;
            font-size: 18px;
        }
        .contacto .row .input{
            border-radius: 15px;
        }
        .titulo{
            font-family: 'Bree Serif', serif;   
        }
    </style>
    <title>Mueblería G & M-Modificar Productos</title>
</head>
   
    
<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark scrolling-navbar"  style="background-color: #0a2e36;">
            <div class="container">
                <a href="../index.php" class="navbar-brand titulo"> Mueblería G & M  (E.I.R.L.)</a>

                <button class="navbar-toggler" 
                type="button" data-toggle="collapse" 
                data-target="#navegacion" 
                aria-expanded="false" 
                aria-label="Alternar Menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" 
                id="navegacion">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link">Inicio<i class="fa fa-refresh fa-spin fa-fw"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" 
                            class="nav-link dropdown-toggle"
                            id="navbarDropdown"
                            data-toggle="dropdown">
                                Productos
                            </a>
                            <div class="dropdown-menu"
                            aria-labelledby="navbarDropdown">
                                <a href="../productos/sala.php" class="dropdown-item">Muebles para sala</a>
                                <a href="../productos/departamento.php" class="dropdown-item">Muebles para departamento</a>
                                <a href="../productos/mini_departamento.php" class="dropdown-item">Muebles para mini departamento</a>
                                <a href="../productos/comedores.php" class="dropdown-item">Comedores</a>
                            </div>
                        </li>
                    </ul>

                    <form action="../archivos/buscar.php" class="form-inline my-2 my-lg-0" name="busqueda" method="get">
                        <input type="text" class="form-control mr-sm-2"type="search" placeholder="Buscar" name="busqueda">
                        <button class="btn btn-primary my-sm-0 my-2" type="submit"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
                    </form>
                    
                    
                    <a href="../admin/cerrar.php" class="btn btn-warning ml-lg-5 "><i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar Sesion</a>
                </div>
            </div>
            
        </nav>
    </header>
    
    <div class="contenido" style="background: url('../img/fondo_horario.png'), #fff;">
        <main class="container">
            <div class="row mt-5 pt-4">
                <div class="col">
                    <div class="py-4 border-bottom">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Iniciar Sesion</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Modificar producto</li>
                        </ol>
                    </nav>
                        <h1 class="text-center">Modificar productos</h1>
                        <br>
                        <a href="../admin/subir.php" class="btn btn-success ml-lg-5 "><i class="fa fa-plus" aria-hidden="true"></i> Agregar</a>
                    </div>
                </div>
            </div>

            <div class="row py-4 ">
                <?php foreach($fotos as $foto): ?>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4" >
                        <div class="card" style="background: url('../img/fondo.png'), #fff;">
                                <a href="../archivos/single.php?id=<?php echo $foto['id']; ?>">
                                    <img height="170px" class="card-img-top w-100 img-rounded" src="../fotos/<?php echo $foto['imagen'] ?>" alt="">
                                </a>
                                <div class="card-body">
                                    <h3 class="card-title"><?php echo $foto['titulo']?></h3>
                                    <p class="card-text"><?php echo $foto['extracto']?></p>
                                    <a href="../archivos/single.php?id=<?php echo $foto['id'];?>" class="btn btn-sm btn-info mb-1"><i class="fa fa-eye" aria-hidden="true"></i> Ver</a>
                                    <a href="editar.php?id=<?php echo $foto['id'];?>" class="btn btn-sm btn-dark mb-1"><i class="fa fa-pencil fa-fw"></i> Editar</a>
                                    <a onclick="return confirmar('¿Realmente deseas borrar?');" href="borrar.php?id=<?php echo $foto['id'];?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o fa-lg"></i> Borrar</a>
                                    <!--<a class="btn btn-danger" href="#">-->
                                    <!--<i class="fa fa-trash-o fa-lg"></i> Delete</a>-->
                                </div>

                              
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6  m-auto">
                    <nav aria-label="Page navigation example" class="m-auto" >
                        <ul class="pagination justify-content-center">
                            <!-- Establecemos cuando el boton de "Anterior" estara desabilitado -->
                            <?php if($pagina == 1): ?>
                                <li class="page-item disabled mr-2">
                                    <a class="page-link" style="border-radius: 20px;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Página Anterior</a>
                                </li>
                            <?php else: ?>
                                <li><a class="page-link mr-2" style="border-radius: 20px;" href="?pagina=<?php echo $pagina - 1 ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i> Página Anterior</a></li>
                            <?php endif; ?>

                            <!-- Ejecutamos un ciclo para mostrar las paginas -->
                            
                            <!-- Establecemos cuando el boton de "Siguiente" estara desabilitado -->
                            <?php if($pagina == $numeroPaginas): ?>
                                <li class="page-item disabled">
                                    <a class="page-link" style="border-radius: 20px;">Página Siguiente  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                </li>
                            <?php else: ?>
                                <li><a class="page-link" style="border-radius: 20px;" href="?pagina=<?php echo $pagina + 1 ?>">Página Siguiente  <i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
                                <!-- <li class="page-item"> -->
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>

        </main>
    </div>

    
    
<!-- 
    <footer class="container">
        <div class="row border-top py-5">
            <div class="col">
                <h3 class="lead">GiancarloRuiz.com</h3>
                <a href="#" class="btn btn-link">Acerca de</a>
                <a href="#" class="btn btn-link">Contacto</a>
            </div>
            <div class="col text-right">
                <a href="#" class="btn btn-link">Subir en página</a>
            </div>
        </div>
    </footer> -->

    <script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
    <script>
          function confirmar(Mensaje){
            return (confirm(Mensaje))?true:false;
        }
    </script>
</body>
</html>

