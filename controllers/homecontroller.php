<?php
namespace App\Controller;



class homecontroller{

    public function render(){
        $render=new \GuzzleHttp\Client();
        $res=$render->get('localhost:1998/Ankh_blog/views/home.php');
        $content=$res->getBody()->getContents();
        echo $content;
    }
}