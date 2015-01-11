@extends('layouts.default')
@section('content')



<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<script>
$( "li" ).addClass(function( index, currentClass ) {
  var addedClass;
 
  if ( currentClass === "homeClass" ) {
    addedClass = "active";
  }
 
  return addedClass;
});

$(function () { $("[data-toggle='popover']").popover(); });


</script>



<!-- Container -->
<div class="container-fluid">


	<hr>

	<!-- ----------------------------- 1er Carousel -------------------------------- -->


	<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
		<!-- Overlay -->
		<div class="overlay"></div>

		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#bs-carousel" data-slide-to="1"></li>
			<li data-target="#bs-carousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item slides active">
				<div class="slide-1"></div>
				<div class="hero">
					<hgroup>
						<h1>Lire, c'est l'Avenir</h1>        
						<h3>Renseigner vous sur les nouveautés</h3>
					</hgroup> 

				</div>
			</div>
			<div class="item slides">
				<div class="slide-2"></div>
				<div class="hero">        
					<hgroup>
						<h1>En partenaria avec une Bibliothèque</h1>        
						<h3>Vous pourrez bientôt acceder aux fichiers en ligne à l'index de la bibliothèque</h3>
					</hgroup>       
					<!-- <a href="lastbooks"><button class="btn btn-hero btn-lg" role="button">Last Books</button></a> -->
				</div>
			</div>
			<div class="item slides">
				<div class="slide-3"></div>
				<div class="hero">        
					<hgroup>
						<h1>Tous vos livres indexés</h1>        
					</hgroup>
				</div>
			</div>
		</div> 

		<!-- ---------------------------- AlertBox --------------------------------- -->


		<div class="alertBox" >
			<div class="row">
				<hr>

				<div class="col-md-2"></div>
				<div class="col-md-8">


					<div class="panel panel-default" style="text-align: center;">

						<div class="panel-body">
							<h2>Attention ceci est une version beta du site</br><hr><small>Progression du site:</small></h2>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
									90%
								</div>
							</div>

							<h2><small>Investissement étudiant:</small></h2>
							<div class="progress">
								<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
									100%  </div>
								</div>

								<h2><small>Les difficultés rencontrées:</small></h2>
								<div class="progress">
									<div class="progress-bar progress-bar-danger" style="width: 70%">
										Gestion de la BDD / sous Linux
									</div>
									<div class="progress-bar progress-bar-warning" style="width: 20%">
										BootStrap
									</div>
									<div class="progress-bar progress-bar-success" style="width: 10%">
										Laravel/Linux
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- ---------------------------- Titre --------------------------------- -->

				<div class="page-header">
					<h1> L'actualité bibliographique du moment
						<small> View Full Screen </small></h1>
					</div>
				</div>

				<!-- ------------------------------ Premier article - 1ere box ------------------------------ -->



				<div class="container-fluid">
					<div class="row">
					</div>

					<div class="row" >
						<div class="col-md-8">
							<div class="well well-lg">
								<h3 style="text-decoration: underline;">
									Le best-seller 50 nuances de gris a enfin une adaptation prévu au cinéma.
								</h3>
								<p><strong>Date de sortie: St Valentin 2015</strong>
								</p>
								<p>Mesdames, préparer vos orgasmes...</p>
								<h4></br>Synopsis</h4>
								<p>Anastasia Steele accepte de remplacer sa colocataire malade, Katherine, pour interviewer l'homme d'affaires et milliardaire Christian Grey. Jeune PDG séduisant et mystérieux, ce dernier l'intimide. A sa grande surprise, Christian Grey vient la voir au magasin où elle travaille, prétextant des achats. Très attirée par lui, elle se verra rapidement devenir sa soumise. Pour cela un contrat va être rédigé pour permettre de définir les règles de ce jeu dangereux. Cependant, ce contrat devient souvent un sujet tabou et sera changé sans cesse.
									À mesure que leur relation progresse, la jeune et innocente Ana est confrontée à un tout nouvel univers aux côtés du riche entrepreneur. Christian a cependant une face sombre : il est adepte du BDSM. La jeune femme doit alors décider si elle est prête ou non à entrer dans cet univers.
								</br> </br> </p>
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="//www.youtube.com/embed/emGq5QqqtDg"></iframe>
								</div>
							</div>
						</div><!--.col -->

					<!-- -------------------------- 2eme Box ---------------------------------- -->


						<div class="col-md-4">
							<div class="panel panel-default" style="text-align: center;">
								<div class="panel-body">
									<h2>L'écrivain du mois:</h2>
									<div id="ecrivain">
									</div>
									<p></br> 
										Hadoop est notamment utilisé dans le domaine de l'analyse de log et de trafic. Le reporting décisionnel est aussi un bon client des technologies d'Hadoop, par exemple pour l'analyse de données marketing en gros volumes. Mais aussi le datamining et l'analyse décisionnelle, ainsi que toutes sources d'information générant des données en masse et  temps réel, comme le Machine to Machine (M2M).
									</p>
									<p>
										Les moteurs de recherche comme Google et Yahoo mais aussi les réseaux sociaux comme Facebook, Twitter et LinkedIn utilisent Hadoop. En effet ils ont des besoins d'exécution d'informations non structurées de très gros volumes pour traiter les flux, les mesages, etc... Sur la partie e-commerce, eBay exploite aussi le framework. Il est aussi intégré par un grand nombre de services de Cloud Computing. On compte parmi eux Amazon qui permet de faire tourner Hadoop sur ses services de plate-forme Amazon EC2 et de stockage Amazon S3. Le géant de l'e-commerce a d'ailleurs rendu son propre système de fichiers (S3 filesystem) compatible avec Hadoop. 
										Récemment, Microsoft a également annoncé la disponibilité d'une pré-version d'Hadoop pour son Cloud Azure. Des spécialistes du Cloud, comme Rackspace sont également de la partie (ce dernier a recours à Cloudera, une distribution Hadoop bien connue).
									</p>

								


								</div>
							</div>
						</div><!--./row -->

					</div><!--./container -->

					<hr>

					


					<!-- ------------------------------------------------------------- -->
					<!-- ------------------------------------------------------------- -->


					@stop