<?php
namespace application\controllers;
class Home{
    public function index()
    {
        echo "index of home";
    }
    public function test($id)
    {
        echo $id;
    }
}
?>