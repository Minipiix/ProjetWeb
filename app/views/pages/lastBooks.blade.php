@extends('layouts.default')
@section('content')



<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<script>
$( "li" ).addClass(function( index, currentClass ) {
  var addedClass;
  
  if ( currentClass === "lastBooksClass" ) {
    addedClass = "active";
  }
  
  return addedClass;
});
</script>

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
                    <td>Lord of the ring I</td>
                    <td>J. R. R. Tolkien</td>
                    <td>@potetoes</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Lord of the ring II</td>
                    <td>J. R. R. Tolkien</td>
                    <td>@potetoes</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Lord of the ring III</td>
                    <td>J. R. R. Tolkien</td>

                    <td>@potetoes</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Eragon</td>
                    <td>Christopher Paolini</td>

                    <td>@MiniPiix</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Harry Potter</td>
                    <td>J. K. Rowling</td>

                    <td>@MiniPiix</td>
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


@stop