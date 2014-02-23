<section id="news_create">
    <div class="news_create">
        <h1>Портфолио / Меню / <span>Редактировать сайт</span></h1>
        <?php foreach($this->rowset as $slide){ ?>
        <form method="post" id="create_form" action="<?php echo URL;?>account/update_slide/<?=$slide['slide_id']?>" enctype="multipart/form-data">
            <div class="c_first"><label for="title1">Заголовок 1</label></div>
            <div><input type="text" id="title1" class="c_title" name="title1"
                         value="<?=$slide['slide_title1']?>"/></div>
            <div class="c_first"><label for="title2">Заголовок 2</label></div>
            <div><input type="text" id="title2" class="c_title" name="title2"
                         value="<?=$slide['slide_title2']?>"></div>
            <div class="form_img">
                <label for="img">Загрузить иконку</label><input type="file" name="img"/>
            </div>
            <div class="c_first"><label for="description1">Заголовок основного текста</label></div>
            <div><input type="text" id="description1" class="c_title" name="desc1"
                         value="<?=$slide['slide_desc1']?>"/></div>
            <div class="c_first"><label for="description2">Основной текст</label></div>
            <div><textarea class="c_desc" name="desc2" id="description2"><?=$slide['slide_desc2']?></textarea></div>
            <div class="news_create_button"><input  type="submit" value="Добавить"/></div>
        </form>
        <?php  } ?>
    </div>
</section>
