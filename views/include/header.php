<?php
$path='';
$file=explode('/',$_SERVER['PHP_SELF']) ;
if(sizeof($file)>=4):
    $filename=$file[3];
else:
    $filename='index.php';
endif;
if($filename=='categoryList.php' || $filename=='post.php'):
    $path='../';
endif;
?>
<!--Main Navigation-->
<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand waves-effect" href="home" >
                <strong class="blue-text" style="color: #3721b9 !important; text-shadow: 1px 1px 3px #005983 !important;">AFRIKAN >< SCIENCE</strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item  <?= ($filename=='home.php')? 'link-act active':''; ?>">
                        <a class="nav-link waves-effect" href="<?=$path.'home'?>">Home
                            <?php if($filename=='home.php'):
                                echo "<span class=\"sr-only\">(current)</span>";
                            endif ?>
                        </a>
                    </li>
                    <li class="nav-item <?= ($filename=='category.php' || $filename=='categoryList.php')? 'link-act active':''; ?>">
                        <a class="nav-link waves-effect" href="<?=$path.'category'?>">Category</a>
                        <?php if($filename=='category.php' || $filename=='categoryList.php'):
                            echo "<span class=\"sr-only\">(current)</span>";
                        endif ?>
                    </li>
                    <li class="nav-item <?= ($filename=='post.php')? 'link-act active':''; ?>">
                        <a class="nav-link waves-effect" href="<?=$path.'post'?>">Posts</a>
                        <?php if($filename=='post.php'):
                            echo "<span class=\"sr-only\">(current)</span>";
                         endif ?>
                    </li>
                    <li class="nav-item <?= ($filename=='about.php')? 'link-act active':''; ?>">
                        <a class="nav-link waves-effect" href="<?=$path.'about'?>">About Afrikan</a>
                        <?php if($filename=='about.php'):
                            echo "<span class=\"sr-only\">(current)</span>";
                        endif ?>
                    </li>
                </ul>
                

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="https://www.facebook.com" class="nav-link waves-effect" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://twitter.com" class="nav-link waves-effect" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link border border-light rounded waves-effect"
                           target="_blank" style="color: #19f10b ;text-shadow: 1px 1px 1px #15AD0B ">
                            <i  class="fab fa-whatsapp mr-2"></i>AFRIKAN WHATSAPP
                        </a>
                    </li>
                    <li class="nav-item ml-5 mb-0">
                            <button data-target="#modalSignIn" data-toggle="modal" class="btn btn-outline-light-blue btn-md rounded waves-effect mt-0" type="submit">sign In <i class="fas fa-lock ml-2 "></i></button>

                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- Navbar -->
    <?php if(isset($carousel)&& !empty($carousel)){ echo $carousel; }?>
</header>
<!--Main Navigation-->