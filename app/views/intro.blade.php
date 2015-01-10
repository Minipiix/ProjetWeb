	<!DOCTYPE html>
	<html>
	<head>
		<title>
			MiniBiblio
		</title>
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">


		<!-- ------------------------------------------------------------- -->
		<!-- ------------------------------------------------------------- -->


		<!-- CSS are placed here -->
		
		{{ HTML::style('css/bootstrap.css') }}
		{{ HTML::style('css/bootstrap.min.css') }}
		{{ HTML::style('css/bootstrap-theme.css') }}

		{{ HTML::style('css/carousel.css') }}

		{{ HTML::style('css/main.css') }}
		{{ HTML::style('css/normalize.css') }}
		


		<script src="js/vendor/modernizr-2.7.1.min.js"></script>

		<style type="text/css">
		.back-link a {
			color: #4ca340;
			text-decoration: none; 
			border-bottom: 1px #4ca340 solid;
		}
		.back-link a:hover,
		.back-link a:focus {
			color: #408536; 
			text-decoration: none;
			border-bottom: 1px #408536 solid;
		}
		h1 {
			height: 100%;
			/* The html and body elements cannot have any padding or margin. */
			margin: 0;
			font-size: 14px;
			font-family: 'Open Sans', sans-serif;
			color: #1c1d1e;
			font-size: 32px;
			margin-bottom: 3px;
		}
		h2 {
			color: #1c1d1e;
			font-family: 'Open Sans', sans-serif;
			font-weight: normal;
		}
		.entry-header .inner {
			text-align: left;
			margin: 0 auto 20px auto;
			width: 800px;
		}
		.entry-header { padding-top: 20px; background-color: #fff; width:100%; position: fixed; top: 0; left: 0; z-index: 999999}
		
		.panel-default {
			border-color: black;
			border-radius: 10px;
		}

		

		.centered-form .panel{
			background: rgba(255, 255, 255, 0.8);
			box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
			color: black;

		}

		
		.pull-right{
			text-align= right;
		}

		h2{
			color: black;
		}

		hr{
			margin-left: 5%;
			margin-right: 5%;

		}

		</style>




		<!-- ------------------------------------------------------------- -->
		
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>
						MiniBiblio 
					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a class="navbar-brand" href="intro"><span class="glyphicon glyphicon-th-large" aria-hidden="true">
							Intro |
						</span></a></li>
						<li ><a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home" aria-hidden="true">
							Home 
						</span></a></li>
						<li><a href="lastBooks">Les Derniers Livres</a></li>
						<li><a href="about">About us</a></li>

					</ul>


					<ul class="nav navbar-nav navbar-right">


						<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<!-- <button type="submit" class="btn btn-default">Submit</button> -->
						</form> 


						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"> Register/Login</span><span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="registration">Register</a></li>
								<li><a href="login">Login</a></li>

								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</head>

	<!-- ------------------------------------------------------------- -->



	<body class="loading">
		

		<main>
			
			<section id="slide-1" class="homeSlide">
				


				<div class="bcg" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#slide-1">
					<div class="hsContainer">
						<div class="hsContent" data-center="opacity: 1" data-106-top="opacity: 0" data-anchor-target="#slide-1 h2">
							


							
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">


									<div class="panel panel-default" style="text-align: center; background-color: rgb(36,36,36);">
										<div class="panel-body">
											<h2>Bienvenue sur MiniBiblio<br />L'index litteraire en ligne</h2>
											<p>Vous trouverez toutes les informations concernants vos livres préférés qui vous permettent de vous évader.</p>
											<p><a href="/">Acces direct au site</a><p>
											</div>
										</div>
									</div>
								</div>


								
							</div>
						</div>
					</div>
				</section>
				
				<!-- ------------------------------------------------------------- -->
				
				<section id="slide-2">
					<div class="bcg" data-0="background-color:rgb(37,37,37);" data-top="background-color:(0,0,0);"  data-anchor-target="#slide-2">
						<div class="hsContainer">
							<div class="hsContent">
								<h2 data-center="opacity: 1" data--200-bottom="opacity: 0" data-206-top="opacity: 1" data-106-top="opacity: 0" data-anchor-target="#slide-2 h2"><a href="register">Inscrivez vous au plus vite</a></h2>
								<p data-center="opacity: 1" data--200-bottom="opacity: 0" data-206-top="opacity: 1" data-106-top="opacity: 0" data-anchor-target="#slide-2 h2">Une fois inscrit vous pourrez poster vos livres préférés, partager ce que vous en pensez ou encore participer au futur forum.</p>
							</div>
						</div>
					</div>
				</section>
				<!-- ------------------------------------------------------------- -->


				<section id="slide-3" class="homeSlide">
					<div class="bcg" data-center="background-position: 0px 50%;" data-bottom-top="background-position: 0px 40%;" data-top-bottom="background-position: -40px 50%;" data-anchor-target="#slide-3">
						<div class="hsContainer">
							<div class="hsContent">
								<!--<div class="plaxEl" data-106-top="opacity: 0" data--30p-top="opacity: 1;" data--60p-top="opacity: 0;" data-bottom="opacity: 1; position: fixed; top: 206px; width: 100%; left: 0;"  data-anchor-target="#slide-3">-->
								

								<div class="row">
									<div class="col-md-2"></div>
									<div class="col-md-8">


										<div class="panel panel-default" style="text-align: center; background-color: rgb(36,36,36);">
											<div class="panel-body">
												<h2>La plus grande Librairie<br />de la planete</h2>
												<p>Vous trouverez sur ce site toutes les informations concernants vos livres préférés qui vous permettent de vous évader.</p><p><a href="#top">Revenir en haut de la page</a></p>
											</div>
										</div>
									</div>
								</div>
								
								




								<!-- </div>-->
							</div>
						</div>
						
					</div>
				</section>
				
				
			</main>

			<!-- Scripts are placed here -->

{{ HTML::script('js/vendor/jquery-1.9.1.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}


			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
			<script src="js/imagesloaded.js"></script>
			<script src="js/skrollr.js"></script>
			<script src="js/_main.js"></script>

		</body>
		</html>


		