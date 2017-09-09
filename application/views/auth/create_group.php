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

<body class="ng-app">
<div id="wrapper" style=" border-top: solid #19DFB4;">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header" style=" background: #326477; border-bottom: thick dotted #2f4050;">
                <center>
                    <?php if($this->ion_auth->logged_in()) {  ?>
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" style="box-shadow: 2px 2px 3px #413F3F" class="img-circle img-thumbnail " src="<?php echo base_url(); ?>assets/img/imgy/user.png" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                         <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('first_name')." ".$this->session->userdata('last_name');?></strong>

                            <span class="text-muted text-xs block">Opciones<b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="<?php echo base_url(); ?>index.php/home/perfil">Perfil  <span class="fa fa-tasks"></a></li>
                            <!--<li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>-->
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>index.php/auth/logout">Cerrar sesión    <span class="fa fa-sign-out"></span></a></li>

                        </ul>
                        
                    </div>
              <?php  } ?>
                    <div class="logo-element">
                        <img width="70%" height="70%" src="<?php echo base_url(); ?>assets/img/imgy/logologin.png" class=" img-circle img-thumbnail  img-responsive" >
                    </div>
                    </center>
                </li>
                <?php if($this->ion_auth->logged_in()) {  ?>
                <!--<li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Empresas</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url(); ?>">Productos Yorica</a></li>
                        <li><a href="<?php echo base_url(); ?>">TISA</a></li>
                        <li><a href="<?php echo base_url(); ?>">Los Mezquites</a></li>
                        <li><a href="<?php echo base_url(); ?>">Yorica Brisas Del Valle</a></li>
                        <li><a href="<?php echo base_url(); ?>">Yorica Estación Luis</a></li>
                        <li><a href="<?php echo base_url(); ?>">Yorica Tetanchopo</a></li>
                        <li><a href="<?php echo base_url(); ?>">Yorica Tierra Blanca</a></li>
                        <li><a href="<?php echo base_url(); ?>">Yorica vías cuarta</a></li>
                        
                    </ul>
                </li>-->
                <?php } ?>
               
                 <li>
                    <a href=""><i class="fa fa-tint"></i> <span class="nav-label">Purificadoras</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url(); ?>index.php/home/bitacora">Bitacora de Agua</a></li>
                        
                    </ul>
                </li>
                              
                <li>
                    <a href=""><i class="fa fa-phone"></i> <span class="nav-label">Directorio Teléfonico</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url(); ?>index.php/home/telefonos">Teléfonos</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/Categorias">Categorias</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="layouts.html"><i class="fa fa-male"></i> <span class="nav-label">Clientes</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url(); ?>index.php/home/cons_cliente">Consulta de Clientes</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/cons_alta_cliente">Consulta de Altas de Clientes</a></li>
                    </ul>
                </li>
                 
                
                <li>
                    <a href="layouts.html"><i class="fa fa-pie-chart"></i> <span class="nav-label">Ventas</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url(); ?>index.php/home/cons_venta">Consulta de Ventas</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="layouts.html"><i class="fa fa-car"></i><span class="nav-label">Vendedores</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url(); ?>index.php/home/gastos">Gastos Opertivos</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/agenda_sem">Agenda Semanal</a></li>

                    </ul>
                </li>
               

                <li >
                    <a href="#"><i class="fa fa-cogs"></i><span class="nav-label">Productos</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse ">
                        <li><a href="<?php echo base_url(); ?>index.php/home/productos">Productos</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/lineas">Lineas de productos</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/inventario">Carga a inventario</a></li>                        
                    </ul>
                </li>
                
                <?php if($this->session->userdata('groups_id')==1 ) { ?>
                <li class="special_link" >
                    <a href=""><i class="fa fa-cog"></i> <span class="nav-label">Administrativo</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url(); ?>/index.php/home/usuarios">Usuarios</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/grupos">Grupos</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/lista_precio">Lista de Precios</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/configuracion">Configuración</a></li>
                    </ul>
                </li>               
            </ul>
            <?php  } ?>
        </div>
    </nav>        
</div>
<div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Menu" class="form-control" name="top-search" id="top-search" disabled>
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>  
                    <a href="<?php echo base_url(); ?>index.php/auth/logout">
                        <i class="fa fa-sign-out"></i> Cerrar Sesión
                    </a>
                </li>                
            </ul>
        </nav>                
    </div>
    <div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>SISTEMA ( EMPRESA )</h2>
        <!--<ol class="breadcrumb">
            <li>
            
            </li>
            <li class="active">
              
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
    </div>-->
</div>
</div>
<div class="wrapper wrapper-content animated fadeIn"> 
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
            <div class="ibox-title">
                        <h5> <img height="20px" width="20px" src="<?php echo base_url(); ?>assets/img/imgy/add.png">  CREAR <small class="m-l-sm">GRUPOS</small></h5>
                        <div class="ibox-tools">
                           
                        </div>
                    </div>


                <div class="ibox-content"> 
<h1><?php echo lang('create_group_heading');?></h1>
<p><?php echo lang('create_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_group");?>

      <p>
            <label for="linea" class="col-sm-3 control-label"><?php echo lang('create_group_name_label', 'group_name');?> <br /></label>
            <?php echo form_input($group_name);?>
      </p>

      <p>
             <label for="linea" class="col-sm-3 control-label"><?php echo lang('create_group_desc_label', 'description');?> <br /></label>
            <?php echo form_input($description);?>
      </p>
       <input class="btn btn-default" type="submit" name="submit" value="submit" title="Guardar">
      

<?php echo form_close();?>
</div></div></div></div></div>

            <div class="footer">
                <div class="pull-right">
                   SISTEMA VENTA EN RUTA <strong>( EMPRESA )</strong>.
                </div>
                <div>
                    <strong>Copyright</strong> Yorica Developers &copy; 2016-<?php echo date('Y');?>.
                </div>
            </div>
     </div>

    <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>


    <!-- Flot -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/flot/jquery.flot.pie.js"></script>


    <!-- Peity     <script src="<?php echo base_url(); ?>assets/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/demo/peity-demo.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url(); ?>assets/js/inspinia.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?php echo base_url(); ?>assets/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="<?php echo base_url(); ?>assets/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/toastr/toastr.min.js"></script>

    <!-- footable -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/footable/footable.all.min.js"></script>
    
     <!-- ckeditor -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ckeditor/ckeditor.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Chosen -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/chosen/chosen.jquery.js"></script>

   <!-- JSKnob -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/jsKnob/jquery.knob.js"></script>

   <!-- Input Mask-->
    <script src="<?php echo base_url(); ?>assets/js/plugins/jasny/jasny-bootstrap.min.js"></script>

   <!-- Data picker -->
   <script src="<?php echo base_url(); ?>assets/js/plugins/datapicker/bootstrap-datepicker.js"></script>

   <!-- NouSlider -->
   <script src="<?php echo base_url(); ?>assets/js/plugins/nouslider/jquery.nouislider.min.js"></script>

   <!-- Switchery -->
   <script src="<?php echo base_url(); ?>assets/js/plugins/switchery/switchery.js"></script>

    <!-- IonRangeSlider -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/iCheck/icheck.min.js"></script>

    <!-- MENU -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Color picker -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

    <!-- Clock picker -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/clockpicker/clockpicker.js"></script>

    <!-- Image cropper -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/cropper/cropper.min.js"></script>

    <!-- Date range use moment.js same as full calendar plugin -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/fullcalendar/moment.min.js"></script>

    <!-- Date range picker -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Select2 -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/select2/select2.full.min.js"></script>

    <!-- TouchSpin -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>