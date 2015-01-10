@extends('layouts.default')
@section('content')



<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<script>
$( "li" ).addClass(function( index, currentClass ) {
  var addedClass;
 
  if ( currentClass === "introClass" ) {
    addedClass = "active";
  }
 
  return addedClass;
});
</script>


<body class="loading">


	<main>
		<div class="introbox">			
			<section id="slide-1" class="homeSlide">




				<div class="bcg" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#slide-1">
					<div class="hsContainer">
						<div class="hsContent" data-center="opacity: 1" data-106-top="opacity: 0" data-anchor-target="#slide-1 h2">
							


							
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">


									<div class="panel panel-default" style="text-align: center; background-color: rgb(36,36,36); box-shadow: 1px 1px 12px #555;">
										<div class="panel-body">
											<h2>Bienvenue sur MiniBiblio<br />L'index litteraire en ligne</h2>
											<p>Vous trouverez toutes les informations concernant vos livres préférés qui vous permettent de vous évader.</p>
											<p><a href="/">Acces direct au site</a><p>
											</div>
										</div>
									</div>
								</div>


								
							</div>
						</div>
					</div>
				</section>
				
				<!-- ------------------------------------------------------------ -->
				
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
				<!-- ------------------------------------------------------------ -->


				<section id="slide-3" class="homeSlide">
					<div class="bcg" data-center="background-position: 0px 50%;" data-bottom-top="background-position: 0px 40%;" data-top-bottom="background-position: -40px 50%;" data-anchor-target="#slide-3">
						<div class="hsContainer">
							<div class="hsContent">
								<div class="plaxEl" data-106-top="opacity: 0" data--30p-top="opacity: 1;" data--60p-top="opacity: 0;" data-bottom="opacity: 1; position: fixed; top: 306px; width: 100%; left: 0;"  data-anchor-target="#slide-3">


									<div class="row">
										<div class="col-md-2"></div>
										<div class="col-md-8">


											<div class="panel panel-default" style="text-align: center; background-color: rgb(36,36,36);">
												<div class="panel-body">
													<h2>La plus grande Librairie<br />de la planete</h2>
													<p>Vous trouverez sur ce site toutes les informations concernants vos livres préférés qui vous permettent de vous évader.</p>
												</div>
											</div>
										</div>
									</div>



								</div>
							</div>

						</div>

					</section>



					<section id="slide-5" class="homeSlide homeSlideTall2">
						<div class="bcg">
							&nbsp;
						</div>
						<div class="bcg bcg2" data-bottom-top="opacity: 0;" data--33p-top="opacity: 0;" data--66p-top="opacity: 1;" data-anchor-target="#slide-5">
							<div class="hsContainer">
								<div class="hsContent" data-bottom-top="opacity: 0;" data-center="opacity: 1" data-anchor-target="#slide-5">




									<div class="row">
										<div class="col-md-2"></div>
										<div class="col-md-8">


											<div class="panel panel-default" style="text-align: center; background-color: rgb(36,36,36);">
												<div class="panel-body">
													<h2>Site fait par des ESIEARQUES</h2>
													<p>Vous trouverez toutes les informations nous concernants dans la rubrique <a href="about">About us du site</a>.</p>
												</div>
											</div>
										</div>
									</div>




								</div>
							</div>
						</div>
						<div class="bcg bcg3" data-300-bottom="opacity: 0;" data-100-bottom="opacity: 1;" data-anchor-target="#slide-5">
							<div class="hsContainer">
								<div class="hsContent" data-100-bottom="opacity: 0;" data-bottom="opacity: 1;" data-anchor-target="#slide-5">
									<h2>Fin de la page d'Intro</h2>
									<p><a href="/">Acces direct au site</a><p>
										<p><a href="#top">Revenir en haut de la page</a></p>
									</div>
								</div>
							</div>
						</section>

					</div>

				</main>

				<!-- Scripts are placed here -->

				{{ HTML::script('js/vendor/jquery-1.9.1.min.js') }}
				{{ HTML::script('js/bootstrap.min.js') }}
				{{ HTML::script('js/bootstrap.js') }}


				<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
				<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
				<script src="js/imagesloaded.js"></script>
				<script src="js/skrollr.js"></script>
				<script src="js/_main.js"></script>

			</body>


			@stop