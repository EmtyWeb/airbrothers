<?php
class Account extends Controller{
    function __construct(){
        parent::__construct();
        Auth::check_login();
        $this->view->js = array('account/design/js/index.js');
    }
    public function index(){
        $this->view->title = 'Личный кабинет';
        $this->view->render('account/index');
    }
    //CRUD новости
    public function news(){
        $this->view->title = 'Новости';
        $this->view->rowset = $this->model->news_view();
        $this->view->render('account/news/news');
    }
    public function create_news(){
        $this->view->title = 'Добавление новости';
        //$this->view->cat = $this->model->viewCatItem();
        $this->view->render('account/news/create_news');
    }
    public function news_create(){
        $this->model->news_create();
        header ('Location:'.URL.'account/news');
    }
    public function edit_news($id){
        $this->view->title = 'Редактирование новости';
        $this->view->rowset = $this->model->news_edit($id);
        //$this->view->cat = $this->model->viewCatItem();
        $this->view->render('account/news/edit_news');
    }
    public function update_news($id){
        $this->model->update_news($id);
        header ('Location:'.URL.'account/news/news');
    }
    public function delete_news($id){
        $this->model->delete_news($id);
        header ('Location:'.URL.'account/news/news');
    }
    //CRUD дизайн
    public function design(){
        $this->view->title = 'Новости';
        $this->view->rowset = $this->model->design_view();
        $this->view->render('account/design/design');
    }
    public function create_design(){
        $this->view->title = 'Добавление новости';
        $this->view->render('account/design/create_design');
    }
    public function design_create(){
        $this->model->design_create();
        header ('Location:'.URL.'account/design');
    }
    public function edit_design($id){
        $this->view->title = 'Редактирование новости';
        $this->view->rowset = $this->model->design_edit($id);
        $this->view->render('account/design/edit_design');
    }
    public function update_design($id){
        $this->model->update_design($id);
        header ('Location:'.URL.'account/design/design');
    }
    public function delete_design($id){
        $this->model->delete_design($id);
        header ('Location:'.URL.'account/design/design');
    }
    //CRUD сайты
    public function site(){
        $this->view->title = 'Новости';
        $this->view->rowset = $this->model->site_view();
        $this->view->render('account/site/site');
    }
    public function create_site(){
        $this->view->title = 'Добавление новости';
        $this->view->render('account/site/create_site');
    }
    public function site_create(){
        $this->model->site_create();
        header ('Location:'.URL.'account/site');
    }
    public function edit_site($id){
        $this->view->title = 'Редактирование новости';
        $this->view->rowset = $this->model->site_edit($id);
        $this->view->render('account/site/edit_site');
    }
    public function update_site($id){
        $this->model->update_site($id);
        header ('Location:'.URL.'account/site/site');
    }
    public function delete_site($id){
        $this->model->delete_site($id);
        header ('Location:'.URL.'account/site/site');
    }

    //CRUD слайдер
    public function slide(){
        $this->view->title = 'Новости';
        $this->view->rowset = $this->model->slide_view();
        $this->view->render('account/slide/slide');
    }
    public function create_slide(){
        $this->view->title = 'Добавление новости';
        $this->view->render('account/slide/create_slide');
    }
    public function slide_create(){
        $this->model->slide_create();
        header ('Location:'.URL.'account/slide');
    }
    public function edit_slide($id){
        $this->view->title = 'Редактирование новости';
        $this->view->rowset = $this->model->slide_edit($id);
        $this->view->render('account/slide/edit_slide');
    }
    public function update_slide($id){
        $this->model->update_slide($id);
        header ('Location:'.URL.'account/slide/slide');
    }
    public function delete_slide($id){
        $this->model->delete_slide($id);
        header ('Location:'.URL.'account/slide/slide');
    }




















    public function profile(){
        $this->view->title = 'Личный данные';
        $this->view->infoProfileList = $this->model->infoProfileList();
        $this->view->render('account/profile');
    }
    public function profileEdit(){
        $this->model->profileEditSafety();
        header ('Location:'.URL.'account/index');

    }
    public function safety(){
        $this->view->title = 'Пароль и безопасномть';
        $this->model->passSafety();
        $this->view->render('account/safety');
    }
    public function view(){
    $this->view->title = 'Все работы';
    $this->view->myListItem = $this->model->listItem();
    $this->view->render('account/viewItem');
}
    public function fair(){
        $this->view->title = 'Моя ярмарка';
        $this->view->myListItem = $this->model->listFairItem();
        $this->view->render('account/fairItem');
    }
    public function create(){
        $this->view->title = 'Добавление работы';
        $this->view->cat = $this->model->viewCatItem();
        $this->view->render('account/createItem');
    }
    public function createItem(){
        $this->model->createItem();
        header ('Location:'.URL.'account/view');
    }
    public function create_f(){
        $this->view->title = 'Добавление работы';
        $this->view->cat = $this->model->viewCatFair();
        $this->view->render('account/createFair');
    }
    public function create_fair(){
        $this->model->createFair();
        header ('Location:'.URL.'account/fair');
    }
    public function edit($id){
        $this->view->title = 'Редактирование работы';
        $this->view->thisItem = $this->model->editItem($id);
        $this->view->cat = $this->model->viewCatItem();
        $this->view->render('account/addItem');
    }
    public function edit_f($id){
        $this->view->title = 'Редактирование работы';
        $this->view->thisItem = $this->model->editFairItem($id);
        $this->view->cat = $this->model->viewCatFair();
        $this->view->render('account/editFair');
    }
    public function update_f($id){
        $this->model->updateFairItem($id);
        header ('Location:'.URL.'account/fair');
    }
    public function delete_f($id){
        $this->model->deleteFairItem($id);
        header ('Location:'.URL.'account/fair');
    }
    public function updateItem($id){
        $this->model->updateItem($id);
        header ('Location:'.URL.'account/view');
    }

    public function delete($id){
        $this->model->deleteItem($id);
        header ('Location:'.URL.'account/view');
    }
    public function addUser($id){
            $this->model->addUserLook($id);
            header ('Location:'.URL.'index');
    }
}