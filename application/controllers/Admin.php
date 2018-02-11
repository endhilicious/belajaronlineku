<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('Admin_model');
	}
	public function cek_session()
	{
		if ($this->session->userdata('status') != 'login') {
			echo '
			<script type="text/javascript">
				alert("Silahkan login terlebih dahulu");
				location.href = "'.base_url().'Login";
			</script>
			';
		}
	}
	public function index()
	{
		$this->cek_session();
		$this->load->view('admin/components/Header');
		$this->load->view('admin/Home');
		$this->load->view('admin/components/Footer');
	}
	public function Token()
	{
		$this->cek_session();
		$this->load->view('admin/components/Header');
		$this->load->view('admin/Token');
		$this->load->view('admin/components/Footer');
	}
	public function cek_token($token)
	{
		$cek_pengguna 	= $this->Admin_model->cek_pengguna($token);

		if ($cek_pengguna == true) {
			return false;
			// echo $cek_pengguna;
		}else{
			$result = $this->Admin_model->cek_token($token);
			// return true;
			echo $result;
		}
	}
	public function get_data_token($tokens)
	{
		$result = $this->Admin_model->get_data_token($tokens);	

		echo json_encode($result);
	}
	public function load_total_nomor($kode_ujian_tokens)
	{
		$result = $this->Admin_model->load_total_nomor($kode_ujian_tokens);	

		for ($i=1; $i < $result+1; $i++) { 
			if ($i == 1) {
				$active = 'active';
			}else{
				$active = '';
			}

			echo "
				<li id='".$i."' class='".$active." nomor' id='navigasi'>
					<div id='jawaban'><p id='hasil".$i."'></p></div>
					<p hidden>".$i."</p>
					<a id='number".$i."' data-toggle='tab' seq='".$i."' href='#menu".$i."'>".$i."</a>
				</li>
			";
		}
	}
	public function load_soal($kode_ujian_tokens)
	{
		$result = $this->Admin_model->load_soal($kode_ujian_tokens);	
		$no_soal = 1;
		foreach ($result as $results) {
			if ($no_soal == 1) {
				$active = 'active in';
			}else{
				$active = '';
			}
			$jawaban[1][0]	= $results->opsi_benar;
			$jawaban[1][1] 	= $results->opsi_benar_token;
			$jawaban[2][0] 	= $results->opsi_1;
			$jawaban[2][1] 	= $results->opsi_1_token;
			$jawaban[3][0]	= $results->opsi_2;
			$jawaban[3][1] 	= $results->opsi_2_token;
			$jawaban[4][0] 	= $results->opsi_3;
			$jawaban[4][1] 	= $results->opsi_3_token;
			$jawaban[5][0] 	= $results->opsi_4;
			$jawaban[5][1] 	= $results->opsi_4_token;

			$numbers = range(1, 5);
			shuffle($numbers);
			for ($i=0; $i < 5; $i++) {
				$a = $numbers[$i];
				$nomors = $i+1;
				$soal[$a][0] = $jawaban[$nomors][0];
				$soal[$a][1] = $jawaban[$nomors][1];
			}
			
		
			echo '
		<div id="menu'.$no_soal.'" class="tab-pane fade '.$active.'">
			<div class="col-md-12">
				<h3><b>NOMOR '.$no_soal.'</b></h3>
				<div>
				'.$results->soal_text.'
				</div>
			</div>
			<div>
				<form>
					<div class="form-group">
						<input type="radio" name="browser" onclick="myFunction'.$no_soal.'(this.value)" value="A" style="float: left;"> 
						<label for="a" style="float: left; margin: 0px 10px;">
							A
						</label>
						<div style="margin: 0px 40px;">
							'.$soal[1][0].'
						</div>
						<textarea id="jawaban_'.$no_soal.'_opsi_A" hidden>'.$soal[1][1].'</textarea>
					</div>
					<div class="form-group">
						<input type="radio" name="browser" onclick="myFunction'.$no_soal.'(this.value)" value="B" style="float: left;">
						<label for="b" style="float: left; margin: 0px 10px;">
							B
						</label>
						<div style="margin: 0px 40px;">
							'.$soal[2][0].'
						</div>
						<textarea id="jawaban_'.$no_soal.'_opsi_B" hidden>'.$soal[2][1].'</textarea>
					</div>
					<div class="form-group">
						<input type="radio" name="browser" onclick="myFunction'.$no_soal.'(this.value)" value="C" style="float: left;">
						<label for="c" style="float: left; margin: 0px 10px;">
							C
						</label>
						<div style="margin: 0px 40px;">
							'.$soal[3][0].'
						</div>
						<textarea id="jawaban_'.$no_soal.'_opsi_C" hidden>'.$soal[3][1].'</textarea>
					</div>
					<div class="form-group">
						<input type="radio" name="browser" onclick="myFunction'.$no_soal.'(this.value)" value="D" style="float: left;"> 
						<label for="d" style="float: left; margin: 0px 10px;">
							D
						</label>
						<div style="margin: 0px 40px;">
							'.$soal[4][0].'
						</div>
						<textarea id="jawaban_'.$no_soal.'_opsi_D" hidden>'.$soal[4][1].'</textarea>
					</div>
					<div class="form-group">
						<input type="radio" name="browser" onclick="myFunction'.$no_soal.'(this.value)" value="E" style="float: left;"> 
						<label for="e" style="float: left; margin: 0px 10px;">
							E
						</label>
						<div style="margin: 0px 40px;">
							'.$soal[5][0].'
						</div>
						<textarea id="jawaban_'.$no_soal.'_opsi_E" hidden>'.$soal[5][1].'</textarea>
					</div>
					<div class="form-group">
						<input type="radio" name="browser" onclick="myFunction'.$no_soal.'(this.value)" value=""> kosongkan<br>
						<textarea id="jawaban_'.$no_soal.'_opsi_" hidden></textarea>
					</div>
					Jawaban : <b><p class="piihanjawaban" id="jawaban'.$no_soal.'"></p></b>
					<input type="text" name="jawaban'.$no_soal.'" hidden>
				</form>
			</div>
		</div>
		<script>
		function myFunction'.$no_soal.'(browser) {
			var jawaban = document.getElementById("jawaban'.$no_soal.'");
			var pilihan = document.getElementById("hasil'.$no_soal.'");
		    pilihan.innerHTML = browser;
		    jawaban.innerHTML = browser;
		    $(\'#jawaban_soal_\'+'.$no_soal.').html(browser);
		    localStorage.setItem(\'nomor_'.$no_soal.'\', document.getElementById("jawaban_'.$no_soal.'_opsi_"+browser).value );
		    
		    if (jawaban != null) {
				document.getElementById("number'.$no_soal.'").style.backgroundColor = "yellow";
				document.getElementById("number'.$no_soal.'").style.color = "black";
		    }
		}
		</script>
			';
			// console.log("nomor_'.$no_soal.' = "+localStorage.getItem(\'nomor_'.$no_soal.'\')); taro diatas if jawaban tidak null
			$no_soal++;
		}
	}
	public function Ujian()
	{
		$this->load->view('admin/components/Header');
		$this->load->view('admin/Jenis_ujian');
		$this->load->view('admin/components/Footer');
		$this->load->view('js/Pengaturan_ujian_script');
	}
	public function data_waktu($token)//ini untuk mengubah waktu ujian di database setiap detik
	{
		$data = array('waktu_ujian' => $this->input->post('waktu_ujian'));
		$this->Admin_model->data_waktu($data , $token);	
	}
	public function selesai_ujian()
	{
		$data = array(
			'nama' 			=> $this->input->post('nama'),
			'jumlah_benar' 	=> $this->input->post('jumlah_benar'),
			'jumlah_salah' 	=> $this->input->post('jumlah_salah'),
			'jumlah_kosong'	=> $this->input->post('jumlah_kosong'),
			'nilai_akhir' 	=> $this->input->post('nilai_akhir'),
			'kode_ujian' 	=> $this->input->post('kode_ujian'),
			'jenis_ujian' 	=> $this->input->post('jenis_ujian')
		);
		$this->Admin_model->selesai_ujian($data);	
	}
	public function cek_nilai_ujian($jenis_ujian)
	{
		$result = $this->Admin_model->jawaban_soal_benar($jenis_ujian);
		$i = 1;
		$benar  = 0;
		$salah  = 0;
		$kosong = 0;
		foreach ($result as $results) {
			$jawaban = $this->input->post('nomor_'.$i);
			if ($results->opsi_benar_token == $jawaban) {
				$benar += 1;
			}else{
				if ($jawaban == '') {
					$kosong += 1;
				}else{
					$salah += 1;
				}
			}
			$i++;
		}
		if ($jenis_ujian == 'sbmptn') {
			$nilai_akhir = ((($benar*4)-($salah*1))/(50*4))*100;
		}else if($jenis_ujian == 'un'){
			$nilai_akhir = (($benar/25))*100;
		}
		
			echo '
				jumlah benar = <p id="total_soal_benar">'.$benar.'</p><br> 
				jumlah salah = <p id="total_soal_salah">'.$salah.'</p><br>
				jumlah kosong = <p id="total_soal_kosong">'.$kosong.'</p><br>
				Nilai akhir = <p id="total_nilai_akhir">'.$nilai_akhir.'</p><br> 
			';

	}
	public function lihat_nilai_keseluruhan($kode_ujian)
	{
		$result = $this->Admin_model->lihat_nilai_keseluruhan($kode_ujian);	
		$i = 1;
		foreach ($result as $results) {
			echo '
				<tr>
					<td>'.$i++.'</td>
					<td>'.$results->nama.'</td>
					<td>'.$results->jumlah_benar.'</td>
					<td>'.$results->jumlah_salah.'</td>
					<td>'.$results->nilai_akhir.'</td>
				</tr>
			';
		}
	}


	/*=====================================================================*/ 
	/*======================disini bagian admin============================*/ 
	/*=====================================================================*/ 
	public function daftar_list_ujian()
	{
		$this->cek_session();
		$result = $this->Admin_model->daftar_list_ujian();	
		$i = 1;
		foreach ($result as $results) {
			echo '
                <tr>
                    <td>'.$i++.'</td>
                    <td>'.$results->nama_ujian.'</td>
                    <td>kode belum ada</td>
                    <td>'.$results->jenis_mapel.'</td>
                    <td>'.$results->jenis_ujian.'</td>
                    <td>'.$results->waktu_ujian.'</td>
                    <td>status belum ada</td>
                    <td>
                    	<a class="btn btn-primary m-t-15 waves-effect" onclick="soal(\''.$results->kode_ujian.'\' , \''.$results->jenis_ujian.'\')">Soal</a>
                    </td>
                    <td>
                    	<a class="btn btn-warning m-t-15 waves-effect" onclick="edit_ujian('.$results->id.')">Edit Ujian</a>
                    </td>
                    <td>
                    	<a class="btn btn-danger m-t-15 waves-effect" onclick="hapus_ujian('.$results->id.')">Hapus Ujian</a>
                    </td>   
                </tr>
			';
		}
	}
	public function list_token_ujian_spesifik()
	{
		$this->cek_session();
		$result = $this->Admin_model->list_token_ujian_spesifik();	
		$i = 1;
		foreach ($result as $results) {
			echo '
                <tr>
                    <td>'.$i++.'</td>
                    <td>'.$results->nama_ujian.'</td>
                    <td>kode belum ada</td>
                    <td>'.$results->jenis_mapel.'</td>
                    <td>'.$results->jenis_ujian.'</td>
                    <td>'.$results->waktu_ujian.'</td>
                    <td>status belum ada</td>
                    <td>
                    	<a class="btn btn-primary m-t-15 waves-effect" onclick="tambah_token(\''.$results->jenis_ujian.'\' , \''.$results->kode_ujian.'\')">Tambah Token</a>
                    </td>
                    <td>
                    	<a class="btn btn-warning m-t-15 waves-effect" onclick="lihat_token(\''.$results->kode_ujian.'\')">Lihat Token</a>
                    </td>  
                </tr>
			';
		}
	}
	public function daftar_ujian_token($kode_ujian)
	{
		$this->cek_session();
		$result = $this->Admin_model->daftar_ujian_token($kode_ujian);

		$i = 1;
		foreach ($result as $results) {
			echo '
                <tr>
                    <td>'.$i++.'</td>
                    <td>'.$results->token.'</td>
                    <td>'.$results->jenis_ujian.'</td>
                    <td>'.$results->status.'</td>
                </tr>
			';
		}
	}
	public function tambah_token($jenis_ujian , $kode_ujian)
	{
		$this->cek_session();
		$data = array(
			'token'			=> mt_rand(999999999999999, 99999999999999999),
			'jenis_ujian'	=> $jenis_ujian,
			'kode_ujian'	=> $kode_ujian
		);

		$this->Admin_model->tambah_token($data);	

	}
	public function tambah_biodata()
	{
		$data = array(
			'nama' 			=> $this->input->post('nama'),
			'sekolah' 		=> $this->input->post('sekolah'),
			'nisn' 			=> $this->input->post('nisn'),
			'token' 		=> $this->input->post('token'),
			'waktu_ujian' 	=> 3600000
		);
		$newdata = array(
	        'nama'  	=> $this->input->post('nama'),
	        'sekolah'   => $this->input->post('sekolah'),
	        'logged_in' => TRUE
		);

		$this->session->set_userdata($newdata);

		$this->Admin_model->tambah_biodata($data);	

	}

	public function list_soal_ujian_spesifik($nomor_id)
	{
		$this->cek_session();
		$result = $this->Admin_model->list_soal_ujian_spesifik($nomor_id);	
		$i = 1;
		foreach ($result as $results) {
			echo '
                <div class="panel-heading panel-col-cyan" role="tab" id="headingOne_'.$i.'">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" href="#collapseOne_'.$i.'" aria-expanded="true" aria-controls="collapseOne_'.$i.'">
                            <i class="material-icons">launch</i> Nomor '.$i.'
                        </a>
                    </h4>
                </div>
                <div id="collapseOne_'.$i.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_'.$i.'">
                    <div class="panel-body">
                    	<div id="info_soal" style="width: 100%; height: 40px">
                    		<p style="float: left;">Kode Soal : <b id="kode_soal">'.$results->id_soal.'</b></p>
                    		<a class="btn btn-danger" style="float: right;" onclick="hapus_soal('.$results->id.')">Hapus</a>
                    		
                    		<a class="btn btn-primary" style="float: right;" onclick="edit_soal('.$results->id.')">Edit</a>
                    	</div>
                    	<div id="bagian_soal">
                    	<div>'.$results->soal_text.'</div>
                    	</div>
                    	<div id="bagian_jawaban">               		
                    		<ul>
                    			<li class="bg-green">'.$results->opsi_benar.'</li>
                    			<li>'.$results->opsi_1.'</li>
                    			<li>'.$results->opsi_2.'</li>
                    			<li>'.$results->opsi_3.'</li>
                    			<li>'.$results->opsi_4.'</li>
                    		</ul>
                    	</div>
                    </div>
                </div>
			';
			$i++;
		}
	}
	public function tambah_data_ujian()
	{
		$this->cek_session();
		$data = array(
			'nama_ujian' 		=> $this->input->post('nama_ujian'),
			'jenis_mapel' 		=> $this->input->post('jenis_mapel'),
			'jenis_ujian' 		=> $this->input->post('jenis_ujian'),
			'waktu_ujian' 		=> $this->input->post('waktu_ujian')
		);
		$this->Admin_model->tambah_data_ujian($data);	
	}
	public function tambah_data_soal()
	{
		$this->cek_session();
		$data = array(
			'jenis_mapel' 		=> $this->input->post('jenis_mapel'),
			'soal_text' 		=> $this->input->post('soal_text'),
			'opsi_benar' 		=> $this->input->post('opsi_benar'),
			'opsi_1' 			=> $this->input->post('opsi_1'),
			'opsi_2' 			=> $this->input->post('opsi_2'),
			'opsi_3' 			=> $this->input->post('opsi_3'),
			'opsi_4' 			=> $this->input->post('opsi_4'),
			'id_soal'			=> mt_rand(999999999999999, 99999999999999999),
			'id_sementara' 		=> $this->input->post('id_sementara'),
		);
		$this->Admin_model->tambah_data_soal($data);	
	}
	function Logout(){
		echo '
		<script type="text/javascript">
			var cek = confirm("apakah anda yakin ingin keluar ?");
			if(cek){
				'.$this->session->sess_destroy().'
				location.href = "'.base_url().'Login";
			}
		</script>
		';
	}
}
