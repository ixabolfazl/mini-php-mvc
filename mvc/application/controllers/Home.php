<?php

namespace Application\Controllers;

use Application\Model\Article;
use Application\Model\Category;

class Home extends Controller{

    protected $articleModel;
    protected $categoryModel;

    public function __construct()
    {
        $this->articleModel = new Article();
        $this->categoryModel = new Category();
    }

    public function index()
    {

        $categories= $this->categoryModel->all();
        $articles= $this->articleModel->all();
        return $this->view("app.index",compact('categories','articles'));

    }

    public function category($id){


        $categories= $this->categoryModel->all();
        $this->categoryModel = new Category();
        $articles= $this->categoryModel->articles($id);
        $this->categoryModel = new Category();
        $category= $this->categoryModel->find($id);
        return $this->view("app.category",compact('categories','articles','category'));
    }

    public function show($id){

        $categories= $this->categoryModel->all();
        $article= $this->articleModel->find($id);
        return $this->view("app.detail",compact('categories','article'));

    }
}

