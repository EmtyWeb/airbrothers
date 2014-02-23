<section id="news_create">
    <div class="news_create">
        <h1>Портфолио / Меню / <span>Добавление слайда</span></h1>
        <form method="post" id="create_form" action="<?php echo URL;?>account/slide_create" enctype="multipart/form-data">
            <div class="c_first"><label for="title1">Заголовок 1</label></div>
            <div><input type="text" id="title1" class="c_title" name="title1"
                   placeholder="Заголовок 1" value="" required/></div>
            <div class="c_first"><label for="title2">Заголовок 2</label></div>
            <div><input type="text" id="title2" class="c_title" name="title2"
                        placeholder="Заголовок 2" value="" required/></div>
            <div class="form_img">
                <label for="img">Загрузить иконку</label><input type="file" name="img" value="Обзор" required/>
            </div>
            <div class="c_first"><label for="description1">Заголовок основного текста</label></div>
            <div><input type="text" id="description1" class="c_title" name="desc1"
                        placeholder="Заголовок основного текста" value="" required/></div>
            <div class="c_first"><label for="description2">Основной текст</label></div>
            <div><textarea type="text" class="c_desc" name="desc2" id="description2"
                           placeholder="Основной текст" value="" required/></textarea></div>

            <div class="news_create_button"><input  type="submit" value="Добавить"/></div>
        </form>
    </div>
</section>
