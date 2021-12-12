<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('m_db');		
		if(akses()!="admin")
		{
			$this->login_model->user_logout();
		}
	}
	
	function index()
	{		
		$meta['judul']="Dashboard ".ucfirst(akses());
		$this->load->view('tema/header',$meta);
		$this->load->view(akses().'/dashboard');
		$this->load->view('tema/footer');
	}
}