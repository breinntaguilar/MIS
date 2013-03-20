<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MY_Controller 
{
	
	public function __construct()
	{
		    parent::__construct();
		    //$this->load->model('user_model');
	}	
	
	public function index()
	{	
		$this->_render('pages/login');
	}

	public function authenticate()
	{
		$this->_render('pages/user_dashboard');
	}
	
}