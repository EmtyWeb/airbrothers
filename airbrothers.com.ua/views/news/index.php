<?php header("Content-type: text/html; charset=utf-8"); ?>
<section id="news">
    <h1><a href="<?php echo URL;?>">Портфолио</a> / <span>Новости</span></h1>
    <?php foreach($this->rowset as $news){?>

        <article class="air_news">
            <header>
                <h2><?php echo $news['news_title']?></h2>
            </header>
            <p><?php echo $news['news_desc']?></p>
            <div><span><?php echo $news['news_date']?></span><p><span>автор  </span><?php echo $news['news_author']?></p></div>
        </article>
    <?php } ?>
</section>
