<div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">

                    <div class="ibox-tools">

                    </div>
                </div>


                <div class="ibox-content">
                    <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/home/pro_group" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Nombre:</label>
                            <div class="col-sm-7">
                                <input type="text" class="campo form-control" id="name" name="name" value="<?php echo set_value('name'); ?>" /><?php echo form_error('name', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-3 control-label">Description:</label>
                            <div class="col-sm-7">
                                <input type="text" class="campo form-control" id="description" name="description" value="<?php echo set_value('description'); ?>" /><?php echo form_error('description', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
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

