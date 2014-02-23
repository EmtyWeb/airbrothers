<section id="news_view">
    <div class="news_view">
    <h1>Портфолио / Меню / <span>Новости</span></h1>
    <div class="news_create_button"><a href="<?php echo URL;?>account/create_news">Добавить</a></div>
    <?php foreach($this->rowset as $news){?>
        <div class="news_info">
            <div><?php echo $news['news_title']?></div>
            <div><a href="<?php echo URL;?>account/edit_news/<?php echo $news['news_id'];?>"></a></div>
            <div><a href="<?php echo URL;?>account/delete_news/<?php echo $news['news_id'];?>"></a></div>
        </div>
    <?php } ?>
    </div>
</section>
