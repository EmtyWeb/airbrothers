<?php
class Index_Model extends Model{
    function __construct(){
        parent::__construct();
    }
    public function slide_list(){
        $SQL = 'SELECT slide_title1,slide_title2,slide_desc1,slide_img,slide_desc2
                    FROM air_slide';
        return $this->db->select($SQL);
    }
}