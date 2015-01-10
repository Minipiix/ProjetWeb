<!DOCTYPE html>
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

  hr{
    margin-left: 5%;
    margin-right: 5%;

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

  .centered-form .panel-heading{
    background: rgba(39,39,39, 0.8);
    color: white;
  }

  .page-header{
    text-align: left;
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
                <li><a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home" aria-hidden="true">
                  Home 
                </span></a></li>
                <li  class="active"><a href="lastBooks">Les Derniers Livres</a></li>
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

  <div class="page-header">
    <h1> Derniers livres<small> Auteur / Date de sortie ... </small></h1>
  </div>

</div>
<!-- ------------------------------------------------------------- -->

<div class="container-fluid">

 <div class="row">
 </div>
 
 <div class="row" >

  <div class="col-md-2">
  </div>


  <div class="col-md-8">


    <div class="well well-lg" style="margin-top: 30px;">
      <div class="registreBox">


        <h2 style="text-decoration: underline;">
          Voilà les derniers bouquins importés sur le site.
        </h2>
        <p>Vous pourrez bientot faire vous même vos articles sur vos livres postés.</p>
        <p><strong>Vous pouvez en ajouter vous même ci dessous.</strong></p>

        <form role="form">
          <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="form-group">
                <input type="text" name="Name of the book" class="form-control input-sm" placeholder="Name of the Book">
              </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="form-group">
                <input type="text" name="Auteur" class="form-control input-sm" placeholder="Auteur">
              </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="form-group">
                <input type="text" name="Pseudo utilisateur" class="form-control input-sm" placeholder="Pseudo utilisateur">
              </div>
            </div>
          </div>
          <div class="row">

            <a class="btn btn-default" href="#" role="button">Ajouter</a>


          </div>






        </div>
        <div class="row centered-form">
          <div class="col-md-2"></div>
          <div class="col-md-8">

            <div class="row">
              <div class="col-md-2"></div>
              <!-- <table class="table table-bordered"> -->

              <div class="col-md-8">
               <table class="table table-condensed">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Book Name</th>
                    <th>Autor</th>
                    <th>Pseudo</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>


      </div>
    </div>

  </div>

</div> <!--registreBox-->


</div><!-- container-->


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



