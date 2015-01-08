<!DOCTYPE html>
<html>
    <head>
        <title>
            MiniPiix & Potetoes Laravel Site
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
        <li><a href="#">Intro<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Home</a></li>
        <li class="active"><a href="#">Les Derniers Livres</a></li>
        <li><a href="#">Notre conseil du mois</a></li>
	</ul>


      <ul class="nav navbar-nav navbar-right">


         <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> 

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
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- ------------------------------------------------------------- -->
<!-- ------------------------------------------------------------- -->

        <!-- Container -->
        <div class="container-fluid">

<!-- ------------------------------------------------------------- -->
<!--      <img src="img/library2.jpg" alt="..."> -->

<button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
</button>

<button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star
</button>	



<!-- ------------------------------------------------------------- -->

<div class="page-header">
<h1> Les derniers livres importés
<small> View Full Screen </small></h1>
        </div>


<!-- ------------------------------------------------------------- -->
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>
  <div class="panel-body">
    <p>...</p>
  </div>

  <!-- Table -->
  <table class="table">
    ...
  </table>
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



