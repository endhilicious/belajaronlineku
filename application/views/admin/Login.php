<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Admin</title>
    <!-- Favicon-->
    <!-- nnti ganti iconnya jadi icon tesonlineku -->
    <link rel="icon" href="<?php echo base_url() ?>assets/admin/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url() ?>assets/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <!-- <link href="<?php echo base_url() ?>assets/admin/plugins/node-waves/waves.css" rel="stylesheet" /> -->

    <!-- Animation Css -->
    <link href="<?php echo base_url() ?>assets/admin/plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="<?php echo base_url() ?>assets/admin/css/style.css" rel="stylesheet">

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.js"></script>
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a>Login<b> Admin</b></a>
        </div>
        <div class="card">
            <div class="body">
                <form method="POST" action="<?php site_url() ?>Login/login_aksi">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <input type="submit" name="submit" class="btn bg-blue" id="masuk" value="MASUK">
                            <!-- <a class="btn btn-block bg-blue" id="masuk">masuk</a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Validation Plugin Js -->
    <script src="<?php echo base_url() ?>assets/admin/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <!-- <script src="<?php echo base_url() ?><a href=""></a>ssets/admin/js/admin.js"></script> -->
    <script src="<?php echo base_url() ?>assets/admin/js/pages/examples/sign-in.js"></script>
</body>

</html>