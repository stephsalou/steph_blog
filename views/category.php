<?php require "../_config/config.php";
require '../vendor/autoload.php';
include '../_functions/functions.php';
$categories=new \App\Controller\categorycontroller();
$categories=$categories->showAllCategory();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../views/include/head.php"; ?>
  <title>Material Design Bootstrap</title>
</head>
<style type="text/css">
    .view,body,html{height:100%}.carousel{height:50%}.carousel .carousel-inner,.carousel .carousel-inner .active,.carousel .carousel-inner .carousel-item{height:100%}@media (max-width:776px){.carousel{height:100%}}.navbar{background-color:rgba(0,0,0,.2)}.page-footer,.top-nav-collapse{background-color:#929FBA}@media only screen and (max-width:768px){.navbar{background-color:#929FBA}}
    html,
    body,
    header,
    .carousel {
        height: 60vh !important;
    }

    @media (max-width: 740px) {

        html,
        body,
        header,
        .carousel {
            height: 100vh !important;
        }
    }

    @media (min-width: 800px) and (max-width: 850px) {

        html,
        body,
        header,
        .carousel {
            height: 100vh!important;
        }
    }

    @media (min-width: 800px) and (max-width: 850px) {
        .navbar:not(.top-nav-collapse) {
            background: #929FBA !important;
        }
    }
    .view.slide1 {
        background: url('assets/img/g-12.jpg') no-repeat;
        background-size: cover;
    }

    .view.slide2 {
        background: url('assets/img/g-13.jpg') no-repeat;
        background-size: cover;
    }

    .view.slide3 {
        background: url('assets/img/g-14.jpg') no-repeat;
        background-size: cover;
    }
    header>.navbar.fixed-top{
        background-color: rgba(0, 0, 0, 0) !important;

    }
</style>
<body>
<?php
$carousel=<<<TAG
<!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view slide1">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Learn Bootstrap 4 with MDB</strong>
              </h1>

              <p>
                <strong>Best & free guide of responsive web design</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and
                  written versions
                  available. Create your own, stunning website.</strong>
              </p>

              <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start
                free tutorial
                <i class="fas fa-graduation-cap ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view slide2">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Learn Bootstrap 4 with MDB</strong>
              </h1>

              <p>
                <strong>Best & free guide of responsive web design</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and
                  written versions
                  available. Create your own, stunning website.</strong>
              </p>

              <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start
                free tutorial
                <i class="fas fa-graduation-cap ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view slide3">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Learn Bootstrap 4 with MDB</strong>
              </h1>

              <p>
                <strong>Best & free guide of responsive web design</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and
                  written versions
                  available. Create your own, stunning website.</strong>
              </p>

              <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start
                free tutorial
                <i class="fas fa-graduation-cap ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->
TAG;
?>
<!--<header>-->
<?php include "../views/include/header.php" ?>
<!--/header-->
<!--Main layout-->
<main class="mt-5 pt-5">
  <div class="container">
    <!--Section: Cards-->
    <section class="text-center">

      <!--Grid row-->
      <div class="row mb-4 wow fadeIn">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card image-->
            <div class="view overlay">
              <div class="embed-responsive embed-responsive-16by9 rounded-top">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cXTThxoywNQ" allowfullscreen></iframe>
              </div>
            </div>

            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">MDB Quick Start</h4>
              <!--Text-->
              <p class="card-text">Get started with MDBootstrap, the world's most popular Material Design framework for building
                responsive, mobile-first sites.</p>
              <p class="card-text">
                <strong>5 minutes, a few clicks and... done. You will be surprised at how easy it is.</strong>
              </p>
            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->
    <?php if(isset($categories) && !empty($categories)): ?>
        <!--Grid column-->
        <?php foreach($categories as $category): ?>
        <div class="col-lg-4 col-md-6 mb-4">

          <!--Card-->
          <div class="card">
            <!--Card image-->
            <div class="view overlay">
              <img src="<?= IMAGE_PATH.$category->image; ?>" class="card-img-top img-fluid" alt="">
              <a href="<?= 'category/'.$category->id ?>" target="">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title"><?= $category->name; ?></h4>
              <!--Text-->
              <p class="card-text"><?= $category->sentence; ?></p>
              <a href="<?= 'category/'.$category->id; ?>" target="" class="btn btn-primary btn-md">VOIR LES DETAILS
                <i class="fas fa-eye ml-2"></i>
              </a>
            </div>
          </div>
          <!--/.Card-->

        </div>
            <?php endforeach ?>
        <!--Grid column-->
<?php endif; ?>
      </div>
      <!--Grid row-->
    </section>
    <!--Section: Cards-->

  </div>
</main>
<!--Main layout-->

<?php include "../views/include/footer.php" ?>

</body>

</html>
