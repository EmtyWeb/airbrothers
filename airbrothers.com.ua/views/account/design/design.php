<section id="news_view">
    <div class="news_view">
    <h1>Портфолио / Меню / <span>Дизайн</span></h1>
    <div class="news_create_button"><a href="<?php echo URL;?>account/create_design">Добавить</a></div>
    <?php foreach($this->rowset as $design){?>
        <div class="news_info">
            <div><?php echo $design['design_title']?></div>
            <div><a href="<?php echo URL;?>account/edit_design/<?php echo $design['design_id'];?>"></a></div>
            <div><a href="<?php echo URL;?>account/delete_design/<?php echo $design['design_id'];?>"></a></div>
        </div>
    <?php } ?>
    </div>
</section>
