<!--Footer-->
<footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">
    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
        <a href="https://www.facebook.com/mdbootstrap" target="_blank">
            <i class="fab fa-facebook-f mr-3"></i>
        </a>

        <a href="https://twitter.com/MDBootstrap" target="_blank">
            <i class="fab fa-twitter mr-3"></i>
        </a>

        <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
            <i class="fab fa-youtube mr-3"></i>
        </a>

        <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
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
<!--Modal: modalConfirmDelete-->
<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content text-center">
            <!--Header-->
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Are you sure?</p>
            </div>

            <!--Body-->
            <div class="modal-body">

                <i class="fas fa-times fa-4x animated rotateIn"></i>

            </div>

            <!--Footer-->
            <div class="modal-footer flex-center">
                <a id="YesConfirm" type="button" class="btn  btn-outline-danger">Yes</a>
                <a type="button"  class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: modalConfirmDelete-->

<!--Modal: modalConfirmCreation-->
<div class="modal fade" id="modalConfirmCreation" tabindex="-1" role="dialog" aria-labelledby="modal de success"
     aria-hidden="true">
    <div class="modal-dialog modal-sm modal-notify modal-success" role="document">
        <!--Content-->
        <div class="modal-content text-center">
            <!--Header-->
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Are you sure?</p>
            </div>

            <!--Body-->
            <div class="modal-body">

                <i class="fas fa-check fa-4x animated rotateIn"></i>

            </div>

            <!--Footer-->
            <div class="modal-footer flex-center">
                <a id="YesConfirm" type="button" class="btn  btn-outline-success">Yes</a>
                <a type="button"  class="btn  btn-success waves-effect" data-dismiss="modal">No</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: modalConfirmCreation-->
<!--Modal: modalSignIn-->
<div class="modal fade" id="modalSignIn" tabindex="-1" role="dialog" aria-labelledby="modal de connexion"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-notify modal-success" role="document">
        <!--Content-->
        <div class="modal-content text-center">
            <!--Header-->
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Sign In</p>
                <i class="fas fa-times " style="margin-left: 80%;" data-dismiss="modal" type="button"></i>
            </div>

            <!--Body-->
            <div class="modal-body">
                <i class="fas fa-lock fa-2x animated pulse"></i>
                <!-- Form -->
                <form id="SignInForm" >
                    <!-- Heading -->
                    <h3 class="dark-grey-text text-center">
                        <strong>Sign In</strong>
                    </h3>
                    <hr>
                    <div class="input-group inputs md-form">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-envelope" aria-hidden="true"></i> </span>
                        </div>
                        <input class="form-control" id="email" form="SignInForm" type="email" name="email" placeholder="put your mail" aria-label="Recipient's email">
                        <div class="input-group-append">
                            <span class="input-group-text">EMAIL</span>
                        </div>
                    </div>
                    <div class="input-group inputs md-form">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-lock" aria-hidden="true"></i> </span>
                        </div>
                        <input class="form-control" id="pass" form="SignInForm" type="password" name="password" placeholder="Your password" aria-label="Recipient's email">
                        <div class="input-group-append">
                            <span class="input-group-text">EMAIL</span>
                        </div>
                    </div>
                </form>
                <!-- Form -->
            </div>

            <!--Footer-->
            <div class="modal-footer flex-center">
                <div class="text-center btn-group">
                    <button id="SignIn" form="SignInForm" class="btn btn-outline-purple btn-lg">Se Connecter</button>
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: modalSignIn-->

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

</script>
<script type="application/javascript" src="assets/js/app.js"></script>
