<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
ini_set('display_errors', 0); 
Class MY_Controller extends CI_Controller
{

	public function render($value, $is_object=true)
	{
		if (!empty($value)) 
		{
			if ($is_object)
			{
				$get_value = $value[0];
				$this->data = $get_value;
			}
			else{
				$this->data['list'] = $value;
			}
		}
		else
		{
			$this->data['error'] = 1;
			$this->data['message'] = "Invalid";
		}
		header('content-type: application/json');
		echo json_encode($this->data, JSON_PRETTY_PRINT);
	}

	
	public function print_r($value){
		echo "<pre>";
		print_r($value);
		echo "</pre>";
	}
	
}

?>