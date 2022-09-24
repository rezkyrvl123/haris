<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_awal extends CI_Controller {
	$this->load->helper('url');

	
	public function index()
	{
		
		$this->load->view('Halaman_awal');
	}
}
