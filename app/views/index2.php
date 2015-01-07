<!DOCTYPE html>
<html>
    <head>
        <title>
            Laravel 4 - Test
        </title>
 <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSS are placed here -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">


<style>

.centered-form .panel{
  background: rgba(255, 255, 255, 0.8);
  box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
  color: #4e5d6c;

}

.centered-form{
  margin-top: 60px;
}

.centered-form .panel-heading{
background: rgba(74,112,139, 0.8);
color: white;
}
        </style>
    </head>


    <body>



        <!-- Container -->
        <div class="container">

            <!-- Content -->
      <div class="row">
        <h2>This template is using locally hosted Bootstrap!</h2>
      </div>
    </div>


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



        </div>

        <!-- Scripts are placed here -->
	<script src="js/vendor/jquery-1.9.1.min.js"><script>
	<script src="js/bootstrap.min.js"><script>

    </body>
</html>



