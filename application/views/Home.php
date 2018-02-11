<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>tesonlineku</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="<?php echo site_url(); ?>assets/js/jquery.min.js" charset="utf-8"></script>

	<style type="text/css">
		/*sudah ada di style.css coba dihapus klo sdh berfungsi di situ*/
		.nav>li>a{
		  padding: 10px 0px !important; 
		}
		@media only screen and (max-width: 700px) {
			.nav>li{
				margin: 2% !important;
			}
		}
	</style>
</head>
<body>
<div id="koneksi_status" style="display: none;width: 10%; background-color: rgba(255,0,0,0.8); position: fixed;z-index: 999999; color: #fff;">
	<center><h1>Koneksi Tidak Stabil</h1></center>
</div>
<div class="ukuran" id="bagian_ujian">

<nav class="navbar navbar-inverse" style="height:  140px;">
	<div class="container-fluid" style="color: #fff;">
	    <div class="navbar-header" style="width: 10%; float: left;">
	      <a class="navbar-brand" href="#"><img src="<?php echo base_url() ?>assets/logo.png" style="width: 100%;"></a>
	    </div>
	    <div style="width: 70%; float: left;">
	    	<center>
		    	<h2>Ujian Masuk Berbasis Komputer</h2>
		    	<h3><?php echo $this->session->userdata('nama'); ?></h3>
		    	<h4><?php echo $this->session->userdata('sekolah'); ?></h4>
	    	</center>
	    </div>
		<div style="width: 20%; float: left;">
			<p style="margin: 20px 0px 0px 0px;">
				<center style="font-size: 30px;background: grey;">sisa waktu</center>
			</p>
			<p id="demo" style="font-size: 30px;margin: 0px;background: deepskyblue;"></p>
		</div>
	</div>
</nav>
<div class="col-md-8" style="height:  400px;overflow-y:  scroll; border: 1px solid; box-shadow: 10px 10px 5px grey;">
	<div class="tab-content" id="soal_konten">
	</div>
</div>
<div class="col-md-4">
	<ul class="nav nav-tabs" data-spy="affix" style="height: 400px; border: 1px solid; box-shadow: 10px 10px 5px grey;" id="total_nomor_soal">
	</ul>
</div>

<div class="col-sm-9 col-md-12" style="margin: 20px 0px;">
	<button type="button" name="button" id="kurang" class="btn btn-info btn-lg">
		<i class="fa fa-angle-left fa-3" aria-hidden="true"></i> Sebelumnya
	</button>
	<button type="button" name="button" id="tambah" class="btn btn-info btn-lg">
		Selanjutnya <i class="fa fa-angle-right fa-3" aria-hidden="true"></i>
	</button>
	<button id="selesai_kerja_soal" type="button" name="button" onclick="selesai()" class="btn btn-danger btn-lg" style="float: right;">
		Selesai <i class="fa fa-angle-right fa-3" aria-hidden="true"></i>
	</button>

