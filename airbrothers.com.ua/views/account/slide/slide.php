<section id="news_view">
    <div class="news_view">
    <h1>Портфолио / Меню / <span>Слайды</span></h1>
    <div class="news_create_button"><a href="<?php echo URL;?>account/create_slide">Добавить</a></div>
    <?php foreach($this->rowset as $slide){?>
        <div class="news_info">
            <div><?php echo $slide['slide_title1']?></div>
            <div><a href="<?php echo URL;?>account/edit_slide/<?php echo $slide['slide_id'];?>"></a></div>
            <div><a href="<?php echo URL;?>account/delete_slide/<?php echo $slide['slide_id'];?>"></a></div>
        </div>
    <?php } ?>
    </div>
</section>
