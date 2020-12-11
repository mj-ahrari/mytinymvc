<?php
namespace application\controllers;
class Home extends Controller{
    public function index()
    {
        $pName = "Pezho206t2";
        $this->view("template.home",compact("pName"));
    }
}
?>