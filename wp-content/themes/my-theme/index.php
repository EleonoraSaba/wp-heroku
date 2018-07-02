<?php 
get_header();?>



<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 " style="height: 500px " src="https://images.musement.com/cover/0001/09/italia-cagliari-veduta-mare_header-8090.jpeg?&q=60&fit=crop" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100"  style="height: 500px " src="http://www.settenanielmas.it/wp-content/uploads/2017/06/Cagliari-02.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100"  style="height: 500px" src="http://www.saily.it/sites/default/files/_poetto.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <div class="jumbotron">
  <h1 class="display-4"><?php bloginfo('name'); ?> </h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
<div id='Blog'>
  <p>  testo blog    </p>
  
</div>
<div id= 'chisiamo'>
    <p>  testo Chi Siamo   </p>
</div>
<div id='Contatti'>
    <p>   Contatti: e-mail      xxxxx@xxx.com
                    telefono    070xxxxxx </p>
</div>
<?php 
get_footer();?>
