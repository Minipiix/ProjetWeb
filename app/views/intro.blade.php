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
		</style>
<style>

@section('styles')
            body {
                padding-top: 60px;
            }
        @show

.centered-form .panel{
  background: rgba(255, 255, 255, 0.8);
  box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
  color: black;

}

.centered-form{
  margin-top: 60px;
}

.pull-right{
	text-align= right;
}

h2{
color: black;
}

        </style>




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
    </head>

<!-- ------------------------------------------------------------- -->

    <body class="loading">
       	
<main>
       	 
	        <section id="slide-1" class="homeSlide">
	        	<div class="bcg" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#slide-1">
		        	<div class="hsContainer">
			    		<div class="hsContent" data-center="opacity: 1" data-106-top="opacity: 0" data-anchor-target="#slide-1 h2">
				    		
						<!-- ---------------------------------LogIn---------------------------- -->

<div class="row centered-form">
  <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
    <div class="panel">
     

						<h2><span style ="color:rgb(37,37,37);">Bienvenu sur MiniBiblio<br />Vous aimez la littérature? Ce site est fait pour vous</span></h2>
				    		<p>This site was made by Minipiix & potetoes.</p>
 

    </div>
  </div>
</div>



<!-- ------------------------------------------------------------- -->



						<h2>Fade out elements before<br />they leave viewport</h2>
				    		<p>This slide moves background image at a slower speed then the page scroll. Text is fading out to opacity 0 at 106 pixels from the top.</p>
			    		</div>
		        	</div>
	        	</div>
		    </section>
		    
<!-- ------------------------------------------------------------- -->
		   
		 <section id="slide-2">
		    	<div class="bcg" data-0="background-color:rgb(37,37,37);" data-top="background-color:(0,0,0);"  data-anchor-target="#slide-2">
			    	<div class="hsContainer">
			    		<div class="hsContent">
				    		<h2 data-center="opacity: 1" data--200-bottom="opacity: 0" data-206-top="opacity: 1" data-106-top="opacity: 0" data-anchor-target="#slide-2 h2">Fade me in and out</h2>
				    		<p data-center="opacity: 1" data--200-bottom="opacity: 0" data-206-top="opacity: 1" data-106-top="opacity: 0" data-anchor-target="#slide-2 h2">Here we are changing the background color from blue to black. Text is fading in at 206 pixels from the bottom and fading out 106 pixels from the top.</p>
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
		    		<h2>Fixed element fading in and out</h2>
		    		<p><span class="bgBlack">Text is fixed 206 pixels from the top, while the background is moving 40 pixels to the left.</span></p>
		    		<p><span class="bgBlack">Or did you think that the scooter is driving off?</span></p>
	    		<!-- </div>-->
    		</div>
    	</div>
    	
    </div>
</section>
 
		    
		</main>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/imagesloaded.js"></script>
        <script src="js/skrollr.js"></script>
        <script src="js/_main.js"></script>

    </body>
</html>


