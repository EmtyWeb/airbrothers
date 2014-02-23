<section id="news_view">
    <div class="news_view">
    <h1>Портфолио / Меню / <span>Сайты</span></h1>
    <div class="news_create_button"><a href="<?php echo URL;?>account/create_site">Добавить</a></div>
    <?php foreach($this->rowset as $site){?>
        <div class="news_info">
            <div><?php echo $site['site_title']?></div>
            <div><a href="<?php echo URL;?>account/edit_site/<?php echo $site['site_id'];?>"></a></div>
            <div><a href="<?php echo URL;?>account/delete_site/<?php echo $site['site_id'];?>"></a></div>
        </div>
    <?php } ?>
    </div>
</section>
