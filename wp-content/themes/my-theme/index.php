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
<div class="py-5">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-7">
          <h2 class="text-primary" id="Blog">Article subtitle #1</h2>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-5 align-self-center">
          <img class="img-fluid d-block w-100 img-thumbnail" src=".img/Bastione.PNG"> </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <img class="img-fluid d-block mb-4 w-100 img-thumbnail" src="https://pingendo.github.io/templates/sections/assets/gallery_3.jpg"> </div>
        <div class="col-md-7">
          <h2 class="text-primary pt-3" id="chisiamo">Article subtitle #2</h2>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </div>
<?php 
get_footer();?>
