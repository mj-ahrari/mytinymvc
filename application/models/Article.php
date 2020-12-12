<?php
namespace application\models;

class Article extends Model{
    public function all()
    {
        $sql = "SELECT * FROM `articles`;";
        $result = $this->select($sql)->fetchAll();
        return $result;
    }
    public function getArticleDetails($id)
    {
        $sql = "SELECT * FROM `articles` WHERE id=:id;";
        $params = array(":id"=>$id);
        $result = $this->select($sql,$params)->fetch();
        return $result;
    }
    public function getAllArticlesFromCategory($id)
    {
        $sql = "SELECT * FROM `articles` WHERE cat_id=:cat_id;";
        $params = array(":cat_id"=>$id);
        $result = $this->select($sql,$params)->fetchAll();
        return $result;
    }
}
?>