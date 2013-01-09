<?php	
class Find extends CI_Controller {		
	function findemp()		{			
		$this->output->set_content_type('application/json');			
		
		echo json_encode(array('count' => 0,'results' => array()));		
	}	
}