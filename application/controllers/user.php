<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller 
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

	public function registeraccount()
	{
		$this->_render('pages/register_account');
	}

	public function admin()
	{
		$this->_render('admin/admin');
	}

	public function userdashboard()
	{
		$this->_render('pages/user_dashboard');
	}
	
	public function searchprofile()
	{
		$this->_render('pages/user_searchprofile');
	}

	public function userprofile()
	{
		$this->_render('pages/user_profile');
	}
}