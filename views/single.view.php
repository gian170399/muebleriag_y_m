<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="../img/logo.ico">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/8ed3a36f97.js"></script>
    <style>
    .titulo{
            font-family: 'Bree Serif', serif;   
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
        .ws-1{
            border-radius:25px;
        }
        .ws-2{
            border-radius:25px;
        }

    </style>
    <title>Mueblería GYM</title>
</head>
<body>
    <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark scrolling-navbar"  style="background-color: #0a2e36;">
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

                    <a href="../admin/login.php" class="btn btn-success ml-lg-5 "><i class="fa fa-sign-in" aria-hidden="true"></i> Iniciar Sesion</a>
                </div>
            </div>
        </nav>
    </header>




    <div class="single" style="background: url('../img/fondo.png'), #fff;">
        <div class="container mt-5 pt-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Información del producto</li>
                        </ol>
                    </nav>
            <div class="row" >
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-3 text-center">   
                    <img src="../fotos/<?php echo $foto['imagen'];?>" alt="Responsive image" class="mt-4 img-thumbnail w-100">
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4 m-auto">
                    <div class="card border-dark mb-3 mt-1" style="max-width: 100%;">
                        <div class="card-header bg-transparent border-dark">
                        <h1 class="text-center"><?php if(!empty($foto['titulo'])){
                                echo $foto['titulo'];
                                }else{
                                    echo "sin titulo";
                                } ?>
                            </h1>
                        </div>
                            <div class="card-body text-dark">
                                <h3 class="card-title">Descripción:</h3>
                                <p class="card-text"><?php echo nl2br($foto['descripcion']);?></p>
                            </div>
                        <div class="card-footer bg-transparent border-dark">
                            <div class="col-12 col-md-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="col-12">
                                        <h4 class="card-title ">Precio:</h4>
                                        </div>
                                    </div>
                                    <span class="input-group-text mb-2"><i>S/.</i></span>
                                    <input type="text" name="precio" id="precio" class="form-control" placeholder="Precio" value="<?php echo $foto['precio'];?>" readonly>
                                </div>
                            </div>
                            <div class="card mb-12" style="max-width: 100%;">
                                <div class="row no-gutters">
                                    <div class="col-md-12">
                                        <h5 class="card-title text-center mt-2">Para acordar compra:</h5>
                                        <div class="product-purchase  mb-4">
                                                <div class="price_love text-center">
                                                    <a href="https://api.whatsapp.com/send?phone=51985368257&amp;text=Hola,%20deseo%20comprar%20el%20<?php echo $foto['titulo']?>%20(<?php echo $foto['extracto']?>)">
                                                    
                                                    <span class="btn btn-success px-2 py-2 ws-1"><i class="fa fa-whatsapp fa-2x mr-2" aria-hidden="true"></i>Coordinar por Whatsapp<p>+51 985368257</p></span>
                                                    </a>
                                                </div>
                                        </div>
                                        <div class="product-purchase mb-4">
                                                <div class="price_love text-center">
                                                    <a href="https://api.whatsapp.com/send?phone=51985368707&amp;text=Hola,%20deseo%20comprar%20el%20<?php echo $foto['titulo']?>%20(<?php echo $foto['extracto']?>)">
                                                    
                                                    <span class="btn btn-success px-2 py-2 ws-2"><i class="fa fa-whatsapp fa-2x mr-2" aria-hidden="true"></i>Coordinar por Whatsapp<p>+51 985368707</p></span>
                                                    </a>
                                                </div>
                                        </div>
                                        <!-- <img src="img/whatsapp.png" class="text-left">
                                        <p>+51 985368257</p>
                                        <p>+51 985368707</p>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a> -->
            </div>
        </div>
    </div>

    <div class="ubicanos" style="background: url('../img/fondo.png'), #fff;">
        <div class=" py-4">                       
            <h1 class="text-center">Ubícanos</h1>                       
        </div>
        <section class="embed-responsive embed-responsive-4by3 mapa mt-4 W-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.0810796540877!2d-77.06424538579273!3d-11.968888191519184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce33fd23000b%3A0x97970f7d33c3a974!2sAv%20Gerardo%20Unger%205427%2C%20Los%20Olivos%2015311%2C%20Per%C3%BA!5e0!3m2!1ses!2sus!4v1588473026779!5m2!1ses!2sus" class="embed-responsive-item" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </section>
    </div>
    
    <!-- Logo de whatsapp flotante-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=51985368257&amp;text=Hola,%20deseo%20comprar%20el%20<?php echo $foto['titulo']?>%20(<?php echo $foto['extracto']?>)" class="float" target="_blank">
    <!--<i class="fa fa-whatsapp my-float"></i>-->
    <i class="fa fa-whatsapp fa-2x my-float"></i>
    <!--<img src="img/whatsapp1.png" class="my-float">-->
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
            logged_in_greeting="Hola! Desea comprar este mueble?"
            logged_out_greeting="Hola! Desea comprar este mueble?">
            </div>
    </div>
    
    
    
    <footer class="page-footer font-small blue pt-4" style="background: url('../img/fondo.png')">

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



    
    <script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>