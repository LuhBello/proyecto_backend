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
    <script
        type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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

    <script src="js/registro.js"></script>
    <script src="js/md5.min.js"></script>

</head>

<body>
    <!-- banner -->
    <div class="sub-banner">
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

    <!-- ventana emergente -->
    <div id="ventana" class="ligthbox hidden">
        <div class="contenido-ventana">
            <span></span>
            <h1></h1>
            <p></p>
            <button type="button" id="btn_cerrar_modal"></button>
        </div>
    </div>

    <!-- ventana emergente -->

    <div class="container">
        ::
        <h2>Registro</h2>
        <section class="banner-bottom py-5">
            <div class="container">
                <div class="content-grid">
                    <div class="text-center icon">
                        <span class="fa fa-user-circle-o"></span>
                    </div>
                    <div class="col-md-8 contact-right-w3">


                        <form action="" id="formulario">

                            <div class="field-group">

                                <div class="content-input-field">
                                    <input name="text1" id="nombre" type="text" class="text" value=""
                                        placeholder="Ingrese el nombre" required="">
                                </div>
                            </div>

                            <div class="field-group">

                                <div class="content-input-field">
                                    <input name="text1" id="correo" type="email" class="text" value=""
                                        placeholder="Ingrese el correo" required="">
                                </div>
                            </div>

                            <div class="field-group">

                                <div class="content-input-field">
                                    <input name="text1" id="celular" type="text" class="text" value=""
                                        placeholder="Ingrese el número de celular" required="">
                                </div>
                            </div>

                            <div class="field-group">
                                <div class="content-input-field">
                                    <input name="password" id="clave" type="Password" class="text"
                                        placeholder="Contraseña">
                                </div>
                            </div>

                            <div class="content-input-field">
                                <!--<input type="submit" id="btn_enviar" class="btn" value="Registrarse"> Registrarse</button>-->
                                <button type="submit" id="btn_enviar" class="btn"
                                    onclick="iniciarRegistro()">Registrarse</button>
                            </div>
                            <div class="list-login-bottom text-center mt-lg-5 mt-4">

                                <a href="#" class="">Al hacer click en Registrarse, acepta todos los términos</a>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
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
</body>

</html>