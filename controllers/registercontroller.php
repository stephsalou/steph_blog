<?php
namespace App\Controller;

class registercontroller{
    public function render(){
        $render=new \GuzzleHttp\Client();
        $res=$render->get('localhost:1998/Ankh_blog/views/register.php');
        $content=$res->getBody()->getContents();
        echo $content;
    }
    public function signup(){
       $userData=checkArray($_POST);
        $register=new \Model\registermodel();
        $lastUserId=$register->inscription($userData);
        echo json_encode($lastUserId);
    }
    public function signin(){
        $userData=checkArray($_POST);
        $register=new \Model\registermodel();
        $lastUserId=$register->connexion($userData);
        echo json_encode($lastUserId);
    }
}

