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
                  Ce site a été fait dans le cadre d'un projet scolaire de l'école d'ingénieur ESIEA.
                </h2>
                
                <p><strong>Create by: Lucile Incardona & Quentin Bienvenu (incardona@et.esiea.fr, bienvenu@et.esiea.fr).</strong></p><p>Alias: MiniPiix & potetoes'</p>
                
                <p>
                 </br>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</br> </br> </p>
               </div>

             </div><!--.col -->
           </div><!--row -->

          </div><!--./container -->

          <hr>


          <!-- ------------------------------------------------------------- -->





@stop