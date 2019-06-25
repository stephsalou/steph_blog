<?php
namespace Model;

class registermodel{
    private $query;
    public function __construct(){
        $this->query=new \steph\db_query\db_query();
    }
    public function inscription(array $data){
        $lastId['user'] =$this->query->insert('user','nom,email,password',[$data])->insert_run()->getResult();
        $lastId['mail'] =$this->query->insert('news_letter','nom,email',[$data])->insert_run()->getResult();
        return $lastId;
    }
    public function  connexion(array $data){
         $cond=[
          ['email',$data['email']],
          ['and','password',$data['password']]
        ];
        $userData=$this->query->select()->from('user')->where($cond)->run_fetch()->getResult();
        return $userData;
    }
}

