<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('Admin_model');
	}
	public function index()
	{
		$this->load->view('admin/Login');
	}
	public function Registrasi()
	{
		$this->load->view('admin/Registrasi');
	}
	public function login_aksi()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->Admin_model->cek_login_admin('login',$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			echo '
			<script type="text/javascript">
				alert("Selamat Datang '.$username.'");
				location.href = "'.base_url().'Admin";
			</script>
			';

		}else{
			echo '
			<script type="text/javascript">
				alert("Username Dan Password Salah");
				location.href = "'.base_url().'Login";
			</script>
			';
		}
	}
}
