<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kasus extends CITSTUDIO_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function googlemaps(){
		$registerjs = array(
			array('cases/google-maps.js'),
			array('http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize'),
		);
		$this->carabiner->js($registerjs);
		
		$rows = $this->db->query("SELECT * FROM maps")->result_array();
		$this->data["maps"] = $rows;
		$this->_render($this->data);
	}
	public function index()
	{
		$this->_render($this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */