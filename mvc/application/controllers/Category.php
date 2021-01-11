<?php
namespace Application\Controllers;


use Application\Model\Article;
use Application\Model\Category as CategoryModel;

class Category extends Controller{



    protected $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }

    public function index()
    {
        $categories= $this->categoryModel->all();
        return $this->view("panel.category.index",compact('categories'));
    }

    public function create()
    {

        return $this->view("panel.category.create");

    }

    public function store()
    {

        $this->categoryModel->insert($_POST);
        return $this->redirect('category');

    }

    public function show($id)
    {


    }

    public function edit($id)
    {
        $category= $this->categoryModel->find($id);
        return $this->view("panel.category.edit",compact('category'));
    }

    public function update($id)
    {
        $this->categoryModel->update($id,$_POST);
        return $this->redirect('category');
    }

    public function destroy($id)
    {
        $this->categoryModel->delete($id);
        return $this->back();
    }

}