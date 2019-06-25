<?php
namespace Model;
class postmodel
{
    private $query;

    public function __construct()
    {
        $this->query = new \steph\db_query\db_query();
    }

    public function getArticle($id)
    {
        $sql = "SELECT `articles`.*,`articles`.`id` as art_id,`authors`.*,concat(`authors`.`firstname`,' ',`authors`.`lastname`) as nom_auth FROM `articles`,`authors` WHERE `articles`.`id`=$id AND `articles`.`author_id`=`authors`.`id`";
        return $this->query->setSql($sql)->run_fetch()->getResult();

    }

    public function getAllArticle()
    {
        return $this->query->select()->from('articles')->run_fetch(true)->getResult();
    }

    public function getArticleByCategory($id, $bool, $past)
    {
        if ($bool == true && (isset($past) && $past != 0)) {
            $sql = "SELECT * FROM `articles` WHERE `category_id`=" . $id . " AND `id` <> " . $past;
            $data = $this->query->setSql($sql)->run_fetch(true)->getResult();
        } else {
            $sql = "SELECT * FROM `articles` WHERE `category_id`=" . $id;
            $data = $this->query->setSql($sql)->run_fetch(true)->getResult();
        }
        return $data;

    }

    public function getPostComment($id)
    {
        $sql = "SELECT `comment`.*,`user`.* FROM `comment`,`user` WHERE `comment`.`post_id`=$id AND `comment`.`type`='post' AND `comment`.`user_id`=`user`.`id`";
        return $this->query->setSql($sql)->run_fetch(true)->getResult();
    }

    public function getCommentComment(array $id)
    {
        if(is_array($id) && !empty($id)){
        $cond = [['`id`', $id[0]]];

        for ($i = 1; $i < sizeof($id); $i++) {
            $arr = ['OR', '`id`', $id[$i]];
            array_push($cond, $arr);

        }
        $sql = "SELECT `comment`.*,`comment`.`id` AS com_id,`user`.* ,`user`.`id` AS auth_id FROM `comment`,`user` WHERE `comment`.`user_id`=`user`.`id` AND `comment`.`type`='comment' ";
        return $this->query->setSql($sql)->open_sub_query('`post_id`', '`comment`')->select('`id` as fid')->from('`comment`')->where($cond)->close_sub_query()->run_fetch(true)->getResult();
        }else{
            return null;
        }
    }
}
