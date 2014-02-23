<?php
class Val{

    function __construct(){}

    public function minlength($data, $arg){
        if(strlen($data) < $arg){
            return "Минимальное колличество символов $arg";
        }
    }
    public function maxlength($data, $arg){
        if(strlen($data) > $arg){
            return "Максимальное колличество символов $arg";
        }
    }
    public function digit($data){
        if(ctype_digit($data)== false){
            return "Только число";
        }
    }
    public function check_email($data){
        if    (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $data)) //проверка    е-mail адреса регулярными выражениями на корректность
        {return    "Неверно введен е-mail!";}

    }
    public function __call($name, $arguments)
    {
        throw new Exception("$name does not exist inside of: " . __CLASS__);
    }
}