<div id = 'pop_item'>Популярные работы
    <div id = 'line'>
        <?php
        //print_r($this->AllGetList);
        $i = 0;
        foreach($this->AllGetList as $item){
            $i++;
            echo  "<div class = 'ind_item ind_{$i}'>
            <div>
                    <p class = 'ind_title'><a href='/note/view?id={$item['fair_id']}' class='novost_title'>{$item['fair_title']}</a></p>
                    <div><img class = 'ind_img' src='".URL."public/images/users/{$item['fair_author']}/fair/{$item['fair_img']}' /></div>
                    <p class = 'ind_author'>Автор:</p><p><a href='".URL."master/info/{$item['fair_author']}'>{$item['fair_author']}</a></p>

            </div><div img class = 'ind_price'><span>{$item['price']}</span></div>
            <div class='index_view'><img src = '".URL."public/images/view.fw.png'/> {$item['fair_view']}  <img src = '".URL."public/images/like.fw.png'/> {$item['fair_rating']}</div>";
            if(isset($_SESSION['name'])){
                //   echo "<a href='".URL."account/addUser/{$item['fair_author']}'>Следить за мастером</a>";
            }
            echo "<div class = 'ind_read'>
                <a href='/item/view?id={$item['fair_id']}'>Подробнее</a>
              </div>";
            echo "</div>";
        }

        ?>
    </div>
    <div id = 'ind_paginator'> <?php echo $this->paginatorList?></div>
</div>





<!--<div id = 'main'>
    <div id = 'contain'>
        <div id = 'container'>
            <div id = 'header'>
                        <!--<div id = 'hbg2'><img  src='images/h.klaks2.png'/></div>-->
<div id = 'logo'></div>
<div id = 'search'>
    <!-- <input type="search">
                        </div>
                <div id="reg_holder">
                    <?php if (Session::get('loggedIn') == true):?>
                        <a href="<?php echo URL;?>dashboard/logout"><img src='<?php echo URL;?>public/images/exit.fw.png'></a>
                        <a href="<?php echo URL;?>account"><img src='<?php echo URL;?>public/images/user_cab.fw.png'></a>
                        <?php if (Session::get('role') == 'owner'){?>
                            <a href="<?php echo URL;?>users"></a>
                        <?php }?>
                    <?php else: ?>
                        <a id = 'enter' href="<?php echo URL;?>login"><img src='<?php echo URL;?>public/images/enter.fw.png'></a>
                        <a href="<?php echo URL;?>registration"><img src='<?php echo URL;?>public/images/registration.fw.png'></a>
                    <?php  endif ?>
                </div>
                        <div id = 'menu'>
                                    <ul id="nav">
                                        <li id = "home">
                                            <a id = "home" href="<?php echo URL; ?>index">Главная</a>
                                        </li>
                                        <li  id = "work">
                                            <a id = "work" href="<?php echo URL; ?>categories">Работы</a>
                                        </li>
                                        <li id = "fair">
                                            <a id = "fair" href="<?php echo URL; ?>fair">Ярмарка</a>
                                        </li>
                                <li id = "master">
                                    <a id = "master" href="<?php echo URL; ?>master">Мастера</a>
                                </li>
                                <li id = "news">
                                    <a id = "news" href="<?php echo URL; ?>blog">Новости</a>
                                </li>
                                <li id = "article">
                                    <a id = "article" href="<?php echo URL; ?>article">Статьи</a>
                                </li>
                            </ul>
                        </div>
                        <div id = 'social'>
                            <div class = 'social_img'><img  src='<?php echo URL;?>public/images/mail.png'/></div>
                            <div class = 'social_img'><img  src='<?php echo URL;?>public/images/rss.png'/></div>
                            <div class = 'social_img'><img  src='<?php echo URL;?>public/images/facebook.png'/></div>
                            <div class = 'social_img'><img  src='<?php echo URL;?>public/images/twitter.png'/></div>
                        </div>
            </div>
            <div id = 'content'>
                -->