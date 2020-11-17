<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="../img/logo.ico">
    <script src="https://use.fontawesome.com/8ed3a36f97.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        .login .row .enviar{
            border-radius: 50px;
            padding:15px 20px;
            font-size: 18px;
        }
        .login .row .input{
            border-radius: 15px;
        }
        .titulo{
            font-family: 'Bree Serif', serif;   
        }
    </style>
    <title>Mueblería G & M-Login</title>
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
                            <a href="../index.php" 
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

                    <form action="../buscar.php" class="form-inline my-2 my-lg-0" name="busqueda" method="get">
                        <input type="text" class="form-control mr-sm-2"type="search" placeholder="Buscar" name="busqueda">
                        <button class="btn btn-primary my-sm-0 my-2" type="submit"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="login">
        <div class="container">
            <div class="row mt-5 pt-4">
                    <div class="col">
                        <div class="py-4 m-auto">
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Iniciar Sesión</li>
                        </ol>
                    </nav>
                            <h1 class="text-center">Iniciar Sesión</h1>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 m-auto">
                    <form class="formulario" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text mb-3"><i class="fa fa-user" aria-hidden="true"></i></span>
                            </div>
                            <input class="form-control mb-3" type="text" name="usuario" placeholder="Usuario">
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text mb-3"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                            </div>
                            <input class="form-control mb-3" type="password" name="password" placeholder="Contraseña">
                        </div>
                        
                         <!-- Comprobamos si la variable errores esta seteada, si es asi mostramos los errores -->
                        <?php if (isset($errores)): ?>
                            <div class="alert alert-danger" role="alert">
                                <p class="error"><?php echo $errores; ?></p>                                      
                            </div>
                        <?php endif; ?>
                        
                        <!-- <i class="submit-btn fa fa-arrow-right " onclick="login.submit()"></i> -->
                        <input type="submit" class="btn btn-success enviar mb-3" value="Ingresar">
                    </form>
                </div>
            </div>
        </div>
    </div>




    

    <script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</body>
</html>