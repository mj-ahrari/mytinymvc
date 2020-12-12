<?php
namespace application\models;
use PDO;
use PDOException;
class Model{
    protected $connection;
    public function __construct()
    {
        if(!isset($this->connection)){
            $options = array(PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC, PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8");
            try{
                $this->connection = new PDO("mysql:host=".HOST.";dbname=".DBNANE.";", USERNAME, PASSWORD);
            }catch(PDOException $e){
                echo "Error in connect to database. reason : ".$e->getMessage();
            }
            
        }
    }
}
?>