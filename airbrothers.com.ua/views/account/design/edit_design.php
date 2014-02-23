<section id="news_create">
    <div class="news_create">
        <h1>Портфолио / Меню / <span>Добавление дизайна</span></h1>
        <?php foreach($this->rowset as $edit){ ?>
        <form method="post" id="create_form" action="<?php echo URL;?>account/update_design/<?=$edit['design_id']?>" enctype="multipart/form-data">
            <div class="c_first"><label for="title">Название</label></div>
            <div><input type="text" class="c_title" name="title"
                        placeholder="Название дизайна" value="<?=$edit['design_title'];?>" /></div>
			<div class="c_first"><label for="link">Ссылка</label></div>
            <div><input type="text" class="c_title" name="link"
                   placeholder="Ccылка на сайт" value="<?=$edit['design_link'];?>" /></div>
            <div class="form_img">
                <label for="img">Загрузить иконку</label><input type="file" name="img" value="Обзор" />
            </div>
            <div class="form_img">
                <label for="picture">Загрузить контент</label><input type="file" name="picture" value="" />
            </div>
            <div class="news_create_button"><input  type="submit" value="Добавить"/></div>
        </form>
        <?php  } ?>
    </div>
</section>
