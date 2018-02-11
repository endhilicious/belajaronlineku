<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
<section class="content">

    <div class="container-fluid" id="list_ujian">
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
                                <tbody id="daftar_list_ujian">
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

    <div class="container-fluid" id="tambah_edit_ujian" style="display: none;">
        <!-- Form Tambah Ujian -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Tambah / Edit</b> Ujian
                        </h2>
                        <a class="btn btn-danger m-t-15 waves-effect" id="kembali_dari_buat_ujian">Kembali</a>
                    </div>
                    <div class="body">
                            <label for="nama_ujian">Nama Ujian</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="nama_ujian" name="nama_ujian" placeholder="masukkan nama Ujian" required>
                                </div>
                            </div>
                            <label>Jenis Mata Pelajaran</label>
                            <div class="form-group">
                                <div class="form-line">
                                	<select class="form-control" id="jenis_mapel">
                                		<option value="campuran">campuran</option>
                                		<option value="matematika">matematika</option>
                                		<option value="fisika">fisika</option>
                                		<option value="kimia">kimia</option>
                                		<option value="biologi">biologi</option>
                                		<option value="b_indonesia">bahasa indonesia</option>
                                		<option value="b_inggris">bahasa inggris</option>
                                		<option value="sejarah">sejarah</option>
                                		<option value="sosiologi">sosiologi</option>
                                		<option value="geografi">geografi</option>
                                		<option value="ekonomi">ekonomi</option>
                                		<option value="tpa">tpa</option>
                                	</select>
                                </div>
                            </div>
                            <label>Jenis Ujian</label>
                            <div class="form-group">
                                <div class="form-line">
                                	<select class="form-control" id="jenis_ujian">
                                		<option value="sbmptn">sbmptn</option>
                                		<option value="un">un</option>
                                		<option value="uas">uas</option>
                                		<option value="uts">uts</option>
                                		<option value="kuis">kuis</option>
                                		<option value="mandiri">mandiri</option>
                                	</select>
                                </div>
                            </div>
                            <label for="waktu_ujian">Waktu Ujian</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="waktu_ujian" name="waktu_ujian" placeholder="masukkan Waktu Ujian" required>
                                </div>
                            </div>
                            <a class="btn btn-primary m-t-15 waves-effect" id="tambah_edit_ujian_aksi">submit></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Tambah Ujian -->
    </div>

    <div class="container-fluid" id="tambah_edit_soal" style="display: none;">
        <!-- Form Tambah soal -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Tambah / Edit</b> Soal
                        </h2>
                        <a class="btn btn-danger m-t-15 waves-effect float-right" id="kembali_dari_te_soal">Kembali</a>
                    </div>
                    <div class="body">
                        <form id="sign_up" method="POST">

                            <label for="id_ujian">id ujian</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="id_ujian" disabled>
                                    <input type="text" id="jenis_ujian_soal" disabled>
                                </div>
                            </div>
                            <label for="Soal">Jenis Mapel</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="jenis_mapel_tambah" id="jenis_mapel_tambah">
                                        <option value="matematika">matematika</option>
                                        <option value="fisika">fisika</option>
                                        <option value="TPA">TPA</option>
                                        <option value="bahasa_inggris">bahasa inggris</option>
                                    </select>
                                </div>
                            </div>
                            <label for="Soal">Soal</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="soal_text" id="soal_text"></textarea>
                                </div>
                            </div>
                            <label for="opsi_benar">Opsi Benar</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="opsi_benar" id="opsi_benar"></textarea>
                                </div>
                            </div>
                            <label for="email_address">Opsi 1</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="opsi_1" id="opsi_1"></textarea>
                                </div>
                            </div>
                            <label for="email_address">Opsi 2</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="opsi_2" id="opsi_2"></textarea>
                                </div>
                            </div>
                            <label for="email_address">Opsi 3</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="opsi_3" id="opsi_3"></textarea>
                                </div>
                            </div>
                            <label for="email_address">Opsi 4</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="opsi_4" id="opsi_4"></textarea>
                                </div>
                            </div>

                            <a class="btn btn-primary m-t-15 waves-effect" id="tambah_edit_soal_aksi">submit</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Tambah soal -->
    </div>

	    <!-- Multiple Items To Be Open -->
    <div class="container-fluid" id="list_soal_ujian" style="display: none;">
	    <div class="row clearfix">
	        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	            <div class="card">
	                <div class="header">
	                    <h2>
	                        List Soal
	                        <!-- <small>Don't use <code>data-parent</code> attributes</small> -->
	                    </h2>
                        <a class="btn btn-success m-t-15 waves-effect float-right" id="tambah_soal_ujian">Tambah Soal</a>
                        <a class="btn btn-danger m-t-15 waves-effect float-right" id="kembali_dari_list_soal">Kembali</a>
	                </div>
	                <div class="body">
	                    <div class="row clearfix">
	                        <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
	                            <div class="panel-group full-body" id="accordion_19" role="tablist" aria-multiselectable="true">
	                                <div class="panel" id="list_soal_ujian_spesifik">

	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- #END# Multiple Items To Be Open -->
    </div>
</section>
<script>
	// Always provide paths that start with a slash character ("/").
	CKEDITOR.plugins.addExternal('ckeditor_wiris', 'https://www.wiris.net/demo/plugins/ckeditor/', 'plugin.js');

	CKEDITOR.replace( 'soal_text', {
		extraPlugins: 'ckeditor_wiris'
	} );
	CKEDITOR.replace( 'opsi_benar', {
		extraPlugins: 'ckeditor_wiris'
	} );
	CKEDITOR.replace( 'opsi_1', {
		extraPlugins: 'ckeditor_wiris'
	} );
	CKEDITOR.replace( 'opsi_2', {
		extraPlugins: 'ckeditor_wiris'
	} );
	CKEDITOR.replace( 'opsi_3', {
		extraPlugins: 'ckeditor_wiris'
	} );
	CKEDITOR.replace( 'opsi_4', {
		extraPlugins: 'ckeditor_wiris'
	} );
</script>