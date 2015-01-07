<!DOCTYPE html>
<html>
    <head>
        <title>
            Laravel 4 - Test
        </title>
 <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">


<!-- ------------------------------------------------------------- -->
<!-- ------------------------------------------------------------- -->


 <!-- CSS are placed here -->
       {{ HTML::style('css/bootstrap.css') }}
       {{ HTML::style('css/bootstrap-theme.css') }}
       {{ HTML::style('css/carousel.css') }}


<!-- ------------------------------------------------------------- -->

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

.centered-form{
  margin-top: 60px;
}

.pull-right{
	text-align= right;
}

.centered-form .panel-heading{
background: rgba(74,112,139, 0.8);
color: white;
}
        </style>
    </head>


    <body>


<!-- ------------------------------------------------------------- -->
        <!-- Navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="#">Laravel</a>
                </div>
                <!-- Everything you want hidden at 940px or less, place within here -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{{ URL::to('') }}}">Home</a></li>
                        <li><a href=registration.blade.php>Sign In</a></li>
                        <li><a href="{{{ URL::to('') }}}">Log In</a></li>
                    </ul>

                </div>

            </div>
        </div> 

<!-- ------------------------------------------------------------- -->

        <!-- Container -->
        <div class="container-fluid">

<!-- ------------------------------------------------------------- -->

            <!-- Content -->
      <div class="row">
        <h2>This template is using locally hosted Bootstrap!</h2>
      </div>
    </div>
<div class="row">
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
</div>
<div class="row">
  <div class="col-md-8">.col-md-8</div>
  <div class="col-md-4">.col-md-4</div>
</div>
<div class="row">
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4">.col-md-4</div>
</div>
<div class="row">
  <div class="col-md-6">.col-md-6</div>
  <div class="col-md-6">.col-md-6</div>
</div>


<!-- Reference
http://getbootstrap.com/components/#responsive-embed
NEW:
"As seen in SUIT CSS, we've added a few classes for creating responsive embeds.
They're great for proportionally scaling down YouTube videos and other iframe or embed elements"
-->
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


<!-- ---------------------------------LogIn---------------------------- -->

<div class="row centered-form">
  <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Please Login</h3>
      </div>
      <div class="panel-body">
        <form role="form">

          <div class="form-group">
            <input type="email" name="email" class="form-control input-sm" placeholder="Email Address">
          </div>

          <div class="form-group">
            <input type="password" name="password" class="form-control input-sm" placeholder="Password">
          </div>

          <div class="checkbox">
            <label>
              <input name="remember" type="checkbox" value="Remember Me"> Remember Me
              <a href="/forgot" class="pull-right">Forgot Password?</a>
            </label>
          </div>

          <input type="submit" value="Login" class="btn btn-info btn-block">

        </form>
      </div>
    </div>
    <div class="text-center">
      <a href="/register" >Don't have an account? Register</a>
    </div>
  </div>
</div>



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







<!-- ------------------------- 2eme Carousel ------------------------------------ -->

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="..." alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="..." alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>

<!-- ------------------------------------------------------------- -->

        </div>

        <!-- Scripts are placed here -->
	<script src="js/vendor/jquery-1.9.1.min.js"><script>
	<script src="js/bootstrap.min.js"><script>

    </body>
</html>



