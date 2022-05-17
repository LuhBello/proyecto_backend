<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Proyecto Fron-tend</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Kids Video Game Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// css -->
    <!-- font -->
    <link
        href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic'
        rel='stylesheet' type='text/css'>
    <link
        href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <!-- //font -->
    <script src="js/main.js"></script>
</head>

<body>
    <!-- banner -->

    <div class="sub-banner">
        <div class="login">
            @if (Route::has('login'))

                <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <!--<a href="{{ url('/index') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>-->
                        <a href="{{ url('/games') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">GAMES</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">LOGIN</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">REGISTER</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        @include('menu')
        <!-- Navbar -->
        <!--
  <div class="forms ml-auto">

  </div>
  <nav class="navbar navbar-default">
   <div class="container">

    <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
      aria-expanded="false" aria-controls="navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
     </button>
     <a href="index.html">
      <h1>Kids <img src="images/c1.png" alt=" " /> Game</h1>
     </a>
    </div>

    <div id="navbar" class="navbar-collapse collapse">
     <ul class="nav navbar-nav navbar-righ">

     </ul>
    </div>

   </div>
  </nav>
 -->
    </div>

    <div class="events-w3layouts">
        <h2>Curiosidades</h2>
    </div>
    <!-- banner -->


    <div class="events-section2-agileinfo">
        <div class="container">
            <div class="blog1-w3ls">
                <div class="col-md-4 blog-image-w3l">
                    <a href="single.html"><img src="images/BowsersFury.jpg" alt=" " /></a>
                </div>
                <div class="col-md-8 blog-text-w3ls">
                    <a href="single.html">
                        <h4>Super Mario 3D World + Bowser's Fury</h4>
                    </a>
                    <div class="item_info">
                        <ul>
                            <li><a href="#"><i class="glyphicon glyphicon-user"></i>Admin</a></li>
                            <li><i class="glyphicon glyphicon-calendar"></i>14.May.2020</li>
                            <li><a href="#"><i class="glyphicon glyphicon-comment"></i>20 Comments</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-heart"></i>300 Likes</a></li>
                        </ul>
                    </div>
                    <p>Super Mario 3D World + Bowser's Fury es la nueva versión para Nintendo Switch del juego de
                        plataformas en 3D publicado en Wii U en 2013. Además de los ajustes gráficos en términos de
                        definición o resolución, el título incluye un nuevo modo multijugador cooperativo, así como
                        mejoras en la jugabilidad entre las que destacan las compatibilidades y los movimientos
                        diseñados para los Joy-Con de la portátil. Incluye asimismo una nueva expansión inédita,
                        Bowser's Fury.</p>
                    <a href="single.html" class="blog-read">Read More</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="blog2-w3ls">
                <div class="col-md-4 blog-image-w3l">
                    <a href="single.html"><img src="images/MarioAllStars.png" alt=" " /></a>
                </div>
                <div class="col-md-8 blog-text-w3ls">
                    <a href="single.html">
                        <h4>Super Mario 3D All Stars</h4>
                    </a>
                    <div class="item_info">
                        <ul>
                            <li><a href="#"><i class="glyphicon glyphicon-user"></i>Admin</a></li>
                            <li><i class="glyphicon glyphicon-calendar"></i>17.Aug.2020</li>
                            <li><a href="#"><i class="glyphicon glyphicon-comment"></i>20 Comments</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-heart"></i>300 Likes</a></li>
                        </ul>
                    </div>
                    <p>Super Mario 3D All-Stars es un recopilatorio para Nintendo Switch de tres de los mejores
                        videojuegos de plataformas en tres dimensiones del fontanero más famoso del ocio digital. El
                        pack para la consola de Nintendo, incluye tres títulos como Super Mario 64, Super Mario Sunshine
                        y Super Mario Galaxy.</p>
                    <a href="single.html" class="blog-read">Read More</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="blog3-w3ls">
                <div class="col-md-4 blog-image-w3l">
                    <a href="single.html"><img src="images/MarioKart.jpg" alt=" " /></a>
                </div>
                <div class="col-md-8 blog-text-w3ls">
                    <a href="single.html">
                        <h4>Mario Kart 8 Deluxe</h4>
                    </a>
                    <div class="item_info">
                        <ul>
                            <li><a href="#"><i class="glyphicon glyphicon-user"></i>Admin</a></li>
                            <li><i class="glyphicon glyphicon-calendar"></i>24.Aug.2015</li>
                            <li><a href="#"><i class="glyphicon glyphicon-comment"></i>20 Comments</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-heart"></i>300 Likes</a></li>
                        </ul>
                    </div>
                    <p>Mario Kart 8 Deluxe no es simplemente un port de Nintendo WiiU, es el mejor y más completo
                        videojuego de la franquicia lanzado hasta la fecha y un imprescindible de Nintendo Switch. Bajo
                        su apariencia sencilla y accesible se esconde un título tan exigente como nosotros seamos
                        capaces de profundizar, en lo que es uno de los diseños más sofisticados y pulidos que hemos
                        visto hasta la fecha. Esta fantástica jugabilidad ofrece una enorme variedad de partidas y
                        experiencias divertidísimas que, sobre todo en los modos online, hacen que cada carrera sea
                        diferente.</p>
                    <a href="single.html" class="blog-read">Read More</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <a href="https://wa.me/+573013160127" target="_blank">
        <img src="images/wpp.png" id="btn_whatsapp" alt=""></img>

        <!-- footer -->
        <div class="footer">
            <div class="container">

                <div class="footer_contenedor">

                    <div class="contenido_footer">
                        <h4>Juan Galeano</h4>
                        <a href="mailto:juan.galeanoh@upb.edu.co">juan.galeanoh@upb.edu.co</a>

                    </div>

                    <div class="contenido_footer">
                        <h4>Luisa Álvarez Bello</h4>
                        <a href="mailto:luisa.alvarezb@upb.edu.co">luisa.alvarezb@upb.edu.co</a>

                    </div>

                    <div class="contenido_footer">
                        <h4>Mateo Agudelo Ciro</h4>
                        <a href="mailto:mateo.agudeloc@upb.edu.co">mateo.agudeloc@upb.edu.co</a>
                    </div>

                </div>
                <h2 class="titulo_final">&copy; Plataformas de programación empresarial</h2>
            </div>
        </div>
        <!-- //footer -->
