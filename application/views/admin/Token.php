
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
<section class="content">

    <div class="container-fluid" id="list_ujian_token">
        <!-- Data Pelanggan -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            List Ujian
                        </h2>
                        <a class="btn btn-success m-t-15 waves-effect" id="buat_ujian">Buat Ujian</a>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <thead>
                                    <tr>
                                        <th><center>No</center></th>
                                        <th><center>Nama Ujian</center></th>
                                        <th><center>Kode Ujian</center></th>
                                        <th><center>Jenis Mapel</center></th>
                                        <th><center>Jenis Ujian</center></th>
                                        <th><center>Waktu Ujian / detik</center></th>
                                        <th><center>Status Ujian</center></th>
                                        <th colspan="3"><center>Action</center></th>
                                    </tr>
                                </thead>
                                <tbody id="list_token_ujian_spesifik">
                                	<!-- load untuk script ujian -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Data Pelanggan -->
    </div>

    <div class="container-fluid" id="list_token" style="display: none;">
        <!-- Data Pelanggan -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            List Token <b>apaaa</b>
                        </h2>
                    </div>
                    <a class="btn btn-danger btn-lg" id="kembali_dari_list">Kembali</a>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <thead>
                                    <tr>
                                        <th><center>No</center></th>
                                        <th><center>Token</center></th>
                                        <th><center>Jenis Ujian</center></th>
                                        <th><center>Status</center></th>
                                        <!-- <th colspan="3"><center>Action</center></th> -->
                                    </tr>
                                </thead>
                                <tbody id="daftar_token_ujian">
                                    <!-- load untuk script ujian -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Data Pelanggan -->
    </div>
</section>
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
<script>
	var nomor_id , kode_ujian;
	list_token_ujian_spesifik();
	function list_token_ujian_spesifik() {
		$.ajax({
		    url: '<?php echo site_url() ?>Admin/list_token_ujian_spesifik/',
		    type: 'post',
		    success: function(data){
	        	$('#list_token_ujian_spesifik').html(data);
		    }
		});
	}
    function tambah_token(jenis_ujian , kode_ujian) {
        $.ajax({
            url: '<?php echo site_url() ?>Admin/tambah_token/'+jenis_ujian+'/'+kode_ujian,
            type: 'post',
            success: function(data){
                alert('token telah bertambah');
            }
        });
    }
    function lihat_token(kode_ujian) {
        $('#list_token').show();
        $('#list_ujian_token').hide();
        $.ajax({
            url: '<?php echo site_url() ?>Admin/daftar_ujian_token/'+kode_ujian,
            type: 'post',
            success: function(data){
                $('#daftar_token_ujian').html(data);
            }
        });
    }
    $('#kembali_dari_list').click(function() {
        $('#list_token').hide();
        $('#list_ujian_token').show();
    })
</script>