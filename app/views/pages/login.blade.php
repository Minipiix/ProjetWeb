@extends('layouts.default')
@section('content')



<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<script>
$( "li" ).addClass(function( index, currentClass ) {
  var addedClass;
 
  if ( currentClass === "loginClass" ) {
    addedClass = "active";
  }
 
  return addedClass;
});
</script>

<!-- ------------------------------------------------------------- -->

          <!-- Container -->
          <div class="container-fluid">


<div class="logbloc">

<hr>

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
                <!-- <a href="/forgot" class="pull-right">Forgot Password?</a> -->
              </label>
            </div>

            <input type="submit" value="Login" class="btn btn-info btn-block">

          </form>
        </div>
      </div>
      <div class="text-center">
        <a href="registration" >Don't have an account? Register</a>
      </div>
    </div>
  </div>


</div>

<hr>
  <!-- ------------------------------------------------------------- -->

          </div>

          @stop