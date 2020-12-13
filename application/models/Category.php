<?php
namespace application\models;

class Category extends Model{
    public function all()
    {
        $sql = "SELECT * FROM `categories`;";
        $result = $this->select($sql)->fetchAll();
        return $result;
    }
    public function getCategoryDetails($id)
    {
        $sql = "SELECT * FROM `categories` WHERE id=:id;";
        $params = array(":id"=>$id);
        $result = $this->select($sql,$params)->fetch();
        return $result;
    }
    public function insert($name)
    {
        $sql = "INSERT INTO `categories`( name ) VALUES ( :name );";
        $params = array(":name"=>$name);
        $this->execute($sql,$params);
    }
    public function update($id,$name)
    {
        $sql = "UPDATE `categories` SET name = :name WHERE id = :id;";
        $params = array(":name"=>$name,":id"=>$id);
        $this->execute($sql,$params);
    }
    public function delete($id)
    {
        $sql = "DELETE FROM `categories` WHERE id = :id;";
        $params = array(":id"=>$id);
        $this->execute($sql,$params);
    }
}
?>