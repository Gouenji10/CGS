<?php 
	/**
	 * 
	 */
	class Front_Controller extends Core_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			$this->theme = "frontend";
			$this->config->load('asset');

			$this->config->config['assets']['path'] = 'themes/'.$this->theme.'/';
			$this->config->item('path','assets');
			$this->load->helper('asset');

			$this->template
			->set_theme($this->theme)
			->set_layout('layout');
		}
	}
	?>