</div>
</div>
<div class="ukuran bagian_cek_ujian" style="display: none;">
	<div id="tidak_habis_waktu">
		<center>
			<h1>ANDA TELAH MENYELESAIKAN UJIAN</h1>
			<h2>ANDA MASIH MEMILIKI KESEMPATAN UNTUK MEMPERBAIKI UJIAN</h2>
			<h3>Nama <b><?php echo $this->session->userdata('nama'); ?></b></h3>
			<input type="text" id="nama_peserta" value="<?php echo $this->session->userdata('nama'); ?>" hidden>
		</center>
	</div>
	<div id="habis_waktu" style="display: none;">
		<center>
			<h1>WAKTU ANDA HABIS</h1>
			<h1>TEKAN SELESAI UNTUK MELIHAT NILAI ANDA</h1>
			<h3>Nama : <b><?php echo $this->session->userdata('nama'); ?></b></h3>
			<input type="text" id="nama_peserta" value="<?php echo $this->session->userdata('nama'); ?>" hidden>
		</center>
	</div>
	<div id="cek_jawaban">
		<table class="table table-condensed table-bordered" id="mengecek_jawaban" width="100%">
			<?php
				for ($i=1; $i < 10; $i++) { 
			?>
				<tr>
					<td><center><p><?php echo $i; ?></p></center></td>
					<td style="background-color: lightblue;" id="soal_yang_ke_<?php echo $i; ?>"><center><p id="jawaban_soal_<?php echo $i; ?>"></p></center></td>

					<td><center><p>1<?php echo $i; ?></p></center></td>
					<td style="background-color: lightblue;" id="soal_yang_ke_<?php echo $i; ?>"><center><p id="jawaban_soal_1<?php echo $i; ?>"></p></center></td>

					<td><center><p>2<?php echo $i; ?></p></center></td>
					<td style="background-color: lightblue;" id="soal_yang_ke_<?php echo $i; ?>"><center><p id="jawaban_soal_2<?php echo $i; ?>"></p></center></td>

					<td><center><p>3<?php echo $i; ?></p></center></td>
					<td style="background-color: lightblue;" id="soal_yang_ke_<?php echo $i; ?>"><center><p id="jawaban_soal_3<?php echo $i; ?>"></p></center></td>

					<td><center><p>4<?php echo $i; ?></p></center></td>
					<td style="background-color: lightblue;" id="soal_yang_ke_<?php echo $i; ?>"><center><p id="jawaban_soal_4<?php echo $i; ?>"></p></center></td>
				</tr>
			<?php		
				}
			?>
				<tr>
					<td><center><p>10</p></center></td>
					<td style="background-color: lightblue;" id="soal_yang_ke_10"><center><p id="jawaban_soal_10"></p></center></td>

					<td><center><p>20</p></center></td>
					<td style="background-color: lightblue;" id="soal_yang_ke_20"><center><p id="jawaban_soal_20"></p></center></td>

					<td><center><p>30</p></center></td>
					<td style="background-color: lightblue;" id="soal_yang_ke_30"><center><p id="jawaban_soal_30"></p></center></td>

					<td><center><p>40</p></center></td>
					<td style="background-color: lightblue;" id="soal_yang_ke_40"><center><p id="jawaban_soal_40"></p></center></td>

					<td><center><p>50</p></center></td>
					<td style="background-color: lightblue;" id="soal_yang_ke_50"><center><p id="jawaban_soal_50"></p></center></td>
				</tr>
		</table>
		<center>
			<a id="ulangi_button" class="btn btn-primary btn-lg">Kembali</a>
			<a id="selesai_button" class="btn btn-danger btn-lg">TEKAN SELESAI</a>
			<a id="lihat_nilai_button" class="btn btn-danger btn-lg" style="display: none;">LIHAT NILAI</a>
		</center>
		<div style="display: none;">
			<button id="clear_ls" class="btn btn-lg btn-warning">bersihkan</button>
			<div class="col-md-12" id="list_id_soal"></div>			
		</div>
	</div>

</div>

	<div class="ukuran" id="akhir_jawaban" style="display: none;">
		<center>
			<h1>NILAI ANDA</h1>
			<h1 id="nilai_akhir_input">-</h1>
			<a class="btn btn-primary btn-lg" id="lihat_nilai_keseluruhan_btn">Lihat Nilai Keseluruhan</a>
			<table class="table table-condensed table-bordered table-striped" width="100%">
				<thead>
					<tr>
						<td>Urutan</td>
						<td>Nama</td>
						<td>Jumlah Benar</td>
						<td>Jumlah Salah</td>
						<td>Nilai Akhir</td>
					</tr>
				</thead>
				<tbody id="lihat_nilai_keseluruhan">
					
				</tbody>
			</table>
		</center>
	</div>

	<script src="<?php echo site_url(); ?>assets/js/jquery.min.js" charset="utf-8"></script>
	<script src="<?php echo site_url(); ?>assets/js/bootstrap.min.js" charset="utf-8"></script>
	<script src="<?php echo site_url(); ?>assets/js/sweetalert.min.js" charset="utf-8"></script>
<script>

console.log($('input[name="genderS"]:checked').val());
var nomors = 1;
$(document).ready(function(){
	if (localStorage.getItem('jenis_ujian') == 'sbmptn') {
		total_soal = 50;
	}
	if (localStorage.getItem('jenis_ujian') == 'un') {
		total_soal = 25;
	}
	$("li.nomor a").click(function(e) {
		nomors = parseInt($(this).attr('seq'));
	});
    $("button#tambah").click(function(){
    	if (nomors < total_soal) {
			$("li.active").removeClass("active");
			$("div.active").removeClass("active in");
			$("li#"+nomors+"").removeClass("active");
			$("div#menu"+nomors+"").removeClass("active in");
			nomors = nomors+1;
			$("li#"+nomors+"").addClass("active");
			$("div#menu"+nomors+"").addClass("active in");    		
    	}
    });
    $("button#kurang").click(function(){
    	if (nomors > 1) {
			$("li.active").removeClass("active");
			$("div.active").removeClass("active in");
			$("li#"+nomors+"").removeClass("active");
			$("div#menu"+nomors+"").removeClass("active in");
			$("div#menu"+nomors+"").removeClass("in");
			nomors = nomors-1;
			$("li#"+nomors+"").addClass("active");
			$("div#menu"+nomors+"").addClass("active in");
    	}
    });
});

</script>

<script type="text/javascript">
	// cek koneksi internet
	setInterval(function() {
		conn_check();
	}, 5000);
	
	function conn_check() {
		if (navigator.onLine) {
			console.log('online');
			$('#koneksi_status').hide();
		}else{			
			console.log('offline');
			$('#koneksi_status').show();
		}
	}
