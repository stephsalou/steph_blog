<?php

// Inclusion des fichiers principaux
include_once '_config/config.php';
include_once '_functions/functions.php';
include_once 'vendor/autoload.php';

$url=($_GET['url']==='')? 'home' : checkInput($_GET['url']);
$router = new App\Router\Router($url);
    //---------------------//
    //      HOME ROOT     //
    //-------------------//
$router->get('/home','home.render');
    //---------------------//
    //      POST ROOT     //
    //-------------------//
$router->get('/post/:id','post.getPost')->with('id','[0-9]+');
$router->get('/post','post.render');
    //---------------------//
    //      CATEGORY ROOT     //
    //-------------------//
$router->get('/category/:id','post.listing')->with('id','[0-9]+');
$router->get('/category','category.render');
    //---------------------//
    //      REGISTER ROOT     //
    //-------------------//
$router->get('/register','register.render');
$router->post('/register/signin','register.signin');
    //---------------------//
    //      ABOUT ROOT     //
    //-------------------//
$router->get('/about','about.render');
    //---------------------//
    //      ADMIN ROOT     //
    //-------------------//
$router->post('/admin/post','adminpost.save');
$router->get('/admin/post','adminpost.render');
$router->get('/admin/signin','adminpost.signin');

$router->run(function(){
 include "views/404.php";
});
