<?php
namespace Application\Controllers;

use Application\Model\Article as ArticleModel;
use Application\Model\Category;

class Article extends Controller
{

    protected $articleModel;
    protected $categoryModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
        $this->categoryModel = new Category();
    }

    public function index()
    {
        $articles= $this->articleModel->all();
        return $this->view("panel.article.index",compact('articles'));
    }

    public function create()
    {
        $categories=$this->categoryModel->all();
        return $this->view("panel.article.create",compact('categories'));
    }

    public function store()
    {
        $this->articleModel->insert($_POST);
        return $this->redirect('article');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $categories=$this->categoryModel->all();
        $article= $this->articleModel->find($id);
        return $this->view("panel.article.edit",compact('categories','article'));
    }

    public function update($id)
    {
        $this->articleModel->update($id,$_POST);
        return $this->redirect('article');
    }

    public function destroy($id)
    {
        $this->articleModel->delete($id);
        return $this->back();
    }


    
}

