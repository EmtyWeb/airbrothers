<section id="design">
    <h1><a href="<?php echo URL;?>">Портфолио</a> / <span>Дизайн</span></h1>
	
	<?php foreach($this->rowset as $design){?>
        <div class="air_design">
            <div class="circle">
				<div>
					<!--<img id="<?php echo $design['design_id'];?>"src="<?php echo URL;?>public/images/cirl.png"/>
				-->
					<img id="<?php echo $design['design_id'];?>"src="<?php echo URL;?>public/images/design/icon/<?php echo $design['design_img']?>"/>
				</div>
			</div>
			<div>
				<h3><?php echo $design['design_title']?></h3>
				<p><?php echo $design['design_link']?></p>
			</div>
        </div>
    <?php } ?>
	<div class="clear"></div>
</section>
