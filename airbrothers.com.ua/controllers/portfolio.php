<?php
class Portfolio extends Controller{
    function __construct(){
        parent::__construct();
		 $this->view->js = array('portfolio/js/index.js');
    }
    public function index(){
        $this->view->title = 'Портфолио';
        $this->view->rowset = $this->model->portfolioList();
        // $this->view->paginatorList = $this->model->pag();
        $this->view->render('portfolio/index');
    }
		public function view(){
        //$this->view->rowset = $this->model->designList();
        // $this->view->paginatorList = $this->model->pag();
        //$this->view->render('design/index');
		$this->model->siteView();
    }
}