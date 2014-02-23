<?php
class Design_Model extends Model{
    function __construct(){
        parent::__construct();
    }
    public function designList(){
        $SQL = 'SELECT `design_id`,`design_title`,`design_img`,`design_link`
                    FROM `air_design` ORDER BY `design_id` DESC';
        return $this->db->select($SQL);
    }
	public function designView(){		
				$id = $_GET['id'];
		        $SQLid = 'SELECT `design_picture`
                    FROM `air_design` WHERE `design_id` ="'.$id.'"';
				$result_id = $this->db->select($SQLid);
				
				
				$SQL = 'SELECT `design_picture`,`design_id`
                    FROM `air_design` ORDER BY `design_id` DESC';
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
								echo "<img src='public/images/design/".$picture['design_picture']."'/>";
							echo "</div>";
						}	
						
						foreach($result as $picture){
							if($picture['design_id'] != $id){
								echo "<div class='slide'>";
									echo "<img src='public/images/design/".$picture['design_picture']."'/>";
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