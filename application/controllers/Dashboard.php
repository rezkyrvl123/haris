<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{
		// var_dump('Aku');
		// die;
		$this->load->view('V_Dashboard');
	}
}
