<?php
require "../_config/config.php";
require '../vendor/autoload.php';
include '../_functions/functions.php';
$Path = '../' . IMAGE_PATH;
$id = $_GET['id'];
$categorycontroller = new \App\Controller\categorycontroller();
$postscontroller = new App\Controller\postcontroller();
$posts = $postscontroller->showArticle($id);
$category = $categorycontroller->showCategory($posts->category_id);
$otherPost = $postscontroller->articleByCategory($category->id, true, $posts->art_id);
$result = $postscontroller->getPostComments($posts->art_id);
extract($result, EXTR_OVERWRITE);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../views/include/head2.php"; ?>
    <title>Material Design Bootstrap </title>

</head>

<body class="grey lighten-3">

<?php include "../views/include/header.php" ?>
<!--Main layout-->
<main class="mt-5 pt-5">
    <div class="container">

        <!--Section: Post-->
        <section class="mt-4">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-8 mb-4">

                    <!--Featured Image-->
                    <div class="card mb-4 wow fadeIn">

                        <img src="<?= $Path . $category->image ?>" class="img-fluid" alt="">

                    </div>
                    <!--/.Featured Image-->

                    <!--Card-->
                    <div class="card mb-4 wow fadeIn">

                        <!--Card content-->

                        <div class="card-body text-center">

                            <p class="h5 my-4"><strong><?= $category->name ?></strong></p>

                            <p><?= $category->sentence; ?></p>

                            <!-- Logo carousel -->
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel"
                                 data-interval="1800">
                                <div class="carousel-inner">
                                    <!-- First slide -->
                                    <div class="carousel-item">
                                        <!--Grid row-->
                                        <div class="row">

                                            <?php for ($i = 0; $i < 2; $i++): ?>
                                                <!--First column-->
                                                <div
                                                    class="col-lg-6 col-md-12 d-flex align-items-center justify-content-center">
                                                    <a href="<?= $otherPost[$i]->id ?>">
                                                        <img src="<?= $Path . $otherPost[$i]->link ?>"
                                                             class="img-fluid px-4" alt=""
                                                             style="max-height: 100px">

                                                        <p class="h5 my-4"><?= $otherPost[$i]->title ?></p>
                                                    </a>
                                                </div>
                                                <!--/First column-->
                                            <?php endfor; ?>

                                        </div>
                                        <!--/Grid row-->
                                    </div>
                                    <!-- First slide -->

                                    <!-- Second slide -->
                                    <div class="carousel-item active carousel-item-left">
                                        <!--Grid row-->
                                        <div class="row">
                                            <?php for ($i = 0; $i < 2; $i++): ?>
                                                <!--First column-->
                                                <div
                                                    class="col-lg-6 col-md-12 d-flex align-items-center justify-content-center">
                                                    <a href="<?= $otherPost[$i + 2]->id ?>">
                                                        <img src="<?= $Path . $otherPost[$i + 2]->link ?>"
                                                             class="img-fluid px-4" alt=""
                                                             style="max-height: 100px;">

                                                        <p class="h5 my-4"><?= $otherPost[$i + 2]->title ?></p>
                                                    </a>
                                                </div>
                                                <!--/First column-->
                                            <?php endfor; ?>
                                        </div>
                                        <!--/Grid row-->
                                    </div>
                                    <!-- Second slide -->

                                    <!-- Third slide -->
                                    <div class="carousel-item carousel-item-next carousel-item-left">
                                        <!--Grid row-->
                                        <div class="row">

                                            <?php for ($i = sizeof($otherPost); $i > sizeof($otherPost) - 2; $i--): ?>
                                                <!--First column-->
                                                <div
                                                    class="col-lg-6 col-md-12 d-flex align-items-center justify-content-center">
                                                    <a href="<?= $otherPost[$i - 1]->id ?>">
                                                        <img src="<?= $Path . $otherPost[$i - 1]->link ?>"
                                                             class="img-fluid px-4" alt=""
                                                             style="max-height: 100px">

                                                        <p class="h5 my-4"><?= $otherPost[$i - 1]->title ?></p>
                                                    </a>

                                                </div>
                                                <!--/First column-->
                                            <?php endfor; ?>
                                        </div>
                                        <!--/Grid row-->
                                    </div>
                                    <!-- Third slide -->
                                </div>
                            </div>
                            <!-- Logo carousel -->

                            <hr>

                            <a class="btn btn-outline-primary"
                               href="https://mdbootstrap.com/docs/jquery/getting-started/download/"
                               role="button" target="_blank">MDB free download<i class="fas fa-download ml-2"></i></a>
                        </div>
                    </div>


                    <!--/.Card-->

                    <!--Card-->
                    <div class="card mb-4 wow fadeIn">
                        <img class="card-img-top img-fluid" src="<?= $Path . $posts->link; ?>" alt="post img">
                        <!--Card content-->
                        <div class="card-body">

                            <p class="h5 my-4"><?= $posts->title; ?></p>


                            <blockquote class="blockquote">
                                <p class="mb-0"><?= $posts->sentence; ?></p>
                            </blockquote>


                            <p><?= $posts->content; ?></p>

                            <p class="mt-4 mb-0" style="color: #797E79;font-size: 2vh;">Depuis
                                le <?= $posts->date ?></p>
                        </div>

                    </div>
                    <!--/.Card-->

                    <!--Card-->
                    <div class="card mb-4 wow fadeIn">

                        <div class="card-header font-weight-bold">
                            <span>About author</span>
                <span class="pull-right">
                  <a href="<?= $posts->facebook; ?>">
                      <i class="fab fa-facebook-f mr-2"></i>
                  </a>
                  <a href="<?= $posts->twitter; ?>">
                      <i class="fab fa-twitter mr-2"></i>
                  </a>
                </span>
                        </div>

                        <!--Card content-->
                        <div class="card-body">

                            <div class="media d-block d-md-flex mt-3">
                                <img class="d-flex mb-3 mx-auto z-depth-1" src="<?= $Path . $posts->image; ?>"
                                     alt="Generic placeholder image" style="width: 100px;">

                                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                    <h5 class="mt-0 font-weight-bold"><?= $posts->nom_auth; ?>
                                    </h5><?= $posts->about; ?>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!--/.Card-->

                    <!--Comments-->
                    <div class="card card-comments mb-3 wow fadeIn">
                        <div class="card-header font-weight-bold"><?= sizeof($postComment); ?> comments</div>
                        <div class="card-body">
                            <?php foreach ($postComment as $comment): ?>
                                <div class="media d-block d-md-flex mt-4">
                                <img class="d-flex mb-3 mx-auto " src="<?= $Path.$comment->image ?>"
                                     alt="Generic placeholder image">
                                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                <h5 class="mt-0 font-weight-bold"><?= $comment->nom; ?>
                                    <a href="" class="pull-right">
                                        <i class="fas fa-reply"></i>
                                    </a>
                                </h5>
                                    <?= $comment->content; ?>
                                <?php if (isset($comComment) && !empty($comComment)):
                                    foreach($comComment as $com):
                                    ?>

                                    <div class="media d-block d-md-flex mt-3">
                                        <img class="d-flex mb-3 mx-auto " src="<?= $Path.$com->image ?>"
                                             alt="Generic placeholder image">

                                        <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                            <h5 class="mt-0 font-weight-bold"><?= $com->nom ?>
                                            </h5>
                                            <?= $com->content ?>
                                        </div>
                                    </div>
                                    <?php
                                    endforeach;
                                    endif; ?>

                                    </div>
                                    </div>
                                <?php endforeach; ?>

                        </div>
                    </div>
                    <!--/.Comments-->

                    <!--Reply-->
                    <div class="card mb-3 wow fadeIn">
                        <div class="card-header font-weight-bold">Leave a reply</div>
                        <div class="card-body">

                            <!-- Default form reply -->
                            <form>

                                <!-- Comment -->
                                <div class="form-group">
                                    <label for="replyFormComment">Your comment</label>
                                    <textarea class="form-control" id="replyFormComment" rows="5"></textarea>
                                </div>

                                <!-- Name -->
                                <label for="replyFormName">Your name</label>
                                <input type="email" id="replyFormName" class="form-control">

                                <br>

                                <!-- Email -->
                                <label for="replyFormEmail">Your e-mail</label>
                                <input type="email" id="replyFormEmail" class="form-control">


                                <div class="text-center mt-4">
                                    <button class="btn btn-info btn-md" type="submit">Post <i
                                            class="fab fa-envelope-o"></i></button>
                                </div>
                            </form>
                            <!-- Default form reply -->


                        </div>
                    </div>
                    <!--/.Reply-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <!--Card: Jumbotron-->
                    <div class="card blue-gradient mb-4 wow fadeIn">

                        <!-- Content -->
                        <div class="card-body text-white text-center">

                            <h4 class="mb-4">
                                <strong>Learn Bootstrap 4 with MDB</strong>
                            </h4>

                            <p>
                                <strong>Best & free guide of responsive web design</strong>
                            </p>

                            <p class="mb-4">
                                <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000
                                    users. Video
                                    and written versions available. Create your own, stunning website.</strong>
                            </p>
                            <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/"
                               class="btn btn-outline-white btn-md">Start
                                free tutorial
                                <i class="fas fa-graduation-cap ml-2"></i>
                            </a>

                        </div>
                        <!-- Content -->
                    </div>
                    <!--Card: Jumbotron-->

                    <!--Card : Dynamic content wrapper-->
                    <div class="card mb-4 text-center wow fadeIn">

                        <div class="card-header">Do you want to get informed about new articles?</div>

                        <!--Card content-->
                        <div class="card-body">

                            <!-- Default form login -->
                            <form>

                                <!-- Default input email -->
                                <label for="defaultFormEmailEx" class="grey-text">Your email</label>
                                <input type="email" id="defaultFormLoginEmailEx" class="form-control" title="">

                                <br>

                                <!-- Default input password -->
                                <label for="defaultFormNameEx" class="grey-text">Your name</label>
                                <input type="text" id="defaultFormNameEx" class="form-control">

                                <div class="text-center mt-4">
                                    <button class="btn btn-info btn-md" type="button">Sign up <i
                                            class="fas fa-envelope ml-2"> </i></button>
                                </div>
                            </form>
                            <!-- Default form login -->

                        </div>

                    </div>
                    <!--/.Card : Dynamic content wrapper-->

                    <!--Card-->
                    <div class="card mb-4 wow fadeIn">

                        <div class="card-header">Related articles</div>

                        <!--Card content-->
                        <div class="card-body">

                            <ul class="list-unstyled">
                                <li class="media">
                                    <img class="d-flex mr-3 img-fluid" style="height: 100px"
                                         src="assets/img/horror-5.jpg" alt="Generic placeholder image">

                                    <div class="media-body">
                                        <a href="">
                                            <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                                        </a>
                                        Cras sit amet nibh libero, in gravida nulla (...)
                                    </div>
                                </li>
                                <li class="media my-4">
                                    <img class="d-flex mr-3 img-fluid" style="height: 100px" src="assets/img/nat-3.jpg"
                                         alt="An image">

                                    <div class="media-body">
                                        <a href="">
                                            <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                                        </a>
                                        Cras sit amet nibh libero, in gravida nulla (...)
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="d-flex mr-3 img-fluid" src="assets/img/nature-1.jpg"
                                         style="height: 100px" alt="Generic placeholder image">

                                    <div class="media-body">
                                        <a href="">
                                            <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                                        </a>
                                        Cras sit amet nibh libero, in gravida nulla (...)
                                    </div>
                                </li>
                            </ul>

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Post-->

    </div>
</main>
<!--Main layout-->

<?php include "../views/include/footer2.php" ?>
<!--OWN SCRIPT-->
<script type="text/javascript" src="../assets/js/post.js"></script>
<!--OWN SCRIPT-->
</body>

</html>
