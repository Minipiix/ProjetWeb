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
          {{ HTML::style('css/home.css') }}

          <!-- -------------------------- Style ---------------------------------- -->

          <style>

          @section('styles')
          body {
            padding-top: 60px;
          }
          @show

          .centered-form .panel{
            background: rgba(255, 255, 255, 0.8);
            box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
            color: #4e5d6c;

          }

          body{

            background-color: rgb(161,161,161);
            background-image:url("http://www.euromoldes.com.br/site/web/images/background2.jpg");
            background-repeat:no-repeat;
            background-size: cover;
            background-attachment: fixed;
            text-align: left;
          }


          .centered-form{
            margin-top: 60px;
          }

          .pull-right{
           text-align= right;
         }

         .carousel{
           margin-top: 40px;


         }


         .alertBox .panel-default{
          margin-top: 30px;
          width: 100%;
          box-shadow: 1px 1px 12px #555;
        }

        .centered-form .panel-heading{
          background: rgba(74,112,139, 0.8);
          color: white;
        }
        
        .page-header{
          text-align: left;
          margin-left: 5%;
          margin-right: 5%;

        }

        hr{
          margin-left: 5%;
          margin-right: 5%;

        }

        </style>
      </head>


      <body>



        <!-- ----------------------------- Bar de Navigation -------------------------------- -->



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
              <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-book" aria-hidden="true" ></span>
                 MiniBiblio 
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a class="navbar-brand" href="intro"><span class="glyphicon glyphicon-th-large" aria-hidden="true">
                  Intro |
                </span></a></li>
                <li class="active"><a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home" aria-hidden="true">
                  Home 
                </span></a></li>
                <li><a href="lastBooks">Les Derniers Livres</a></li>
                <li><a href="about">About us</a></li>

              </ul>


              <ul class="nav navbar-nav navbar-right">


               <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search / Doesn't work">
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


      <!-- ------------------------------------------------------------- -->
      <!-- ------------------------------------------------------------- -->

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


          <!-- Scripts are placed here -->
          {{ HTML::script('js/bootstrap.min.js') }}
          {{ HTML::script('js/vendor/jquery-1.9.1.min.js') }}


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
                        Gestion de la BDD
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

            <!-- ------------------------------------------------------------- -->

            <div class="page-header">
              <h1> L'actualité bibliographique du moment
                <small> View Full Screen </small></h1>
              </div>
              

            </div>

            <!-- ------------------------------ Premiere box d'actu ------------------------------ -->


            
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
                    <p>
                      Anastasia Steele accepte de remplacer sa colocataire malade, Katherine, pour interviewer l'homme d'affaires et milliardaire Christian Grey. Jeune PDG séduisant et mystérieux, ce dernier l'intimide. A sa grande surprise, Christian Grey vient la voir au magasin où elle travaille, prétextant des achats. Très attirée par lui, elle se verra rapidement devenir sa soumise. Pour cela un contrat va être rédigé pour permettre de définir les règles de ce jeu dangereux. Cependant, ce contrat devient souvent un sujet tabou et sera changé sans cesse.

                      À mesure que leur relation progresse, la jeune et innocente Ana est confrontée à un tout nouvel univers aux côtés du riche entrepreneur. Christian a cependant une face sombre : il est adepte du BDSM. La jeune femme doit alors décider si elle est prête ou non à entrer dans cet univers.
                    </br> </br> </p>
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="//www.youtube.com/embed/emGq5QqqtDg"></iframe>
                    </div>
                  </div>

                </div><!--.col -->


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

              <!-- Scripts are placed here -->
                            {{ HTML::script('js/vendor/jquery-1.9.1.min.js') }}
                            {{ HTML::script('js/bootstrap.min.js') }}


            </body>



            <footer >

                 <div class="panel panel-body" style="padding-top:0%; margin-right: 3%;">
                  <a href="#top">
                    <img src="img/ico_top.png" >
                  </a>
                </div>
 
            </footer>





      </html>



