<?php
class Order extends Controller{
    function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->view->render('order/index');
    }
    public function save(){
        $this->model->save();
    }
}