<?php $arr=explode('/',$_SERVER['REQUEST_URI']); $arr=implode('/',array_splice($arr,0,2)); ?>
<!doctype html>
<html lang="fr">
<head>
    <?php include_once "views/include/head.php"; ?>
    <link rel="stylesheet" href="<?= $arr ?>/assets/styles/css/bootstrap.min.css">
    <title>404 error</title>
</head>
<body>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-3">404</h1>

        <p class="lead">PAGE RECHERCHER NON TROUVER</p>
        <hr class="my-2">
        <p>erreur 404 la page demander n'existe pas</p>

        <p class="lead">
            <a class="btn btn-primary btn-lg"  id="main" role="button">retourner a la page d'acceuil</a>
        </p>
    </div>
</div>

<script type="application/javascript" src="<?= $arr ?>/assets/js/jquery-3.3.1.min.js">
</script>
<script>
$(document).ready(function(){
    $('#main').bind({
        click:function(e){
            e.preventDefault();
            $(location).attr('href','home');
    }
    })
});
</script>
</body>
</html>

