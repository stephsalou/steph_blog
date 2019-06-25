<?php
namespace App\Controller;

class categorycontroller{
    private $model;
    public function render(){
        $render=new \GuzzleHttp\Client();
        $res=$render->get('localhost:1998/Ankh_blog/views/category.php');
        $content=$res->getBody()->getContents();
        echo $content;
    }
    public function showCategory($id){
        $this->model=new \Model\categorymodel();
        $articles=$this->model->getCategory($id);
        return $articles;

    }
    public function showAllCategory(){
        $this->model=new \Model\categorymodel();
        return $this->model->getAllCategory();
    }

}
