<!--<div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Menu" class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <!--<ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Bienvenido a Liga Navojoa+ Admin Theme.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="<?php echo base_url(); ?>assets/img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="<?php echo base_url(); ?>assets/img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="<?php echo base_url(); ?>assets/img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="<?php echo base_url(); ?>index.php/login">
                        <i class="fa fa-sign-out"></i> login
                    </a>
                </li>
            </ul>

        </nav>

        </div>
        <div>
            <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="middle-box text-center loginscreen animated fadeInDown">
            <div class="col-sm-4">
            <img style="box-shadow: 4px 4px 5px #999"  src="<?php echo base_url(); ?>assets/img/imgy/logologin.png" class=" img-circle img-thumbnail  img-responsive" >
             <br>
            </div>
            <h3>Bienvenido a Soporte Técnico Yorica.</h3>

            <p>Iniciar sesión . Para verlo en acción.</p>
            <center><?php echo validation_errors(); ?> </center>
        <center><?php echo form_open('verifylogin'); ?> </center>
             <form class="m-t" role="form" action="index.html">
                <div class="form-group">
                    <input type="email" id="username" name="username" class="form-control" placeholder="Usuario" required="">
                </div>
                <div class="form-group">
                    <input type="password" size="20" id="password" name="password" class="form-control" placeholder="Contraseña" required="">
                </div>
                <button type="submit" value="Login" class="btn btn-primary block full-width m-b">
Iniciar sesión</button>

                <a href="#"><small>
¿Se te olvidó tu contraseña?</small></a>
                <p class="text-muted text-center"><small>
¿No tiene una cuenta?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">
Crea una cuenta</a>
            </form>

            <p class="m-t"> <small>Copyright Yorica Developers  &copy; 2016.</small> </p>
    </div>
            </div>
            <div class="footer">
                <div class="pull-right">
                    SOPORTE TÉCNICO <strong>YORICA</strong>.
                </div>
                <div>
                    <strong>Copyright</strong> Yorica Developers 2016.
                </div>
            </div>

        </div>
        </div>-->
