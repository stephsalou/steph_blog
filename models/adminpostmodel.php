<?php

namespace Model;
class adminpostmodel{

    private $query;

    public function __construct()
    {
        $this->query=new \steph\db_query\db_query();
    }

    public function getAllArticles()
    {$sql = "SELECT `articles`.`title`,`articles`.`sentence`,`articles`.`content`,`articles`.`date`,`articles`.`media`,`articles`.`link`,concat(`authors`.`firstname`,' ',`authors`.`lastname`) as nom ,`categories`.`name` as categoy FROM `articles`,`authors`,`categories` WHERE `articles`.`author_id`=`authors`.`id` and `articles`.`category_id`=`categories`.`id`";
        return $this->query->setSql($sql)->run_fetch(true)->getResult();

    }

    public function savePost(array $data)
    {
        return $this->query->insert('articles','title,sentence,content,media,link,category_id',[$data])->insert_run()->getResult();

    }
    public function  connexion(array $data){
        $cond=[
            ['email',$data['email']],
            ['and','password',$data['password']]
        ];
        $userData=$this->query->select()->from('authors')->where($cond)->run_fetch()->getResult();
        return $userData;
    }
}