<section id="page_header">    
	<?php for($i=0;$i<count($this->rowset);$i++){ ?>
    <article class="title<?php echo $i+1;?>">
        <h2><?php echo $this->rowset[$i]['slide_title1'];?></h2>
        <p><?php echo $this->rowset[$i]['slide_title2'];?></p>
    </article>
	<?php } ?>
</section>
<section id = 'slides'>
	<a href="#" class="prev"></a>
    <a href="#" class="next"></a>
    <div class="slides_container">
	<?php for($i=0;$i<count($this->rowset);$i++){ ?>
        <div class="slide">
            <div class="slider_img">
                <img src="<?php echo URL;?>public/images/slide/<?php echo $this->rowset[$i]['slide_img']?>"/>
            </div>
        </div>
	<?php } ?>    

    </div><!--.slides_container-->
</section><!--#slides-->
<section id="info">
	<?php for($i=0;$i<count($this->rowset);$i++){ ?>
    <article class="title<?php echo $i+1;?>">
        <h2><?php echo $this->rowset[$i]['slide_desc1'];?></h2>
        <p><?php echo $this->rowset[$i]['slide_desc2'];?></p>
    </article>
	<?php } ?>
</section><!--#info-->




