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
                die;
            }
            
        }
    }
    public function __destruct()
    {
        $this->closeConnection();
    }
    protected function select($sql,$params = NULL)
    {
        if($params === NULL){
            return $this->connection->query($sql);
        }else{
            $stmt = $this->connection->prepare($sql);
            foreach($params as $key=>$val){
                $stmt->bindValue($key,$val);
            }
            $stmt->execute();
            return $stmt;
        }
    }
    protected function execute($sql,$params = NULL)
    {
        if($params === NULL){
            $this->connection->exec($sql);
        }else{
            $stmt = $this->connection->prepare($sql);
            foreach($params as $key=>$val){
                $stmt->bindValue($key,$val);
            }
            $stmt->execute();
        }
        return true;
    }
    private function closeConnection(){
        $this->connection = NULL;
    }
}
?>