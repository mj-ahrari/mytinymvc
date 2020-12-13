<?php
namespace application\controllers;
use application\models\Article as articleModel;
use application\models\Category as catogoryModel;

class Category extends Controller{
    public function index()
    {
        $categoryObj = new catogoryModel();
        $categories = $categoryObj->all();
        return $this->view("panel.category.index",compact('categories'));
    }
    public function show($id)
    {
        # code...
    }
    public function create()
    {
        return $this->view("panel.category.create");
    }
    public function store()
    {
        $categoryObj = new catogoryModel();
        $name = $_POST['name'];
        $categoryObj->insert($name);
        return $this->redirect("category/index");
    }
    public function edit($id)
    {
        $categoryObj = new catogoryModel();
        $category = $categoryObj->getCategoryDetails($id);
        return $this->view("panel.category.edit",compact('category'));
    }
    public function update($id)
    {
        $categoryObj = new catogoryModel();
        $name = $_POST['name'];
        $categoryObj->update($id,$name);
        return $this->redirect("category/index");
    }
    public function delete($id)
    {
        $categoryObj = new catogoryModel();
        $categoryObj->delete($id);
        return $this->redirect("category/index");
    }
}
?>