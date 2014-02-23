<?php
class News_Model extends Model{
    function __construct(){
        parent::__construct();
    }
    public function newsList(){
        $SQL = 'SELECT `news_author`,`news_title`,
                       `news_desc`,`news_date`
                    FROM air_news ORDER BY `news_date` DESC';
return $this->db->select($SQL);
    }
}