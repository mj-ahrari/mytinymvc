<?php
namespace application\controllers;

use application\models\Article as ModelsArticle;
use application\models\Category;

class Article extends Controller{
    public function index()
    {
        $articleModel = new ModelsArticle();
        $articles = $articleModel->all();
        $this->view("panel.article.index",compact("articles"));
    }
    public function create()
    {
        $categoryModel = new Category();
        $categories = $categoryModel->all();
        $this->view("panel.article.create",compact("categories"));
    }
    public function store()
    {
        if(!isset($_POST['insert'])){
            $this->redirect("article/create");
        }
        $categoryModel = new Category();
        $categories = $categoryModel->all();
        $title = $_POST['title'];
        $body = $_POST['body'];
        $cat_id = $_POST['cat_id'];
        $articleModel = new ModelsArticle();
        $result = $articleModel->insert($title,$body,$body,$cat_id);
        if($result){
            $Err=2020;
            $this->view("panel.article.create",compact("Err","categories"));
        }
    }
    public function delete($id)
    {
        $articleModel = new ModelsArticle();
        $articleModel->delete($id);
        $articles = $articleModel->all();
        $this->view("panel.article.index",compact("articles"));      
    }
}
?>