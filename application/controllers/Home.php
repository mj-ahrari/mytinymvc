<?php
namespace application\controllers;
use application\models;
use application\models\Article;
use application\models\Category;

class Home extends Controller{
    public function index()
    {
        $categoryObj = new Category();
        $articleObj = new Article();
        $articles = $articleObj->all();
        $categories = $categoryObj->all();
        $this->view("template.index",compact('articles','categories'));
    }
    public function show($id)
    {
        $categoryObj = new Category();
        $articleObj = new Article();
        $article = $articleObj->getArticleDetails($id);
        $categories = $categoryObj->all();
        $this->view("template.detail",compact("article","categories"));
    }
    public function category($id)
    {
        $articleObj = new Article();
        $articles = $articleObj->getAllArticlesFromCategory($id);
        $categoryObj = new Category();
        $category = $categoryObj->getCategoryDetails($id);
        $categories = $categoryObj->all();
        $this->view("template.category",compact("articles","category","categories"));
    }
}
?>