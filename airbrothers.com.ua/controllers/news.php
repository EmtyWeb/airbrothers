<?php
class News extends Controller{
    function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->view->title = 'Новости';
        $this->view->rowset = $this->model->newsList();
       // $this->view->paginatorList = $this->model->pag();
        $this->view->render('news/index');

    }
}