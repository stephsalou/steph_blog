<?php

require '_config/config.php';
require 'vendor/autoload.php';
require 'vendor/fzaninotto/Faker/src/autoload.php';
require '_functions/functions.php';

/*$faker= \Faker\Factory::create();
$query=new \steph\db_query\db_query();
for($i=1;$i<51;$i++){
    $img=$faker->numerify('img-#.jpg');
    $sql="UPDATE `user` SET image='$img' WHERE id=$i+1";
    $result=$query->setSql($sql)->run();
}
debug($result);*/

//echo $faker->numerify('img-#.jpg');