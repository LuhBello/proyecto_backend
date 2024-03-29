<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Proyecto Back-end</title>
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
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">REGISTER</a>
                        
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
	<!-- banner -->
	<!-- breadcrumbs -->

	<!-- //breadcrumbs -->
	<!-- single -->
	<div class="blog">
		<div class="container">
			<div class="col-md-7 wthree_blog_left">
				<div class="wthree_blog_left_grid">
					<div class="wthree_blog_left_grid_slider">
						<img src="images/Mario35.jpg" alt=" " class="img-responsive" />
					</div>
					<h4>Kids Video Game</h4>
					<h3>Super Mario Bros</h3>
					<ul>
						<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="#">Jan
								Mark</a><i>|</i></li>
						<li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span><a href="#">20</a><i>|</i>
						</li>
						<li><span class="glyphicon glyphicon-tag" aria-hidden="true"></span><a href="#">5</a><i>|</i>
						</li>
						<li><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Voluptatibus</li>
					</ul>
					<p>La historia de Mario Bros se remonta a 1981. Hizo su primera aparición en ‘Donkey Kong’ con el
						nombre de Jumpman; por entonces, su profesión era la de carpintero, pero ya lucía su mítica
						gorra de color rojo. En esta trama, tenía que salvar a la princesa retenida por el gorila Donkey
						Kong. Para ello debía esquivar los obstáculos que encontraba a su paso.</p>
				</div>
				<div class="agileits_share">
					<ul>
						<li><a class="linkedin" href="#"></a></li>
						<li><a class="google" href="#"></a></li>
						<li><a class="twitter" href="#"></a></li>
						<li><a class="facebook" href="#"></a></li>
					</ul>
				</div>

				<div class="agileits_reply">
					<h3>Leave a reply</h3>
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="text" name="Subject" placeholder="Subject" required="">
						<textarea name="Message" placeholder="Type your comment..." required=""></textarea>
						<input type="submit" value="Submit">
					</form>
				</div>
			</div>
			<div class="col-md-5 wthree_blog_right">
				<div class="w3ls_search">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search on our blog" required="">
						<input type="submit" value=" ">
					</form>
				</div>
				<div class="w3l_categories">
					<h3>Categorias</h3>
					<ul>
						<li><a href="single.html">Plataformas</a></li>
						<li><a href="single.html">Aventura</a></li>
						<li><a href="single.html">Acción</a></li>
						<li><a href="single.html">Multijugador</a></li>
						<li><a href="single.html">Carreras</a></li>
						<li><a href="single.html">Familiar</a></li>
						<li><a href="single.html">RPG</a></li>
					</ul>
				</div>

				<div class="w3l_archives">
					<h3>Archivos</h3>
					<ul>
						<li>2 August 2020</li>
						<li>14 August 2020</li>
						<li>23 August 2020</li>
						<li>8 September 2020</li>
						<li>18 September 2020</li>
					</ul>
				</div>
				<div class="w3agile_flickr_posts">
					<h3>Flickr Posts</h3>
					<div class="w3agile_flickr_post_left">
						<a href="single.html"><img src="images/BowsersFury.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3agile_flickr_post_left">
						<a href="single.html"><img src="images/MarioAllStars.png" alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3agile_flickr_post_left">
						<a href="single.html"><img src="images/MarioKart.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3agile_flickr_post_left">
						<a href="single.html"><img src="images/Marioconejos.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3agile_flickr_post_left">
						<a href="single.html"><img src="images/DRmario.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="w3agile_flickr_post_left">
						<a href="single.html"><img src="images/Odisea.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //single -->

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