<!--<!DOCTYPE html>-->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="img/logo.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet"> 
    <!-- <script src="https://use.fontawesome.com/8ed3a36f97.js"></script> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <style>
        .titulo{
            font-family: 'Bree Serif', serif;   
        }
        .contacto .row .enviar{
            border-radius: 50px;
            padding:15px 20px;
            font-size: 18px;
        }
        .contacto .row .input{
            border-radius: 15px;
        }
        .inner{
            overflow: hidden;
        }
        .inner img{
            transition: all 1.5s ease;
        }
        .inner:hover img{
            transform: scale(1.5);
        }
        .float{
            position:fixed;
            width:60px;
            height:60px;
            right:26px;
            bottom: 90px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:23px;
            /*box-shadow: 2px 2px 3px #999;*/
            z-index:100;
            transition: all 1.5s ease;
        }
        .float:hover {
            transform: scale(1.0);
            color:#fff;
        }

        .my-float{
            margin-top:8px;
        }
        .precio{
            font-size:17px;
        }
        </style>
    <title>Mueblería G & M</title>
</head>
   
    
<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark scrolling-navbar"  style="background-color: #0a2e36;">

            <div class="container">
                <a href="index.php" class="navbar-brand titulo"> Mueblería G & M  (E.I.R.L.)</a>

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
                            <a href="index.php" class="nav-link">Inicio <i class="fa fa-refresh fa-spin fa-fw"></i></a>
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
                                <a href="productos/sala.php" class="dropdown-item">Muebles para sala</a>
                                <a href="productos/departamento.php" class="dropdown-item">Muebles para departamento</a>
                                <a href="productos/mini_departamento.php" class="dropdown-item">Muebles para mini departamento</a>
                                <a href="productos/comedores.php" class="dropdown-item">Comedores</a>
                            </div>
                        </li>
                    </ul>

                    <form action="archivos/buscar.php" class="form-inline my-2 my-lg-0" name="busqueda" method="get">
                        <input type="text" class="form-control mr-sm-2"type="search" placeholder="Buscar" name="busqueda">
                        <button class="btn btn-primary my-sm-0 my-2" type="submit"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
                    </form>
                    
                    
                    <a href="admin/login.php" class="btn btn-success ml-lg-5 "><i class="fa fa-sign-in" aria-hidden="true"></i> Iniciar Sesión</a>
                    
                </div>
            </div>
        </nav>
    </header>
    
    <div class="contenido" style="background: url('img/fondo_horario.png'), #fff;">
        <main class="container">
            <div class="row mt-5 pt-4">
                <div class="col">
                    <div class="carousel slide"
                    id="slideshow" data-ride="carousel">
                        <!-- Indicadores -->
                        <ol class="carousel-indicators">
                            <li data-target="#slideshow"
                            data-slide-to="0" class="active"></li>
                            <li data-target="#slideshow"
                            data-slide-to="1"></li>
                            <li data-target="#slideshow"
                            data-slide-to="2"></li>
                        </ol>
                        <!-- Slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/fondo_tienda1.jpg" 
                                class="d-block w-100" alt=""> 
                            </div>
                            <div class="carousel-item">
                                <img src="img/fondotienda2.jpg"
                                class="d-block w-100"  alt=""> 
                            </div>
                            <div class="carousel-item">
                                <img src="img/fondo_tienda3.jpg" 
                                class="d-block w-100"  alt=""> 
                            </div>
                        </div>
                        <!-- Controladores -->
                        <a href="#slideshow" class="carousel-control-prev" 
                        data-slide="prev">
                            <span class="carousel-control-prev-icon"
                            aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a href="#slideshow" class="carousel-control-next" 
                        data-slide="next">
                            <span class="carousel-control-next-icon"
                            aria-hidden="true"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="py-4 border-bottom">
                        <h1 class="text-center"><?php echo $titulo?></h1>
                        <!-- <h1 class="text-center">Productos</h1> -->
                    </div>
                </div>
            </div>

            <div class="row py-4 ">
                <?php foreach($fotos as $foto): ?>
                    <div style="height=200px;" class="col-12 col-sm-6 col-lg-3 mb-4" >
                        <!-- <div class="card-group"> -->
                            <div  class="card shadow" style="background: url('img/fondo.png'), #fff; ">
                                    <a href="archivos/single.php?id=<?php echo $foto['id']; ?>">
                                        <div class="inner">
                                            <img height="170px" class="card-img-top w-100" src="fotos/<?php echo $foto['imagen'];?>">
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <h3 class="card-title font-italic"><?php echo $foto['titulo']?></h3>
                                        <p class="card-text text-justify"><?php echo $foto['extracto']?></p>
                                        <a href="archivos/single.php?id=<?php echo $foto['id'];?>" class="btn btn-sm btn-info btn-block precio"><i class="fa fa-eye" aria-hidden="true"></i> Ver precio</a>
                                    </div>
                            </div>
                        <!-- </div> -->
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6  m-auto">
                    <nav aria-label="Page navigation example" class="m-auto" >
                        <ul class="pagination justify-content-center">
                            <!-- Establecemos cuando el boton de "Anterior" estara desabilitado -->
                            <?php if($pagina === 1): ?>
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

    <div class="contacto" style="background: url('img/fondo_horario.png'), #fff;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="py-4 border-top">
                        <h1 class="text-center">Contacto</h1>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 m-auto">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="mb-4">
                        <input type="text" id="nombre" class="form-control mb-3 input" name="nombre"
                        placeholder="Nombre" 
                        value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
                    
                        <input type="email" id="correo"class="form-control mb-3 input" name="correo"
                        placeholder="Correo"
                        value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
                    
                        <textarea class="form-control mb-3 input" style="max-height: 200px" id="mensaje" name="mensaje" placeholder="Mensaje"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
                    
                        <?php if (isset($errores)): ?>
                            <div class="alert alert-danger" role="alert">
                                <p><?php echo $errores; ?></p>
                            </div>
                        <?php elseif(isset($enviado)): ?>
                            <div class="alert alert-success" role="alert">
                                <p><?php echo $enviado; ?></p>
                            </div>
                        <?php endif; ?>
                                
                    
                        <input type="submit" value="Enviar Mensaje" name="submit"
                                class="enviar btn btn-primary mb-4">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="horarios" style="background: url('img/fondo_horario.png'), #fff;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12 mb-4">
                    <div class="py-4 border-top">
                        <h1 class="text-center">Horarios</h1>
                        <h5>Lunes a Sabado: 10am-4pm</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ubicanos" style="background: url('img/fondo_horario.png'), #fff;">
        <div class=" py-4 border-top">                       
            <h1 class="text-center">Ubícanos</h1>                       
        </div>
        <section class="embed-responsive embed-responsive-4by3 mapa mt-4 W-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.0810796540877!2d-77.06424538579273!3d-11.968888191519184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce33fd23000b%3A0x97970f7d33c3a974!2sAv%20Gerardo%20Unger%205427%2C%20Los%20Olivos%2015311%2C%20Per%C3%BA!5e0!3m2!1ses!2sus!4v1588473026779!5m2!1ses!2sus" class="embed-responsive-item" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </section>
    </div>
    
    <!-- Logo de whatsapp flotante-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=51985368257&amp;text=Hola,%20me%20podria%20ayudar?%20,tengo%20una%20consulta." class="float" target="_blank">
    <i class="fa fa-whatsapp fa-2x my-float"></i>
    <!--<img src="img/whatsapp.png" class="my-float">-->
    </a>
    
    
    
    
    <!-- Load Facebook SDK for JavaScript -->
    <div class="fei">
      <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function() {
              FB.init({
                xfbml            : true,
                version          : 'v7.0'
              });
            };
    
            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>
    
          <!-- Your customer chat code -->
            <div class="fb-customerchat"
            attribution=setup_tool
            page_id="2006071546273734"
            theme_color="#0084ff"
            logged_in_greeting="Hola! En qué podemos ayudarte?"
            logged_out_greeting="Hola! En qué podemos ayudarte?">
            </div>
    </div>
        
      
      
      
      
      
      
      
    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4" style="background: url('img/fondo_horario.png')">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Síguenos en nuestras redes sociales</h5>
        <a href="https://www.facebook.com/Muebleria-G-M-2006071546273734"><img src="../img/fei.png"></a>
        <a href="https://api.whatsapp.com/send?phone=51985368257&amp;"><img src="../img/wasac.png"></a>
        <a href="#"><img src="../img/youtube.png"></a>
        <a href="#"><img src="../img/instagram.png"></a>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">En caso de...</h5>

        <ul class="list-unstyled">
          <li>
            <a href="https://api.whatsapp.com/send?phone=51985368257&amp;text=Hola,%20me%20podria%20ayudar?%20,tengo%20una%20consulta.">¿Tienes alguna consulta?</a>
          </li>
          <li>
            <a href="https://api.whatsapp.com/send?phone=51985368257&amp;text=Hola,%20me%20podria%20decir%20cuánto%20cuesta%20llevar%20un%20mueble%20a%20mi%20domicilio?.">¿Deseas conocer el cobro para llevar algún producto a tu domicilio?</a>
          </li>
          <li>
            <a href="https://api.whatsapp.com/send?phone=51985368257&amp;text=Hola,%20tengo%20un%20reclamo%20de%20un%20producto.">¿Tienes algún reclamo?</a>
          </li>
          <li>
            <a href="https://api.whatsapp.com/send?phone=51985368257&amp;text=Hola,%20me%20podria%20decir%20cuánto%20cuesta%20retapizar%20un%20mueble?%20.">¿Deseas saber cuánto cuesta retapizar tu mueble?</a>
          </li>
        </ul>

      </div><!-- Grid column -->
    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright: Muebleria G & M (E.I.R.L.) Todos los Derechos Reservados
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


    <script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>