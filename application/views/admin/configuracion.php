  <div class="wrapper wrapper-content animated fadeIn">
             <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                    <h5><img height="20px" width="20px" src="<?php echo base_url(); ?>assets/img/imgy/image.png"><small class="m-l-sm"></small>Datos de mi Organización</h5>

                        <div class="ibox-tools">
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Nombre de la Empresa</h5>
                        </div>
                        <div>
                            <div class="ibox-content no-padding border-left-right">

                            </div>
                            <div class="ibox-content profile-content">
                                <input type="text" name="empresa" value="" id="empresa" class="form-control" placeholder="Nombre" required="">
                                <div class="row m-t-lg">

                                </div>
                                <div class="user-button">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-save"></i> Guardar</button>
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                    </div>
                <div class="col-md-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Logotipo de la Empresa</h5>
                            <div class="ibox-tools">

                            </div>
                        </div>
                        <div class="ibox-content">

                            <div>
                                <div class="feed-activity-list">

                                    <div class="feed-element">

                                        <div class="media-body ">
                                            <input type="file" class="campo form-control" id="userfile" name="userfile">

                                       </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-up"></i> Subir</button>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/jeditable/jquery.jeditable.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/dropzone/dropzone.js"></script>


    <script>
        $(document).ready(function(){

            Dropzone.options.myAwesomeDropzone = {

                autoProcessQueue: false,
                uploadMultiple: true,
                parallelUploads: 100,
                maxFiles: 100,

                // Dropzone settings
                init: function() {
                    var myDropzone = this;

                    this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        myDropzone.processQueue();
                    });
                    this.on("sendingmultiple", function() {
                    });
                    this.on("successmultiple", function(files, response) {
                    });
                    this.on("errormultiple", function(files, response) {
                    });
                }

            }

       });
    </script>

    <!-- Page-Level Scripts -->

