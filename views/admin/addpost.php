<?php
require_once '../../_config/config.php';
require_once '../../vendor/autoload.php';
$articles=new \App\Controller\adminpostcontroller();
$articles=$articles::getAllarticle();
?>
<!doctype html>
<html lang="fr">
<head>

    <?php include "../../views/admin/include/head.php"; ?>
    <link rel="stylesheet" href="../assets/styles/css/simplesidebar.css">
    <link rel="stylesheet" href="../assets/styles/css/jqueryscripttop.css">
    <title>admin panel</title>
</head>
<style>
    input.success{
        box-shadow: inset 0px -0.5px 5px green ;
    }
</style>
<body>
<div id="my-sidebar-context" class="widget-sidebar-context">
    <header id="this-header" class="navbar justify-content-start align-items-center navbar-dark bg-dark page-header">

        <a class="navbar-brand" href="#">
            Simple Sidebar
        </a>


        <a href="#" class="navbar-toggler widget-sidebar-toggler">
            <i class="fas fa-bars"></i>
        </a>
        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item ml-5 mb-0">
                <button data-target="#modalSignIn" data-toggle="modal" class="btn btn-outline-light-blue btn-md rounded waves-effect mt-0" type="submit">sign In <i class="fas fa-lock ml-2 "></i></button>
            </li>
        </ul>
    </header>
    <div class="page-body">
        <nav class="widget-sidebar">
            <ul class="list-unstyled mt-2">
                <li class="active">
                    <a href="#">
                        <i class="fas fa-bars"></i><span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-pencil-alt"></i><span> jQueryScript.net </span>
                    </a>
                </li>
                <li>
                    <a href="#sidebar-link-mycomponents" data-toggle="collapse"
                       aria-expanded="true"
                       class="dropdown-toggle">
                        <i class="fas fa-shapes"></i><span> Posts </span>
                    </a>
                    <ul class="collapse list-unstyled show"
                        id="sidebar-link-mycomponents">
                        <li>
                            <a href="#">All Posts</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>


        <div style="padding-left: 0.5%;" class="page-main">

                <h1>jQuery rowfy Plugin Example</h1>
                <table class="table table-bordered table-striped table-hover table-responsive-lg rowfy">
                    <thead>
                    <tr>
                        <th>titre</th>
                        <th>description</th>
                        <th >contenu</th>
                        <th>date et heure</th>
                        <th>type de media</th>
                        <th>lien media</th>
                        <th>nom autheur</th>
                        <th>categorie</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php if(isset($articles)&& !empty($articles)): ?>
                        <?php foreach($articles as $key => $article): ?>
                    <tr>
                        <?php foreach($article as $data): ?>
                       <td> <?= $data ?></td>
                        <?php endforeach; ?>

                    </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <tr>
                        <form id="actualForm" class="Posts">
                            <td><input form="actualForm" class="form-control" name="title"  type="text"></td>
                            <td><input form="actualForm" class="form-control" name="sentence"  type="text"></td>
                            <td ><textarea form="actualForm" name="content" class="form-control text-area"  rows="1"></textarea></td>
                            <td><i class="fas fa-times fa-3x"></i></td>
                            <td><select style="box-sizing: border-box!important;display: block !important;"  id="media" name="media" class="form-control"  form="actualForm">
                                    <option value="0">image</option>
                                    <option value="1">videos</option>
                                </select></td>
                            <td><input form="actualForm" class="form-control" name="link"  type="text"></td>
                            <td><i class="fas fa-times fa-3x"></i></td>
                            <td><select name="category" style="box-sizing: border-box!important;display: block !important;" class="form-control" form="actualForm">
                                    <option value="divers">divers</option>
                                    <option value="science">science</option>
                                    <option value="informatique">informatique</option>
                                    <option value="magie">informatique</option>
                                </select></td>
                        </form>
                    </tr>
                    </tbody>
                </table>
        </div>
    </div>
    <footer class="page-footer bg-dark text-white p-3">
        <div>
            <span>My Footer © 2019</span>
        </div>
    </footer>
</div>
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
                <a id="YesCreation" type="button" class="btn  btn-outline-success">Yes</a>
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

<script src="../assets/js/jquery-3.4.1.min.js"></script><!--
<script type="application/javascript" src="../assets/js/jquery-3.3.1.slim.min.js"></script>-->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/rowfy.js"></script>


<script src="../assets/js/simplesidebar.js"></script>


<script>
    $(document).ready(function () {

        $("#my-sidebar-context").simpleSidebar();

        $('#SignIn').on('click',function(event){
            event.preventDefault();
            let data=$('form#SignInForm').serializeArray();
            console.dir(data);
            $.ajax({
                url:'signin',
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
        })
    });


</script>
</body>
</html>