<?php include "../_config/config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../views/include/head.php"; ?>
  <title>Register</title>

  <style type="text/css">
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 650px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }
  </style>
</head>

<body>
  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('assets/img/horror-2.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

            <h1 class="display-6 font-weight-bold">AFRIKAN >< SCIENCE</h1>

            <hr class="hr-light">

            <p>
              <strong>le meilleur blog Africain libre</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong>Inscrivez vous sur le blog Africain comme vous l'attendiez . Ici la culture et la science Africaine selon les coutumes de plusieurs comuneaute africaine et classe selon differentes categories</strong>
            </p>

            <a  href="home" class="btn btn-indigo btn-lg">retourner a l'acceuil
              <i class="fas fa-home ml-2"></i>
            </a>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body">

                <!-- Form -->
                <form id="register_Form" >
                  <!-- Heading -->
                  <h3 class="dark-grey-text text-center">
                    <strong>REGISTER</strong>
                  </h3>
                  <hr>

                  <div class="md-form">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input type="text" name="name" form="register_Form" id="name" class="form-control">
                    <label for="name">Your name</label>
                  </div>
                  <div class="md-form">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="text" name="email" form="register_Form" id="email" class="form-control">
                    <label for="email">Your email</label>
                  </div>
                    <div class="md-form">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <input type="text" name="password" form="register_Form" id="pass" class="form-control">
                    <label for="pass">Your password</label>
                  </div>

                  <div class="text-center">
                    <button id="register" class="btn btn-indigo">S'inscricre</button>
                  </div>
                </form>
                <!-- Form -->
              </div>
            </div>
            <!--/.Card-->
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
  <!--Footer-->
  <footer class="page-footer text-center font-small mdb-color darken-2  wow fadeIn">


    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="https://plus.google.com/" target="_blank">
        <i class="fab fa-google-plus-g "></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright
      <a href="about" target="_blank"> Afirkanxscience.com </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
        new WOW().init();
      $(document).ready(function(){
          $('#register').on('click',function(e){
              e.preventDefault();
              let data=$('form#register_Form').serializeArray();
            console.dir(data);
              $.ajax({
                  url:'',
                  data:data,
                  type:'POST',
                  dataType:'json',
                  success:function(json){
                      console.log('success');
                      console.dir(json);
                  },
                  error:function(err){
                      console.log('error');
                      console.dir(err);
                  }
              })
          });
      })
  </script>
</body>

</html>
