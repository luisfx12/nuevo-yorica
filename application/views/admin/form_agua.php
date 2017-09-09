 <div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5> <img height="20px" width="20px" src="<?php echo base_url(); ?>assets/img/imgy/add.png">   Nivel del Agua <small class="m-l-sm">Registros</small></h5>
                    <div class="ibox-tools">
                    </div>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/home/pro_agua" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="ant_CA" class="col-sm-3 control-label">Antes de CA</label>
                            <div class="col-sm-7">
                                <input type="text" class="campo form-control" id="ant_CA" name="ant_CA" value="<?php echo set_value('ant_CA'); ?>" /><?php echo form_error('ant_CA', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="des_CA" class="col-sm-3 control-label">Despues de CA</label>
                            <div class="col-sm-7">
                                <input type="text" class="campo form-control" id="des_CA" name="des_CA" value="<?php echo set_value('des_CA'); ?>" /><?php echo form_error('des_CA', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dureza" class="col-sm-3 control-label">Dureza (ppm)**</label>
                            <div class="col-sm-7">
                                <input type="text" class="campo form-control" id="dureza" name="dureza" value="<?php echo set_value('dureza'); ?>" /><?php echo form_error('dureza', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dis_total" class="col-sm-3 control-label">Disueltos Totales</label>
                            <div class="col-sm-7">
                                <input type="text" class="campo form-control" id="dis_total" name="dis_total" value="<?php echo set_value('dis_total'); ?>" /><?php echo form_error('dis_total', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="des_agua" class="col-sm-3 control-label">Desinfección de tuberia de cloro</label>
                            <div class="col-sm-7">
                                <input type="text" class="campo form-control" id="des_agua" name="des_agua" value="<?php echo set_value('des_agua'); ?>" /><?php echo form_error('des_agua', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                            </div>
                        </div>

                        <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
                        <input type="hidden" name="grabar" />
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input class="btn btn-default" type="submit" name="Guardar" value="Guardar" title="Guardar">
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                    </form>
                </div>
                <div class="ibox-footer">
                    <span class="pull-right">
                      The righ side of the footer
                  </span>
                  This is simple footer example
              </div>

          </div>
      </div>
  </div>
</div>

