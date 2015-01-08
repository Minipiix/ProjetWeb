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
          {{ HTML::style('css/home.css') }}
          {{ HTML::style('css/carousel.css') }} 


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

         body .alertBox{
          text-align: center;
          position: center;
        }

        .panel-default{
          margin-top: 60px;
          width: 100%;
          box-shadow: 1px 1px 12px #555;
        }

        .centered-form .panel-heading{
          background: rgba(74,112,139, 0.8);
          color: white;
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
              <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                MiniBiblio 
             </a>
           </div>

           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a class="navbar-brand" href="intro"><span class="glyphicon glyphicon-th-large" aria-hidden="true">
                Intro 
              </span></a></li>
              <li class="active"><a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home" aria-hidden="true">
                Home 
             </span></a></li>
              <li><a href="lastBooks">Les Derniers Livres</a></li>
              <li><a href="conseil">Notre conseil du mois</a></li>
              <li><a href="about">About us</a></li>

                          </ul>


            <ul class="nav navbar-nav navbar-right">


             <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form> 


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"> Register/Login</span><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Register</a></li>
                <li><a href="#">Login</a></li>

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
                <h1>We are creative</h1>        
                <h3>Get start your next awesome project</h3>
              </hgroup>
              <button class="btn btn-hero btn-lg" role="button">See all features</button>
            </div>
          </div>
          <div class="item slides">
            <div class="slide-2"></div>
            <div class="hero">        
              <hgroup>
                <h1>We are smart</h1>        
                <h3>Get start your next awesome project</h3>
              </hgroup>       
              <button class="btn btn-hero btn-lg" role="button">See all features</button>
            </div>
          </div>
          <div class="item slides">
            <div class="slide-3"></div>
            <div class="hero">        
              <hgroup>
                <h1>We are amazing</h1>        
                <h3>Get start your next awesome project</h3>
              </hgroup>
              <button class="btn btn-hero btn-lg" role="button">See all features</button>
            </div>
          </div>
        </div> 


        <!-- Scripts are placed here -->
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/vendor/jquery-1.9.1.min.js') }}


        <!-- ---------------------------- AlertBox --------------------------------- -->

        <div class="alertBox">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">


              <div class="panel panel-default">
                <div class="panel-body">
                  <h2>Attention ceci est une version beta du site</br><small>Progression du site:</small></h2>
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


            <!-- ------------------------------ Premiere box d'actu ------------------------------ -->


            <div class="jumbotron">



              <div class="container">
                <div class="row">
                  <h3>
                    L'actualité bibliographique du moment
                  </h3>
                  <p>
                    <a href="http://bootsnipp.com/iframe/d2DzN" target="_blank">View Full Screen</a>
                  </p>

                  <hr>
                </div><!--.row -->
              </div><!--./container -->

            </div>



            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <h4>
                    Le best-seller 50 nuances de gris a enfin une adaptation prévu au cinéma.
                  </h4>
                  <p><strong>Date de sortie: St Valentin 2015</strong>
                  </p>
                  <p>Mesdames, préparer vos orgasmes...</p>

                </div><!--.col -->
                <div class="col-md-8">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/emGq5QqqtDg"></iframe>
                  </div>
                </div><!--.col -->

              </div><!--./row -->
            </div><!--./container -->



          </div>

          <!-- ------------------------------------------------------------- -->

          <div class="row">
            <a href="#top">
              TOPPPPP
            </a>
          </div>

          <!-- ------------------------------------------------------------- -->

          <!-- Scripts are placed here -->
          {{ HTML::script('js/bootstrap.min.js') }}
          {{ HTML::script('js/vendor/jquery-1.9.1.min.js') }}


        </body>



        <!--
        <div class="footer">

                <nav class="navbar navbar-inverse" role="navigation">
          <div class="container-fluid">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">MiniBiblio</a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Les Derniers Livres</a></li>
             
        	
        	</ul>
              <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sign In / Log In<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Sign In</a></li>
                    <li><a href="#">Log In</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>


        </div>
      -->


      </html>



