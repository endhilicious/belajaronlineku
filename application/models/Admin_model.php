<?php

Class Admin_model extends CI_Model {

	public function __construct() {
		parent::__construct();
        $this->load->database();
	}
	public function cek_login_admin($table,$where)
	{	
		return $this->db->get_where($table,$where);
	}
	public function load_soal($kode_ujian_tokens)
	{
		$this->db->select();
		$this->db->from('bank_soal');
		$this->db->where('id_sementara' , $kode_ujian_tokens);
		$result = $this->db->get();		
		return $result->result(); 
	}
	public function load_total_nomor($kode_ujian_tokens)
	{
		$this->db->select();
		$this->db->from('bank_soal');
		$this->db->where('id_sementara' , $kode_ujian_tokens);
		$result = $this->db->get();		
		return $result->num_rows(); 
	}
	public function cek_login($username , $password) {
		$kondisi = array(
			'username' => $username,
			'password' => $password
		);

		$this->db->select('*');
		$this->db->from('login');
		$this->db->where($kondisi);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	public function daftar_list_ujian()
	{		
		$this->db->select();
		$this->db->from('ujian');
		$result = $this->db->get();		
		return $result->result(); 
	}
	public function list_soal_ujian_spesifik($nomor_id)
	{
		$this->db->select();
		$this->db->from('bank_soal');
		$this->db->where('id_sementara' , $nomor_id);
		$result = $this->db->get();		
		return $result->result(); 
	}
	public function list_token_ujian_spesifik()
	{
		$this->db->select();
		$this->db->from('ujian');
		$result = $this->db->get();		
		return $result->result(); 
	}
	public function tambah_token($data)
	{
        return $this->db->insert('token', $data);
	}
	public function daftar_ujian_token($kode_ujian)
	{
		$this->db->select();
		$this->db->from('token');
		$this->db->where('kode_ujian' , $kode_ujian);
		$result = $this->db->get();		
		return $result->result(); 
	}
	public function cek_pengguna($token)
	{
		$kondisi = array(
			'token' => $token
		);

		$this->db->select('token');
		$this->db->from('siswa');
		$this->db->where($kondisi);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	public function cek_token($token)
	{
		$kondisi = array(
			'token' => $token
		);

		$this->db->select('*');
		$this->db->from('token');
		$this->db->where($kondisi);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	public function get_data_token($tokens)
	{
		$this->db->select();
		$this->db->from('token');
		$this->db->where('token' , $tokens);
		$result = $this->db->get();		
		return $result->result(); 
	}
	public function tambah_data_soal($data)
	{
        return $this->db->insert('bank_soal', $data);
	}
	public function tambah_biodata($data)
	{
        return $this->db->insert('siswa', $data);
	}
	public function tambah_data_ujian($data)
	{
        return $this->db->insert('ujian', $data);
	}
	public function selesai_ujian($data)
	{
        return $this->db->insert('hasil_akhir', $data);
	}
	public function jawaban_soal_benar($jenis_ujian)
	{
		$this->db->select();
		$this->db->from('bank_soal');
		$this->db->where('jenis_mapel' , $jenis_ujian);
		$result = $this->db->get();		
		return $result->result(); 
	}
	public function lihat_nilai_keseluruhan($kode_ujian)
	{
		$this->db->select();
		$this->db->from('hasil_akhir');
		$this->db->where('kode_ujian' , $kode_ujian);
		$this->db->order_by("nilai_akhir", "desc");
		$result = $this->db->get();		
		return $result->result(); 
	}
	public function data_waktu($data , $token)
	{
		$this->db->where('token' , $token);
		$this->db->update('siswa', $data);
	}
}

?>