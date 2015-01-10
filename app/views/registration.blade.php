  <!DOCTYPE html>
  <html>
  <head>
    <title>
      MiniBiblio          </title>
      <meta charset="utf-8">

      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">


      <!-- ------------------------------------------------------------- -->
      <!-- ------------------------------------------------------------- -->


      <!-- CSS are placed here -->
      {{ HTML::style('css/bootstrap.css') }}
      {{ HTML::style('css/bootstrap-theme.css') }}
      {{ HTML::style('css/carousel.css') }}
      {{ HTML::style('css/home.css') }}


      <!-- ------------------------------------------------------------- -->

      <style>

      @section('styles')
      body {
        padding-top: 10%;
      }
      @show

      body{

        background-color: rgb(161,161,161);
        background-image:url("http://www.euromoldes.com.br/site/web/images/background2.jpg");
        background-repeat:no-repeat;
        background-size: cover;
        background-attachment: fixed;
        text-align: left;
      }

      .centered-form .panel{
        background: rgba(255, 255, 255, 0.8);
        box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
        color: #4e5d6c;

      }

      .centered-form{
        margin-top: 60px;
      }

      .pull-right{
        text-align= right;
      }

      .centered-form .panel-heading{
        background: rgba(38,38,38, 0.8);
        color: white;
      }

      hr{
        margin-left: 5%;
        margin-right: 5%;

      }

      </style>






    </head>


    <body>


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

    <!-- Container -->
    <div class="container-fluid">

      <hr>

      <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Please sign up / It's free</h3>
            </div>
            <div class="panel-body">
              <div class="panel-body">
                <form role="form">
                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                        <input type="text" name="first_name" class="form-control input-sm" placeholder="First Name">
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                        <input type="text" name="last_name" class="form-control input-sm" placeholder="Last Name">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <input type="email" name="email" class="form-control input-sm" placeholder="Email Address">
                  </div>

                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                        <input type="password" name="password" class="form-control input-sm" placeholder="Password">
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                        <input type="password" name="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                      </div>
                    </div>
                  </div>
                  <input type="submit" value="Register" class="btn btn-info btn-block">

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ------------------------------------------------------------ -->

    <hr>

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



