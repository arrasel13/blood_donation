<?php
// header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."index.php");
  include_once 'includes/header.php';

  

?>

    <!-- Banner Section start -->
    <section class="banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner_carousel">

              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/images/banner/slider1.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  
                  <div class="carousel-item">
                    <img src="assets/images/banner/slider2.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  
                  <div class="carousel-item">
                    <img src="assets/images/banner/slider3.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>

                  </div>
                </div>
                
              </div>
              
          </div>
        </div>
      </div>
    </section>
    <!-- Banner Section end -->


<?php 


  include_once 'includes/footer.php';
?>