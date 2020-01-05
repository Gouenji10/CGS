<?php 
	/**
	 * 
	 */
	class Core_Controller extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->data=array();
			/*
			*
			*/
			$this->load->library('config_loader');
			$this->config_loader->load();
		}
	}
	?>