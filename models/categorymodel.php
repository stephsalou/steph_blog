<?php
namespace Model;
class categorymodel{
    private $query;
    public function __construct()
    {
        $this->query=new \steph\db_query\db_query();
    }

    public function getCategory($id)
    {
     $cond=[
        ['id',$id]
     ];
       return $this->query->select()->from('categories')->where($cond)->run_fetch()->getResult();
        
    }
    public function getAllCategory()
    {
        return  $this->query->select()->from('categories')->run_fetch(true)->getResult();
    }
}