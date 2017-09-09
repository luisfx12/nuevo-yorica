

 <div class="wrapper wrapper-content animated fadeIn">
         <?php if ($this->ion_auth->logged_in()) {?>
            <div class="row animated fadeInRight">
                <div class="col-md-4">
                    <div class="ibox float-e-margins">

                            <div class="widget-head-color-box navy-bg p-lg text-center">
                            <div class="m-b-md">
                            <h1 style=" text-transform: uppercase;"><?php echo $this->session->userdata('username'); ?></h1>

                            </div>
                            <center><img width="30%" height="30%" alt="image" class="img-circle img-thumbnail" src="<?php echo base_url(); ?>assets/img/imgy/user.png"></center>
                        </div>
                        <div class="widget-text-box">

                            <h4 class="media-heading">Nombre:</h4>
                            <p><?php echo $this->session->userdata('first_name'); ?></p>
                             <hr>
                        <h4 class="media-heading">Apellido:</h4>
                            <p><?php echo $this->session->userdata('last_name'); ?></p>
                            <hr>
                         <h4 class="media-heading">E-mail:</h4>
                         <p><?php echo $this->session->userdata('email'); ?></p>

                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Actividades</h5>
                            <div class="ibox-tools">

                            </div>
                        </div>
                        <div class="ibox-content">


                        </div>
                    </div>

                </div>
            </div>
            <?php }?>
        </div>
