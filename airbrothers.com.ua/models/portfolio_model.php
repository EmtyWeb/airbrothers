<?php
class Portfolio_Model extends Model{
    function __construct(){
        parent::__construct();
    }
    public function portfolioList(){
        $SQL = 'SELECT `site_title`,`site_img`,`site_link`,`site_id`
                    FROM `air_site` ORDER BY `site_id` DESC';
        return $this->db->select($SQL);
    }
public function siteView(){		
				$id = $_GET['id'];
		        $SQLid = 'SELECT `site_picture`
                    FROM `air_site` WHERE `site_id` ="'.$id.'"';
				$result_id = $this->db->select($SQLid);
				
				
				$SQL = 'SELECT `site_picture`,`site_id`
                    FROM `air_site` ORDER BY `site_id` DESC';
				$result = $this->db->select($SQL);
		//print_r ($result);

	echo"	<div id='modal'>
			<div id = 'my_logo'>
				<div id = 'modal_content'>
					<div id = 'slides'>
						<div id='left'><a href='#' class='prev'></a></div>
						<div id='right'><a href='#' class='next'></a></div>
						<div class='slides_container'>";
						
						foreach($result_id as $picture){
							echo "<div class='slide'>";
								echo "<img src='public/images/site/".$picture['site_picture']."'/>";
							echo "</div>";
						}	
						
						foreach($result as $picture){
							if($picture['site_id'] != $id){
								echo "<div class='slide'>";
									echo "<img src='public/images/site/".$picture['site_picture']."'/>";
								echo "</div>";
							}
						}			
		
	echo"				</div></div>                 
				<div id='closed'><a href='#'><div id='close'></div></a></div>              
				</div>
			</div>
		</div>	";				  

	}
}