</script>
<!-- script untuk setting jawaban di localstorage -->
<script type="text/javascript">
	for (var i = 1; i < 51; i++) {
		if (localStorage.getItem('nomor_'+i) === null) {
			localStorage.setItem('nomor_'+i, '');
			console.log('nomor '+i+' = '+localStorage.getItem('nomor_'+i));
		}else{
			console.log('nomor '+i+' = '+localStorage.getItem('nomor_'+i));
		}
	}
	$('#clear_ls').click(function() {
		window.localStorage.clear();
		alert('localstorage dihapus');
		var cek = confirm('mau reload ?')
		if (cek) {
			location.reload();
		}
	})
	function selesai() {
			$('.bagian_cek_ujian').show();
			$('#bagian_ujian').hide();
			if (localStorage.getItem('jenis_ujian') == 'sbmptn') {
				var cek_nilai = {
					'nomor_1' 	: localStorage.getItem("nomor_1"),
					'nomor_2' 	: localStorage.getItem("nomor_2"),
					'nomor_3' 	: localStorage.getItem("nomor_3"),
					'nomor_4' 	: localStorage.getItem("nomor_4"),
					'nomor_5' 	: localStorage.getItem("nomor_5"),
					'nomor_6' 	: localStorage.getItem("nomor_6"),
					'nomor_7' 	: localStorage.getItem("nomor_7"),
					'nomor_8' 	: localStorage.getItem("nomor_8"),
					'nomor_9' 	: localStorage.getItem("nomor_9"),
					'nomor_10' 	: localStorage.getItem("nomor_10"),
					'nomor_11' 	: localStorage.getItem("nomor_11"),
					'nomor_12' 	: localStorage.getItem("nomor_12"),
					'nomor_13' 	: localStorage.getItem("nomor_13"),
					'nomor_14' 	: localStorage.getItem("nomor_14"),
					'nomor_15' 	: localStorage.getItem("nomor_15"),
					'nomor_16' 	: localStorage.getItem("nomor_16"),
					'nomor_17' 	: localStorage.getItem("nomor_17"),
					'nomor_18' 	: localStorage.getItem("nomor_18"),
					'nomor_19' 	: localStorage.getItem("nomor_19"),
					'nomor_20' 	: localStorage.getItem("nomor_20"),
					'nomor_21' 	: localStorage.getItem("nomor_21"),
					'nomor_22' 	: localStorage.getItem("nomor_22"),
					'nomor_23' 	: localStorage.getItem("nomor_23"),
					'nomor_24' 	: localStorage.getItem("nomor_24"),
					'nomor_25' 	: localStorage.getItem("nomor_25"),
					'nomor_26' 	: localStorage.getItem("nomor_26"),
					'nomor_27' 	: localStorage.getItem("nomor_27"),
					'nomor_28' 	: localStorage.getItem("nomor_28"),
					'nomor_29' 	: localStorage.getItem("nomor_29"),
					'nomor_30' 	: localStorage.getItem("nomor_30"),
					'nomor_31' 	: localStorage.getItem("nomor_31"),
					'nomor_32' 	: localStorage.getItem("nomor_32"),
					'nomor_33' 	: localStorage.getItem("nomor_33"),
					'nomor_34' 	: localStorage.getItem("nomor_34"),
					'nomor_35' 	: localStorage.getItem("nomor_35"),
					'nomor_36' 	: localStorage.getItem("nomor_36"),
					'nomor_37' 	: localStorage.getItem("nomor_37"),
					'nomor_38' 	: localStorage.getItem("nomor_38"),
					'nomor_39' 	: localStorage.getItem("nomor_39"),
					'nomor_40' 	: localStorage.getItem("nomor_40"),
					'nomor_41' 	: localStorage.getItem("nomor_41"),
					'nomor_42' 	: localStorage.getItem("nomor_42"),
					'nomor_43' 	: localStorage.getItem("nomor_43"),
					'nomor_44' 	: localStorage.getItem("nomor_44"),
					'nomor_45' 	: localStorage.getItem("nomor_45"),
					'nomor_46' 	: localStorage.getItem("nomor_46"),
					'nomor_47' 	: localStorage.getItem("nomor_47"),
					'nomor_48' 	: localStorage.getItem("nomor_48"),
					'nomor_49' 	: localStorage.getItem("nomor_49"),
					'nomor_50' 	: localStorage.getItem("nomor_50"),
			        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
				};
			}

			if (localStorage.getItem('jenis_ujian') == 'un') {
				var cek_nilai = {
					'nomor_1' 	: localStorage.getItem("nomor_1"),
					'nomor_2' 	: localStorage.getItem("nomor_2"),
					'nomor_3' 	: localStorage.getItem("nomor_3"),
					'nomor_4' 	: localStorage.getItem("nomor_4"),
					'nomor_5' 	: localStorage.getItem("nomor_5"),
					'nomor_6' 	: localStorage.getItem("nomor_6"),
					'nomor_7' 	: localStorage.getItem("nomor_7"),
					'nomor_8' 	: localStorage.getItem("nomor_8"),
					'nomor_9' 	: localStorage.getItem("nomor_9"),
					'nomor_10' 	: localStorage.getItem("nomor_10"),
					'nomor_11' 	: localStorage.getItem("nomor_11"),
					'nomor_12' 	: localStorage.getItem("nomor_12"),
					'nomor_13' 	: localStorage.getItem("nomor_13"),
					'nomor_14' 	: localStorage.getItem("nomor_14"),
					'nomor_15' 	: localStorage.getItem("nomor_15"),
					'nomor_16' 	: localStorage.getItem("nomor_16"),
					'nomor_17' 	: localStorage.getItem("nomor_17"),
					'nomor_18' 	: localStorage.getItem("nomor_18"),
					'nomor_19' 	: localStorage.getItem("nomor_19"),
					'nomor_20' 	: localStorage.getItem("nomor_20"),
					'nomor_21' 	: localStorage.getItem("nomor_21"),
					'nomor_22' 	: localStorage.getItem("nomor_22"),
					'nomor_23' 	: localStorage.getItem("nomor_23"),
					'nomor_24' 	: localStorage.getItem("nomor_24"),
					'nomor_25' 	: localStorage.getItem("nomor_25"),
			        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
				};
			}
			

			$.ajax({
			    url: '<?php echo site_url() ?>Admin/cek_nilai_ujian/'+localStorage.getItem('jenis_ujian'),
			    data: cek_nilai,
			    type: 'post',
			    success: function(data){
			    	$('#list_id_soal').html(data);
			    }
			});
	}
