<?php
class Contact extends Controller{
    function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->view->title = 'Контакты';
        // $this->view->newsList = $this->model->newsList();
        // $this->view->paginatorList = $this->model->pag();
        $this->view->render('contact/index');

    }
}