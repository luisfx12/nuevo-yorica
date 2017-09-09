<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>VENTA EN RUTA | ( EMPRESA ) </title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="<?php echo base_url(); ?>assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <!-- Gritter -->
    <link href="<?php echo base_url(); ?>assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/plugins/chosen/chosen.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/plugins/cropper/cropper.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/plugins/switchery/switchery.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/plugins/clockpicker/clockpicker.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/plugins/select2/select2.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/dropzone/basic.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/dropzone/dropzone.css" rel="stylesheet">



</head>



<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <center><img class="img-responsive img-circle img-thumbnail" width="80%"  src="<?php echo base_url(); ?>assets/img/imgy/logologin.png"></center>
            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                      <h2>Ingresar</h2>
                      <?php echo form_open("auth/login"); ?>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="identity" required="">

                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required="">
                        </div>
                         <div class="form-group">
                        <?php echo lang('login_remember_label', 'remember'); ?>
                        <?php echo form_checkbox('remember', '1', false, 'id="remember"'); ?>
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                        <a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a>
                        <!--<a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
                        <?php echo form_close(); ?>
                    <p class="m-t">
                        <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>-->
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
               SISTEMA VENTA EN RUTA <strong>( EMPRESA )</strong>.
            </div>
            <div class="col-md-6 text-right">
               <strong>Copyright</strong> Yorica Developers &copy; 2016-<?php echo date('Y'); ?>.
            </div>
        </div>
    </div>

</body>

</html>

