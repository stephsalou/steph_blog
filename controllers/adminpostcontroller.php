<?php
namespace App\Controller;

class adminpostcontroller{

    private $model;
        public function render(){
            $render=new \GuzzleHttp\Client();
            $res=$render->get('localhost:1998/Ankh_blog/views/admin/addpost.php');
            $content=$res->getBody()->getContents();
            echo $content;
        }

    public static function getAllarticle()
    {
        $request=new \Model\adminpostmodel();
        return $articles=$request->getAllArticles();

    }

    public function save()
    {
        $data=checkArray($_POST);
        $this->setModel();
        $this->model=getModel();
        return $this->model->savePost($data);

    }

    public function signin(){
        $userData=checkArray($_POST);
        $this->setModel();
        $this->model=getModel();
        $lastUserId=$this->model->connexion($userData);
        echo json_encode($lastUserId);
    }
    public function getModel()
    {
        return $this->model;
    }

    public function setModel()
    {
        $this->model = new \Model\adminpostmodel();
    }

}

