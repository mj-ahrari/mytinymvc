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
}
?>