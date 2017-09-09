 <div class="wrapper wrapper-content animated fadeIn">                   <br>
    <br>
    <div class="col-sm-12 text-center">
        <img src="<?php echo base_url(); ?>assets/img/imgy/add.png">
        <h2>Agregar Computadoras</h2>
                    <!--<ol class="breadcrumb">
                        <li>
                            <a href="index.html">This is</a>
                        </li>
                        <li class="active">
                            <strong>Breadcrumb</strong>
                        </li>
                    </ol>-->
                </div>

                <div class="container">
                    <div class="row">
                        <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/home/pro_computadora" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="codpc" class="col-sm-3 control-label">Codigo de PC:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="campo form-control" id="codpc" name="codpc" value="<?php echo set_value('codpc'); ?>" /><?php echo form_error('codpc', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nombre" class="col-sm-3 control-label">Nombre de PC:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="campo form-control" id="nombre" name="nombre" value="<?php echo set_value('nombre'); ?>" /><?php echo form_error('nombre', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="respon" class="col-sm-3 control-label">Nombre del Responsable:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="campo form-control" id="respon" name="respon" value="<?php echo set_value('respon'); ?>" /><?php echo form_error('respon', '<h4><span class=" label label-danger error">', '</h4></span>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nom" class="col-sm-3 control-label">Observaciones:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="campo form-control" id="obser" name="obser" value="<?php echo set_value('obser'); ?>" /><?php echo form_error('obser', '<h4><span class=" label label-danger error">', '</h4></span>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pro" class="col-sm-3 control-label">Procesador:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="campo form-control" id="pro" name="pro" value="<?php echo set_value('pro'); ?>" /><?php echo form_error('pro', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ram" class="col-sm-3 control-label">Ram:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="campo form-control" id="ram" name="ram" value="<?php echo set_value('ram'); ?>" /><?php echo form_error('ram', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tmp" class="col-sm-3 control-label">Teclado - Mouse - Pantalla:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="campo form-control" id="tmp" name="tmp" value="<?php echo set_value('tmp'); ?>" /><?php echo form_error('tmp', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="py" class="col-sm-3 control-label">Productos Yorica:</label>
                                <div class="col-sm-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="py" id="py" value="1"> Si
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="py" id="py" value="0" checked="checked"> No
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ti" class="col-sm-3 control-label">TISA:</label>
                                <div class="col-sm-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="ti" id="ti" value="1"> Si
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="ti" id="ti" value="0" checked="checked"> No
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="me" class="col-sm-3 control-label">Los Mezquites:</label>
                                <div class="col-sm-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="me" id="me" value="1"> Si
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="me" id="me" value="0" checked="checked"> No
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="yb" class="col-sm-3 control-label">Yorica Brisas del Valle:</label>
                                <div class="col-sm-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="yb" id="yb" value="1"> Si
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="yb" id="yb" value="0" checked="checked"> No
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ye" class="col-sm-3 control-label">Yorica Estación Luis:</label>
                                <div class="col-sm-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="ye" id="ye" value="1"> Si
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="ye" id="ye" value="0" checked="checked"> No
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ytt" class="col-sm-3 control-label">Yorica Tetanchopo:</label>
                                <div class="col-sm-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="ytt" id="ytt" value="1"> Si
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="ytt" id="ytt" value="0" checked="checked"> No
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ytb" class="col-sm-3 control-label">Yorica Tierra Blanca:</label>
                                <div class="col-sm-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="ytb" id="ytb" value="1"> Si
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="ytb" id="ytb" value="0" checked="checked"> No
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="yv" class="col-sm-3 control-label">Yorica Vías Cuarta:</label>
                                <div class="col-sm-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="yv" id="yv" value="1"> Si
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="yv" id="yv" value="0" checked="checked"> No
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="userfile" class="col-sm-3 control-label">Subir Foto:</label>
                                <div class="col-sm-7">
                                    <input type="file" class="campo form-control" id="userfile" name="userfile">
                                </div>
                            </div>
                            <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
                            <input type="hidden" name="grabar" />
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input class="btn btn-default" type="submit" name="Guardar" value="Guardar" title="Guardar">
                                </div>
                            </div >
                        </form>
                    </br>
                </br>

            </div>
        </div>
    </div>
