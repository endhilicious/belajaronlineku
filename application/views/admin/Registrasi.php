<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign Up | Admin</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url() ?>assets/admin/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url() ?>assets/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url() ?>assets/admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url() ?>assets/admin/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url() ?>assets/admin/css/style.css" rel="stylesheet">
</head>

<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Register <b> Admin</b></a>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_up" method="POST">
                    <div class="msg">Register a new account</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">assignment</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" id="divisi" name="divisi" placeholder="Divisi" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">place</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" id="password" name="password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>
                    <a class="btn btn-block btn-lg bg-pink waves-effect" id="registrasi">Registrasi</a>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="<?php echo site_url() ?>Login">You already have account?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url() ?>assets/admin/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo base_url() ?>assets/admin/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url() ?>assets/admin/js/admin.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/pages/examples/sign-up.js"></script>

    <script type="text/javascript">
	$('#registrasi').click(function() {	
		alert('test');
		// var user_pass = {
		// 	'username' 	: $('#username').val(),
		// 	'password' 	: $('#password').val(),
	 //        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
		// }

		// $.ajax({
		//     url: '<?php echo site_url() ?>Admin/login_aksi/',
		//     data: user_pass,
		//     type: 'post',
		//     success: function(data){
		//     	alert(data);
		//     	// if (data == true ) {
		//      //        alert('Selamat Datang <?php echo $this->session->userdata('nama_lengkap'); ?>');
		//      //        location.href = '<?php echo site_url(); ?>Admin';

		//     	// }else{
		//     	// 	alert('username dan password salah !!');
		//     	// 	$('#username').val('');
		//     	// 	$('#password').val('');
		//     	// }
	 //    	}
		// });
	});    	
    </script>
</body>

</html>