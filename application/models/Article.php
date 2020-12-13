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
    public function insert($title,$summary,$body,$cat_id)
    {
        $sql = "INSERT INTO `articles`(title, summary, body, cat_id, created_at)VALUES(:title, :summary, :body, :cat_id, ".time().")";
        $params = array(":title"=>$title,":summary"=>$summary,":body"=>$body,":cat_id"=>$cat_id);
        $this->execute($sql,$params);
        return true;
    }
    public function delete($id)
    {
        $sql = "DELETE FROM `articles` WHERE id = :id";
        $params = array(":id"=>$id);
        $this->execute($sql,$params);
        return true;
    }
    public function update($id,$title,$summary,$body,$cat_id)
    {
        $sql = "UPDATE `articles` SET title = :title, summary = :summary, body = :body, cat_id = :cat_id WHERE id = :id;";
        $params = array(":title"=>$title,":summary"=>$summary,":body"=>$body, ":cat_id"=>$cat_id,":id"=>$id);
        $this->execute($sql,$params);
    }
}
?>