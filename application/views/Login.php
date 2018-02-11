
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Test Online</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/bootstrap/css/bootstrap.min.css"> 
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/css/main.css">
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
</head>
<body>
	<div class="limiter" id="halaman_login">
		<div class="container-login100" style="background-image: url('<?php echo base_url() ?>assets/login/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" id="bagian_token">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Selamat Datang Di Aplikasi Try Out ONLINE
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Input token dengan benar">
						<span class="label-input100">Masukkan Nomor Token</span>
						<input class="input100" type="text" name="nomor_token" id="nomor_token" placeholder="Masukkan Nomor Token">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onclick="selanjutnya()">
								Cek Token
							</button>							
						</div>
					</div>
				</form>
			</div>

			<br>
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" id="bagian_identitas" style="display: none;">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Selamat Datang Di Aplikasi Try Out ONLINE
					</span>
					<input type="text" id="nomor_token_sukses" hidden disabled>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Input token dengan benar">
						<span class="label-input100">Masukkan Nama</span>
						<input class="input100" type="text" name="nama" id="nama" placeholder="Masukkan Nomor Token">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Input token dengan benar">
						<span class="label-input100">Masukkan Asal Sekolah</span>
						<input class="input100" type="text" name="sekolah" id="sekolah" placeholder="Masukkan Nomor Token">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Input token dengan benar">
						<span class="label-input100">Masukkan NISN</span>
						<input class="input100" type="text" name="nisn" id="nisn" placeholder="Masukkan Nomor Token">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a class="login100-form-btn" onclick="selanjutnya_2()">Masukkan</a>
						</div>
					</div>
				</form>
			</div>

			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" id="bagian_aturan" style="display: none;">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Selamat Datang Di Aplikasi Try Out ONLINE
					</span>
					<button class="login100-form-btn" id="kembali_ke_identitas">
						Kembali Ke Identitas
					</button>
					<center>
						<h1>HAL YANG PERLU DIPERHATIKAN SELAMA UJIAN BERLANGSUNG</h1>
						<ul>
							<li>WAKTU PENGERJAAN SOAL SELAMA <b>60</b> MENIT</li>
							<li>JUMLAH SOAL YANG DI UJIANKAN ADA <b>50</b> NOMOR</li>
							<li>DILARANG KERAS UNTUK MENYONTEK ATAU MENCARI JAWABAN DI REFERENSI MANAPUN</li>
							<li>DILARANG BERTANYA KE TEMAN APALAGI (KE MANTAN)</li>
							<li>DILARANG MENGINGAT MASA LALU BERSAMA MANTAN !! APALAGI HADIAH DARI MANTAN</li>
							<li>DILARANG MENGENANG MASA MASA INDAH BERSAMA MANTAN</li>
							<li>JIKA ANDA BAPER MOHON UNTUK MENGIKUTI UJIAN INI DENGAN SERIUS</li>
							<li>KARNA JIKA ANDA MENJADI ORANG YANG SUKSES , MAKA MANTAN AKAN MENYESAL BERPISAH DENGAN ANDA</li>
							<li>SELAMAT BEKERJA</li>
						</ul>
					</center>
					

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a onclick="mulai()" class="login100-form-btn">Mulai Ujian Sekarang</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- 

	<div id="dropDownSelect1"></div> -->
	
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url() ?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url() ?>assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/login/js/main.js"></script>

	<script type="text/javascript">
		var jenis_ujian_token , kode_ujian_token;
		if (localStorage.getItem("nama") != null) {
			if (localStorage.getItem("waktu_ujian")!= 0 && localStorage.getItem("waktu_ujian") != -1000) {
				console.log(localStorage.getItem("nama"));
				alert('session masih ada');
				location.href = "<?php echo site_url() ?>welcome";
			}else{
		    	alert('maaf '+localStorage.getItem("nama")+' waktu anda untuk menggunakan nomor token '+localStorage.getItem("token")+' sudah habis , masukkan ulang token yang baru');
		    	window.localStorage.clear();
			}
		}
		function selanjutnya() {
			var nomor_token = $("#nomor_token").val();
			if (nomor_token != '') {
				$.ajax({
				    url: '<?php echo site_url() ?>Admin/cek_token/'+nomor_token,
				    type: 'post',
				    success: function(data){
				    	if (data == true) {
				    		alert('silahkan isi biodata');
							$('#bagian_token').hide();
							$('#bagian_aturan').hide();
							$('#bagian_identitas').show();	
							$('#nomor_token_sukses').val(nomor_token);	

							$.ajax({
							    url: '<?php echo site_url() ?>Admin/get_data_token/'+nomor_token,
							    type: 'post',
							    success: function(data){
							    	var obj = JSON.parse(data)
							    	kode_ujian_token = obj[0].kode_ujian;
							    	jenis_ujian_token = obj[0].jenis_ujian;
							    }
							});			    		
				    	}else{
				    		alert('MOHON MAAF NOMOR TOKEN ANDA SALAH ATAU SUDAH DIPAKAI. SILAHKAN ULANGI ATAU HUBUNGI ADMIN');
				    		$("#nomor_token").val('');

				    	}
				    }
				});	
			}else{
				alert('token tidak boleh kosong');
			}
		}
		function selanjutnya_2() {
			var cek = confirm('apakah biodata sudah benar ?');
			if (cek) {
				var tambah_data = {
					'nama' 			: $('#nama').val(),
					'sekolah' 		: $('#sekolah').val(),
					'nisn' 			: $('#nisn').val(),
					'token' 		: $('#nomor_token_sukses').val(),
			        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
				}

				$.ajax({
				    url: '<?php echo site_url() ?>Admin/tambah_biodata/',
				    data: tambah_data,
				    type: 'post',
				    success: function(data){
				       	alert('berhasil di tambah');
						$('#bagian_token').hide();
						$('#bagian_aturan').show();
						$('#bagian_identitas').hide();	
				    }
				});
			}		
		}
		function mulai() {
	    	// simpan di localstorage
			localStorage.setItem('nama', $('#nama').val());
			localStorage.setItem('sekolah', $('#sekolah').val());
			localStorage.setItem('token', $('#nomor_token_sukses').val());
			localStorage.setItem('waktu_ujian', 3600000);
			localStorage.setItem('jenis_ujian', jenis_ujian_token);
			localStorage.setItem('kode_ujian', kode_ujian_token);
			localStorage.setItem('status_ujian', 'berlangsung');

			alert('Ujian Dimulai , Tekan OK');		
			location.href = "<?php echo site_url() ?>welcome";
			    
		}
	</script>
</body>
</html>