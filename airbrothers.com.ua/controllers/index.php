<?php
class Index extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->js = array('index/js/index.js');
    }
    public function index(){
        $this->view->rowset = $this->model->slide_list();
        //$this->view->paginatorList = $this->model->pag();
        $this->view->render('index/index');
    }
    public function item_famous(){
        $this->model->item_famous();
    }
    public function item_new(){
        $this->model->item_new();
    }
}