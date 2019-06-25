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

            <!--Section: Carousel-->
            <section class="mb-4">

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
                            <img class="d-block w-100 img-fluid" style="max-width: 100%;height:auto;" src="assets/img/venom-1.jpg" alt="First slide">
                        </div>
                        <!--/First slide-->
                        <!--Second slide-->
                        <div class="carousel-item">
                            <img class="d-block w-100 img-fluid" style="max-width: 100%;height:auto;" src="assets/img/venom-2.jpg" alt="Second slide">
                        </div>
                        <!--/Second slide-->
                        <!--Third slide-->
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/live-1.jpg" alt="Third slide">
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


            </section>
            <!--Section: Carousel-->

            <!--Section: Images-->
            <section class="text-center">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-12 mb-3">

                        <div class="view overlay z-depth-1-half">
                            <img src="assets/img/horror-1.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-white-light"></div>
                            </a>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 mb-3">

                        <div class="view overlay z-depth-1-half">
                            <img src="assets/img/horror-2.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-white-light"></div>
                            </a>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 mb-3">

                        <div class="view overlay z-depth-1-half">
                            <img src="assets/img/horror-3.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-white-light"></div>
                            </a>
                        </div>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-6 mb-3">

                        <div class="view overlay z-depth-1-half">
                            <img src="assets/img/horror-4.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-white-light"></div>
                            </a>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 mb-3">

                        <div class="view overlay z-depth-1-half">
                            <img src="assets/img/horror-5.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-white-light"></div>
                            </a>
                        </div>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-12 mb-3">

                        <div class="view overlay z-depth-1-half">
                            <img src="assets/img/horror-6.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask rgba-white-light"></div>
                            </a>
                        </div>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->


            </section>
            <!--Section: Images-->



            <!--Section: Jumbotron-->
            <section class="card wow fadeIn" style="background-image: url(assets/img/g-119.jpg);">

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
                    <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start free tutorial
                        <i class="fas fa-graduation-cap ml-2"></i>
                    </a>

                </div>
                <!-- Content -->
            </section>
            <!--Section: Jumbotron-->

        </div>
    </main>
    <!--Main layout-->
<?php include "../views/include/footer.php" ?>

</body>

</html>
