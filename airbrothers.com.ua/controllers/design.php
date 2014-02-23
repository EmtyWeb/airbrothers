<?php
class Design extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->js = array('design/js/test.js');
    }
    public function index(){
        $this->view->title = 'Дизайн';
        $this->view->rowset = $this->model->designList();
        // $this->view->paginatorList = $this->model->pag();
        $this->view->render('design/index');
    }
	public function view(){
        //$this->view->rowset = $this->model->designList();
        // $this->view->paginatorList = $this->model->pag();
        //$this->view->render('design/index');
		$this->model->designView();
    }
}