</script>
<script type="text/javascript">
	$('#ulangi_button').click(function() {
		$('.bagian_cek_ujian').hide();
		$('#bagian_ujian').show();
	})
	$('#selesai_button').click(function() {
		var cek = confirm('anda yakin ingin selesai ?');
		if (cek) {

			var selesai_button = {
				'nama'		 	: $('#nama_peserta').val(),
				'jumlah_benar' 	: $('#total_soal_benar').html(),
				'jumlah_salah' 	: $('#total_soal_salah').html(),
				'jumlah_kosong' : $('#total_soal_kosong').html(),
				'nilai_akhir' 	: $('#total_nilai_akhir').html(),
				'kode_ujian' 	: localStorage.getItem('kode_ujian'),
				'jenis_ujian' 	: localStorage.getItem('jenis_ujian'),
				// 'jenis_ujian' 	: $('#nilai_akhir').val(),
		        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
			}

			$.ajax({
			    url: '<?php echo site_url() ?>Admin/selesai_ujian/',
			    data: selesai_button,
			    type: 'post',
			    success: function(data){
			    	localStorage.setItem('status_ujian', '');
			    	alert('ujian selesai');
					$('.bagian_cek_ujian').hide();
					$('#bagian_ujian').hide();
					$('#akhir_jawaban').show();
					$('#nilai_akhir_input').html($('#total_nilai_akhir').html());

			    }
			});
		}
	})
	$('#lihat_nilai_button').click(function() {
			var selesai_button = {
				'nama'		 	: $('#nama_peserta').val(),
				'jumlah_benar' 	: $('#total_soal_benar').html(),
				'jumlah_salah' 	: $('#total_soal_salah').html(),
				'jumlah_kosong' : $('#total_soal_kosong').html(),
				'nilai_akhir' 	: $('#total_nilai_akhir').html(),
				'kode_ujian' 	: localStorage.getItem('kode_ujian'),
				'jenis_ujian' 	: localStorage.getItem('jenis_ujian'),
				// 'jenis_ujian' 	: $('#nilai_akhir').val(),
		        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
			}

			$.ajax({
			    url: '<?php echo site_url() ?>Admin/selesai_ujian/',
			    data: selesai_button,
			    type: 'post',
			    success: function(data){
			    	localStorage.setItem('status_ujian', '');
					$('.bagian_cek_ujian').hide();
					$('#bagian_ujian').hide();
					$('#akhir_jawaban').show();
					$('#nilai_akhir_input').html($('#total_nilai_akhir').html());

			    }
			});
	})
	$('#lihat_nilai_keseluruhan_btn').click(function() {
		$.ajax({
		    url: '<?php echo site_url() ?>Admin/lihat_nilai_keseluruhan/'+localStorage.getItem('kode_ujian'),
		    type: 'post',
		    success: function(data){
	        	$('#lihat_nilai_keseluruhan').html(data);
		    }
		});
	})
</script>

</body>
</html>
