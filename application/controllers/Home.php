<?php
namespace application\controllers;
class Home extends Controller{
    public function index()
    {
        $this->view("template.index");
    }
}
?>