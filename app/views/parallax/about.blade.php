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
          margin-top: 60px;
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
              <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                MiniBiblio 
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a class="navbar-brand" href="intro"><span class="glyphicon glyphicon-th-large" aria-hidden="true">
                  Intro |
                </span></a></li>
                <li ><a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home" aria-hidden="true">
                  Home 
                </span></a></li>
                <li ><a href="lastBooks">Les Derniers Livres</a></li>
                <li class="active"><a href="about">About us</a></li>

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


      <!-- ------------------------------------------------------------- -->
      <!-- ------------------------------------------------------------- -->

      <!-- Container -->
      <div class="container-fluid">



        

        <!-- ------------------------------------------------------------- -->

        <div class="page-header">
          <h1> About us
            <small> Site create with Laravel/Bootstrap</small></h1>
          </div>
          

        </div>

        <!-- ------------------------------ Premiere box d'actu ------------------------------ -->


        
        <div class="container-fluid">
          <div class="row">
          </div>


          <div class="row" >

            <div class="col-md-2">
            </div>


            <div class="col-md-8">
              <div class="well well-lg" style="margin-top: 30px;">
                <h2 style="text-decoration: underline;">
                  Ce site a été fait dans le cadre d'un projet scolaire de l'école d'ingénieur ESIEA.
                </h2>
                
                <p><strong>create by: Lucile Incardona alias MiniPiix && Quentin Bienvenu alias Potetoes'.</strong></p>
                
                <p>
                 </br>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</br> </br> </p>
               </div>

             </div><!--.col -->
           </div><!--row -->

          </div><!--./container -->

          <hr>


          <!-- ------------------------------------------------------------- -->

          

          <!-- ------------------------------------------------------------- -->

          <!-- Scripts are placed here -->

{{ HTML::script('js/vendor/jquery-1.9.1.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}



        </body>



<footer >
       <div class="panel panel-body" style="padding-top:0%;">
        <a href="#top">
                  <img src="img/ico_top.png" >
        </a>
        </div>
      </footer>

      


      </html>



