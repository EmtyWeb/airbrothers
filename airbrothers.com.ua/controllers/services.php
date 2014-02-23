<?php
class Services extends Controller{
    function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->view->title = 'Услуги';
        // $this->view->newsList = $this->model->newsList();
        // $this->view->paginatorList = $this->model->pag();
        $this->view->render('services/index');

    }
}