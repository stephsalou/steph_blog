<?php

namespace App\Controller;

class aboutcontroller{
    public function render(){
        $render=new \GuzzleHttp\Client();
        $res=$render->get('localhost:1998/Ankh_blog/views/about.php');
        $content=$res->getBody()->getContents();
        echo $content;
    }
}