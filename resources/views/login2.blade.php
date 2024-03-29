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
    <script src="js/login.js"></script>
    <script src="js/md5.min.js"></script>


</head>

<body>
    <!-- banner -->
    <div class="sub-banner">
        @include('menu')
      
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
        <h2>Iniciar sesión</h2>
        <section class="banner-bottom py-5">
            <div class="container">
                <div class="content-grid">
                    <div class="text-center icon">
                        <span class="fa fa-user-circle-o"></span>
                    </div>
                    <div class="col-md-8 contact-right-w3">
                        <!--content-bottom-->
                        <!--col-md-8 contact-right-w3-->
                        <form action="" id="formulario">
                            <div class="field-group">

                                <div class="content-input-field">
                                    <input name="text1" class="text" id="correo" type="email" value=""
                                        placeholder="Ingrese el correo" required="">
                                </div>
                            </div>
                            <div class="field-group">
                                <div class="content-input-field">
                                    <input name="password" id="clave" class="text" type="Password"
                                        placeholder="Ingresa la clave" required="">
                                </div>
                            </div>
                            <div class="content-input-field">
                                <button type="submit" id="btn_enviar" class="btn"
                                    onclick="iniciarLogin()">Ingresar</button>
                            </div>
                            <ul class="list-login">
                                <li class="switch-slide">
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                        Mantener sesión
                                    </label>
                                </li>
                                <li>
                                    <a href="#" class="text-right">¿Olvido la clave?</a>
                                </li>
                                <li class="clearfix"></li>
                            </ul>
                            <ul class="list-login-bottom">
                                <li class="">
                                    <a href="register.html" class="">¿No tiene una cuenta?</a>
                                </li>
                                <li class="">
                                    <a href="#" class="text-right">¿Necesita ayuda?</a>
                                </li>
                                <li class="clearfix"></li>
                            </ul>
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