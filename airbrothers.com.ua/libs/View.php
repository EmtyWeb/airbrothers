<?php
class View {
    function __construct(){
        //echo 'We are in View';
    }
    public function render($name, $noInclude = false){
        if($noInclude == true){
            require 'views/'.$name.'.php';
        }elseif(
            $name == 'account/index' ||
            $name == 'account/site/site'||
            $name == 'account/site/edit_site'||
            $name == 'account/site/create_site'||
            $name == 'account/design/design'||
            $name == 'account/design/edit_design'||
            $name == 'account/design/create_design'||
            $name == 'account/slide/slide'||
            $name == 'account/slide/edit_slide'||
            $name == 'account/slide/create_slide'||
            $name == 'account/news/news'||
            $name == 'account/news/edit_news'||
            $name == 'account/news/create_news'

        ) {
            require 'views/header.php';
            require 'views/account/user_cabinet.php';
            require 'views/'.$name.'.php';
            require 'views/footer.php';
        }
        else{
          //  echo $name;
            require 'views/header.php';
            require 'views/'.$name.'.php';
            require 'views/footer.php';
        }

    }
}