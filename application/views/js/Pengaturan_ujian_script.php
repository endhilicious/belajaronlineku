<script type="text/javascript">
var nomor_id , jenis_ujian_soal;
	// daftar list ujian
	daftar_list_ujian()
function daftar_list_ujian() {
	$.ajax({
	    url: '<?php echo site_url() ?>Admin/daftar_list_ujian/',
	    type: 'post',
	    success: function(data){
        	$('#daftar_list_ujian').html(data);
	    }
	});
}
// kasihkan statement if

function list_soal_ujian_spesifik(nomor_id) {
	$.ajax({
	    url: '<?php echo site_url() ?>Admin/list_soal_ujian_spesifik/'+nomor_id,
	    type: 'post',
	    success: function(data){
        	$('#list_soal_ujian_spesifik').html(data);
	    }
	});
}
	// end 
// fungsi untuk aksi
function soal(nomor_id , jenis_ujian_soal) {
	$('#list_soal_ujian').show();
	$('#list_ujian').hide();
	list_soal_ujian_spesifik(nomor_id);
	$('#id_ujian').val(nomor_id);
	$('#jenis_ujian_soal').val(jenis_ujian_soal);
}
function edit_ujian(nomor_id) {
	$('#tambah_edit_ujian').show();
	$('#list_ujian').hide();
}
function hapus_ujian(nomor_id) {
	var cek1 = confirm('yakin ingin menghapus ujian ?');
	var cek2 = confirm('Data dalam ujian akan hilang dan tidak dapat dikembalikan lagi ! lanjutkan ?');
	if (cek1) {
		if (cek2) {			
			alert('ujian sudah dihapus');
		}
	}
}
function edit_soal(nomor_id) {
	$('#tambah_edit_soal').show();
	$('#list_soal_ujian').hide();
	$('#list_ujian').hide();
}
function hapus_soal(nomor_id) {
	var cek1 = confirm('yakin ingin menghapus soal ?');
	var cek2 = confirm('Data dalam soal akan hilang dan tidak dapat dikembalikan lagi ! lanjutkan ?');
	if (cek1) {
		if (cek2) {			
			alert('soal sudah dihapus');
		}
	}
}

// fungsi pada saat di click
// pada saat kembali ingat untuk di reset semua input
// RESET
/*===================== BAGIAN UJIAN ===================================*/
$('#buat_ujian').click(function() {
	$('#tambah_edit_ujian').show();
	$('#list_ujian').hide();
})
$('#kembali_dari_buat_ujian').click(function() {
	$('#tambah_edit_ujian').hide();
	$('#list_ujian').show();
})

/*===================== SOAL UJIAN ===================================*/
$('#kembali_dari_list_soal').click(function() {
	$('#list_soal_ujian').hide();
	$('#list_ujian').show();
})
$('#tambah_soal_ujian').click(function() {
	$('#tambah_edit_soal').show();
	$('#list_soal_ujian').hide();
	$('#list_ujian').hide();
})
$('#kembali_dari_te_soal').click(function() {
	$('#list_ujian').hide();
	$('#tambah_edit_soal').hide();
	$('#list_soal_ujian').show();
	$('#list_ujian').hide();
})
// script untuk menambah soal
$('#tambah_edit_soal_aksi').click(function () {
	var cek = confirm('apakah ingin menambahkan ?');
	if (cek) {
		var tambah_data = {
			'jenis_bab'	: $('#jenis_mapel_tambah').val(),
			'soal_text' 	: CKEDITOR.instances['soal_text'].getData(),
			'opsi_benar' 	: CKEDITOR.instances['opsi_benar'].getData(),
			'opsi_1' 		: CKEDITOR.instances['opsi_1'].getData(),
			'opsi_2' 		: CKEDITOR.instances['opsi_2'].getData(),
			'opsi_3' 		: CKEDITOR.instances['opsi_3'].getData(),
			'opsi_4' 		: CKEDITOR.instances['opsi_4'].getData(),
			'jenis_mapel'	: $('#jenis_ujian_soal').val(),
			'id_sementara'	: $('#id_ujian').val(),
	        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
		}

		$.ajax({
		    url: '<?php echo site_url() ?>Admin/tambah_data_soal/',
		    data: tambah_data,
		    type: 'post',
		    success: function(data){
		            alert('berhasil di tambah');
		            console.log(tambah_data);
		            var ceklagi = confirm('mau reload ?');
		            if (ceklagi) {
		            	location.reload();
		            }
		    }
		});
	}
});

$('#tambah_edit_ujian_aksi').click(function () {
	var cek = confirm('apakah ingin menambahkan ?');
	if (cek) {
		var tambah_data = {
			'nama_ujian' 	: $('#nama_ujian').val(),
			'jenis_mapel' 	: $('#jenis_mapel').val(),
			'jenis_ujian' 	: $('#jenis_ujian').val(),
			'waktu_ujian' 	: $('#waktu_ujian').val(),
	        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
		}

		$.ajax({
		    url: '<?php echo site_url() ?>Admin/tambah_data_ujian/',
		    data: tambah_data,
		    type: 'post',
		    success: function(data){
		            alert('berhasil di tambah');
		            location.reload();
		    }
		});
	}
});
</script>