<?php

//-----------------------//
//     ERRORS DISPLAY   //
//----------------------//

//!\\ A enlever lors du deploiement
error_reporting(E_ALL);
ini_set('display_errors', true);


//------------------------//
//      SESSIONS          //
//-----------------------//


ini_set('session.cookie_lifetime', true);
session_start();

//-----------------------//
//      CONSTANTS       //
//----------------------//

//paths
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9)); //pour fonction d'inclusion php
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9)); //pour images fichiers etc (html)
define("USER_FILE_PATH",'/assets/img/user_img/');
define("IMAGE_PATH","assets/img/");
//WEBSITE INFORMATION
define('WEBSITE_TITLE', 'ANKH BLOG');
define('WEBSITE_NAME', 'ANKH AFRIQUE');
define('WEBSITE_URL', 'https://Ankh_blog.com');
define('WEBSITE_DESCRIPTION', '');
define('WEBSITE_KEYWORDS', '');
define('WEBSITE_LANGUAGE', '');
define('WEBSITE_AUTHOR', '');
define('WEBSITE_AUTHOR_MAIL', '');

//Facebook Open Graph tags
define('WEBSITE_FACEBOOK_NAME', "");
define('WEBSITE_FACEBOOK_DESCRIPTION', "");
define('WEBSITE_FACEBOOK_URL', "");
define('WEBSITE_FACEBOOK_IMAGE', "");


//database information
define('DATABASE_HOST', "localhost");
define('DATABASE_NAME', "ankh_blog");
define('DATABASE_USER', "root");
define('DATABASE_PASSWORD', "");

//Language constant
define('DEFAULT_LANGUAGE', "fr");

//-------------------------------//
//  ERROR CONSTANT CONFIG       //
//-----------------------------//
define('NO_EMPTY_STRING_ACCEPT',0);
define('BAD_USING_OF_FROM',1);
define('INSERT_ERROR',2);
define('MUST_EMPTY_QUERY',3);
define('BAD_USING_OF_SUB_QUERY',4);
