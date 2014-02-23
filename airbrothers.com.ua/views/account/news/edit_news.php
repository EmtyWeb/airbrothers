<section id="news_create">
    <div class="news_create">
        <h1>Портфолио / Меню / <span>Редактировать Новость</span></h1>
        <?php foreach($this->rowset as $edit){ ?>
        <form method="post" id="create_form" action="<?php echo URL;?>account/update_news/<?php echo $edit['news_id'];?>" enctype="multipart/form-data">
            <div class="c_first"><label for="title">Заголовок</label></div>
            <div><input type="text" class="c_title" name="title"
                        value="<?php echo $edit['news_title'];?>" required/></div>
            <div class="c_first"><label for="description">Основной текст</label></div>
            <div><textarea type="text" class="c_desc" name="description"
                           required/><?php echo $edit['news_desc'];?></textarea></div>
            <div class="c_first"><label for="author">Имя редактора</label></div>
            <div><input type="text" class="c_author" name="author"
                        value="<?php echo $edit['news_author'];?>" required/></div>
            <div class="news_create_button"><input  type="submit" value="Готово"/></div>
        </form>
        <?php  } ?>
    </div>
</section>
