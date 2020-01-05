<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Front_Controller 
{

	public function index()
	{
		
		$this->template
		->title('Welcome')
		->set_layout('dashboard')
		->set('page','home')
		->build('welcome_message');
	}
}
