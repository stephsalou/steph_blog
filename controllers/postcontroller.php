<?php
 namespace App\Controller;


 class postcontroller{
     private $model;

     public function __construct()
     {
         $this->model=new \Model\postmodel();
     }
     public function showArticle($id){
         return $this->model->getArticle($id);
     }

     public function listing($id)
     {
         $render=new \GuzzleHttp\Client();
         $res=$render->get('localhost:1998/Ankh_blog/views/categoryList.php?id='.$id);
         $content=$res->getBody()->getContents();
         echo $content;
     }

     public function getPost($id)
     {
         $render=new \GuzzleHttp\Client();
         $res=$render->get('localhost:1998/Ankh_blog/views/post.php?id='.$id);
         $content=$res->getBody()->getContents();
         echo $content;
     }
     public function showAllArticle(){
         return $this->model->getAllArticle();
     }

     public function articleByCategory($id,$without=false,$pastId=0)
     {

         return $this->model->getArticleByCategory($id,$without,$pastId);
     }

     public function getPostComments($id)
     {
        $data['postComment']=$this->model->getPostComment($id);
         $arr=[];
         foreach($data['postComment'] as $posts){
             array_push($arr,$posts->id);
         }
         $data['comComment']=$this->model->getCommentComment($arr);
         return $data;
     }
     public function render(){
         $render=new \GuzzleHttp\Client();
         $res=$render->get('localhost:1998/Ankh_blog/views/postsList.php');
         $content=$res->getBody()->getContents();
         echo $content;
     }
 }
