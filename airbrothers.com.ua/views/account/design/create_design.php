<section id="news_create">
    <div class="news_create">
        <h1>Портфолио / Меню / <span>Добавление дизайна</span></h1>
        <form method="post" id="create_form" action="<?php echo URL;?>account/design_create" enctype="multipart/form-data">
            <div class="c_first"><label for="title">Название</label></div>
            <div><input type="text" class="c_title" name="title"
                   placeholder="Название дизайна" value="" required/></div>
			<div class="c_first"><label for="link">Ссылка</label></div>
            <div><input type="text" class="c_title" name="link"
                   placeholder="Ccылка на сайт" value="" /></div>
            <div class="form_img">
                <label for="img">Загрузить иконку</label><input type="file" name="img" value="Обзор" required/>
            </div>
            <div class="form_img">
                <label for="picture">Загрузить изображение</label><input type="file" name="picture" required/>
            </div>
            <div class="news_create_button"><input  type="submit" value="Добавить"/></div>
        </form>
    </div>
</section>
