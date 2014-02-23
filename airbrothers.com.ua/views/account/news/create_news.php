<section id="news_create">
    <div class="news_create">
        <h1>Портфолио / Меню / <span>Создать Новость</span></h1>
        <form method="post" id="create_form" action="<?php echo URL;?>account/news_create" enctype="multipart/form-data">
            <div class="c_first"><label for="title">Заголовок</label></div>
            <div><input type="text" class="c_title" name="title"
                   placeholder="Название новости" value="" required/></div>
            <div class="c_first"><label for="description">Основной текст</label></div>
            <div><textarea type="text" class="c_desc" name="description"
                   placeholder="Описание новости" value="" required/></textarea></div>
            <div class="c_first"><label for="author">Имя редактора</label></div>
            <div><input type="text" class="c_author" name="author"
                        placeholder="Ваше имя" value="" required/></div>
           <!--<div class="c_first"><label for="date">Дата</label></div>
            <div><input type="date" id="date" name="date"
                        placeholder="Описание новости" value="" required/></div>-->
            <div class="news_create_button"><input  type="submit" value="Добавить"/></div>
        </form>
    </div>
</section>
