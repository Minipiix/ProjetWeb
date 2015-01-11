@extends('layouts.default')
@section('content')
    

<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<script>
$( "li" ).addClass(function( index, currentClass ) {
  var addedClass;
 
  if ( currentClass === "aboutClass" ) {
    addedClass = "active";
  }
 
  return addedClass;
});
</script>

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
                  Ce site a été fait dans le cadre d'un projet scolaire de l'école d'ingénieur <a href="">ESIEA</a>.
                </h2>
                
                <p><strong>Create by: Lucile Incardona & Quentin Bienvenu (incardona@et.esiea.fr, bienvenu@et.esiea.fr).</strong></p><p>Alias: MiniPiix & potetoes'</p>
                
                <p>
                 </br>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</br> </br> </p>
               
                <p>


                  <div style="text-align: center;">



        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Rappel Version Beta
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="text-align: center;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="myModalLabel">Attention ceci est une version beta du site</h2>
      </div>
      <div class="modal-body">

        <div class="alertBox" >
          <div class="row">

            <div class="col-md-12">

              <h2><small>Progression du site:</small></h2>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                  90%
                </div>
              </div>

              <h2><small>Investissement étudiant:</small></h2>
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                  100%  </div>
                </div>

                <h2><small>Les difficultés rencontrées:</small></h2>
                <div class="progress">
                  <div class="progress-bar progress-bar-danger" style="width: 70%">
                    Gestion de la BDD / sous Linux
                  </div>
                  <div class="progress-bar progress-bar-warning" style="width: 20%">
                    BootStrap
                  </div>
                  <div class="progress-bar progress-bar-success" style="width: 10%">
                    Laravel/Linux
                  </div>
                </div>

              </div>

            </div>
    



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




                  </div>



                </p>
               </div>

             </div><!--.col -->

           </div><!--row -->
           
           

          </div><!--./container -->

          <hr>


          <!-- ------------------------------------------------------------- -->





@stop