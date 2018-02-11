<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('Home');
		$this->load->view('js/tes_script');
	}
	public function finish()
	{
		$this->load->view('selesai');
	}
	public function Login()
	{
		$this->load->view('Login');
	}
	public function Maintenance()
	{
		$this->load->view('Maintenance');
	}
}
