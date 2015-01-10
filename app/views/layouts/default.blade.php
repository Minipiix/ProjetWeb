<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>


<body>
	<div class="container-fluid">

		<header class="row">
			@include('includes.header')
		</header>

		<div id="main" class="row">

			@yield('content')

		</div>

		<footer class="row">
			@include('includes.footer')
		</footer>

	</div>

	<!-- Scripts are placed here -->

	{{ HTML::script('js/vendor/jquery-1.9.1.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}


	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/imagesloaded.js"></script>
	<script src="js/skrollr.js"></script>
	<script src="js/_main.js"></script>


</body>
</html>