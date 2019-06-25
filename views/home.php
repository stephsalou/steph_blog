<?php include "../_config/config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../views/include/head.php"; ?>
  <title>Material Design Bootstrap</title>
</head>

<body>
<?php include "../views/include/header.php" ?>

  <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container">

      <!--Section: Jumbotron-->
      <section class="card wow fadeIn " style="background: url(assets/img/nat-2.jpg) center; -webkit-background-size: cover;background-size: cover; ">

        <!-- Content -->
        <div class="card-body text-white text-center py-5 px-5 my-5">

          <h1 class="mb-4">
            <strong>Learn Bootstrap 4 with MDB</strong>
          </h1>
          <p>
            <strong>Best & free guide of responsive web design</strong>
          </p>
          <p class="mb-4">
            <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written
              versions available. Create your own, stunning website.</strong>
          </p>
          <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start
            free tutorial
            <i class="fas fa-graduation-cap ml-2"></i>
          </a>

        </div>
        <!-- Content -->
      </section>
      <!--Section: Jumbotron-->

      <hr class="my-5">

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
                <p class="card-text">Get started with MDBootstrap, the world's most popular Material Design framework
                  for building
                  responsive, mobile-first sites.</p>
                <p class="card-text">
                  <strong>5 minutes, a few clicks and... done. You will be surprised at how easy it is.</strong>
                </p>
              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->
        <!--Pagination-->
        <nav class="d-flex justify-content-center wow fadeIn">
          <ul class="pagination pg-blue">

            <!--Arrow left-->
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>

            <li class="page-item active">
              <a class="page-link" href="home/1">1
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="page-item">
              <a class="page-link" href="home/2">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="home/3">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="home/4">4</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="home/5">5</a>
            </li>

            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
        <!--Pagination-->

      </section>
      <!--Section: Cards-->

    </div>
  </main>
  <!--Main layout-->
<?php include "../views/include/footer.php" ?>
</body>

</html>
