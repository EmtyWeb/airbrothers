<?php Session::initiation();?>
<!DOCTYPE html>
<html>
<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta charset="utf-8" />
	<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
    <title><?=(isset($this->title))? $this->title : 'Airbrothers';?></title>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/reset.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css" />
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
   <!-- <script src="<?php echo URL; ?>public/js/jquery.js"></script>-->
    <script src="<?php echo URL; ?>public/js/123.js"></script>
    <script src="<?php echo URL; ?>public/js/slides.min.jquery.js"></script>

	<?php
    //подключение js для отдельного файла
    if(isset($this->js)){
        foreach($this->js as $js){
            echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
        }
    }


    ?>
	<link rel="icon" href="http://airbrothers.com.ua//favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://airbrothers.com.ua//favicon.ico" type="image/x-icon">

</head>
<body>
<div id="wrap">
    <div id="container">
        <div id="sidebar">
            <div id="main">
                <div id="logo"><a href="<?php echo URL;?>" title="Air brothers"></a></div>
                <div id="menu">
                    <div class="line_menu"></div>
                    <nav class="menu">
                        <ul class="nav">
                            <li><a href="<?php echo URL; ?>">Главная</a></li>
                            <li><a href="<?php echo URL; ?>news">Новости</a></li>
                            <li><a href="<?php echo URL; ?>design">Дизайн</a></li>
                            <li><a href="<?php echo URL; ?>portfolio">Сайты</a></li>
                            <li><a href="<?php echo URL; ?>services">Услуги</a></li>
                            <li><a href="<?php echo URL; ?>contact">Контакты</a></li>
                            <?php if (Session::get('loggedIn') == true){?>
                            <?php if (Session::get('role') == 'developer' || Session::get('role') == 'designer'){?>
                                    <li><a href="<?php echo URL;?>account">Меню</a></li>
                                    <li><a href="<?php echo URL;?>dashboard/logout">Выход</a></li>
                            <?php }}?>
                        </ul>
				</nav> <!--#menu-->
				<div class="line_menu"></div>
				</div>
</div>
<div id="black"></div>
<div id="air_info">
    <div class="inform">
        <!--<a id="question_button" href="<?php echo URL;?>question">Спросить</a>
        <a id="order_button" href="<?php echo URL;?>order">Заказать</a>-->
		<a id="in_ask" href="<?php echo URL;?>question"></a>
		<a id="in_order" href="<?php echo URL;?>order"></a>
        <div id="phone">
            <div id="phone_img"></div>+3 (068)  <span>414 15 72</span>
        </div><!--#phone-->
    </div>
</div>
</div><!--#sidebar-->