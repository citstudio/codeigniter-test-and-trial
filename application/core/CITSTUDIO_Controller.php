<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class CITSTUDIO_Controller extends CI_Controller {

      public $data;

      public function __construct() {
            parent::__construct();

            $this->load->library('carabiner');
            $this->load->helper('js');
			
			$basePath = dirname($_SERVER["SCRIPT_NAME"]);
			$pathArray = explode(DIRECTORY_SEPARATOR, $basePath);
			$pathArray = $pathArray[0] . '/';
			
            $carabiner_config = array(
				'script_dir' => 'resources/js/', 
				'style_dir'  => 'resources/css/',
				'cache_dir'  => 'resources/cache/',
				'base_uri'   => $pathArray,
				'combine'    => FALSE,
				'dev'        => TRUE
			);

			$this->carabiner->config($carabiner_config);
			
			$js_assets["init"] = array(
				array('jquery-2.1.3.min.js'),
				array('bootstrap.min.js'),
			);

			$this->carabiner->js( $js_assets["init"] );
			
			$css_assets["init"] = array(
				array('bootstrap.min.css'),
				array('styles.css'),
			);

			$this->carabiner->css( $css_assets["init"] );
            $this->data["contents"] = $this->router->fetch_class()."/".$this->router->fetch_method();
      }

      public function _render($data, $returnedAsString = FALSE) {
            $ci = &get_instance();
            $ci->load->view('templates/default', $data, $returnedAsString);
      }
	  
	  

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */