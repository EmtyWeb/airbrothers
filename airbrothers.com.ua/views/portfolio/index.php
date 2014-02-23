<section id="site">
    <h1><a href="<?php echo URL;?>">Портфолио</a> / <span>Сайты</span></h1>
    <?php foreach($this->rowset as $site){?>
        <div class="air_site">
			<div class="circle">
            <div><img id="<?php echo $site['site_id'];?>" src="<?php echo URL;?>public/images/site/icon/<?php echo $site['site_img']?>"/></div>
            </div>
			<h2><?php echo $site['site_title']?></h2>
            <p><?php echo $site['site_link']?></p>
        </div>
    <?php } ?>
	<div class="clear"></div>
</section>


