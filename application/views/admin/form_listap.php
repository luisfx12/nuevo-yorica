
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

<div class="wrapper wrapper-content animated fadeIn">
    <div ng-app="" class="row ">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5> <img height="20px" width="20px" src="<?php echo base_url(); ?>assets/img/imgy/add.png">  AGREGAR <small class="m-l-sm">LISTAS DE PRECIO</small></h5>
                    <div class="ibox-tools">
                    </div>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/home/pro_lineas" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="linea" class="col-sm-3 control-label">lista 1-{{name1}}:</label>
                            <div class="col-sm-7">
                                <input type="text" class="campo form-control" id="linea" name="linea" ng-model="name1" value="<?php echo set_value('linea'); ?>" /><?php echo form_error('linea', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="linea" class="col-sm-3 control-label">lista 2-{{name2}}:</label>
                            <div class="col-sm-7">
                                <input type="text" class="campo form-control" id="linea" name="linea" ng-model="name2" value="<?php echo set_value('linea'); ?>" /><?php echo form_error('linea', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="linea" class="col-sm-3 control-label">lista 3-{{name3}}:</label>
                            <div class="col-sm-7">
                                <input type="text" class="campo form-control" id="linea" name="linea" ng-model="name3" value="<?php echo set_value('linea'); ?>" /><?php echo form_error('linea', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="linea" class="col-sm-3 control-label">lista 4-{{name4}}:</label>
                            <div class="col-sm-7">
                                <input type="text" class="campo form-control" id="linea" name="linea" ng-model="name4" value="<?php echo set_value('linea'); ?>" /><?php echo form_error('linea', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="linea" class="col-sm-3 control-label">lista 5-{{name5}}:</label>
                            <div class="col-sm-7">
                                <input type="text" class="campo form-control" id="linea" name="linea" ng-model="name5" value="<?php echo set_value('linea'); ?>" /><?php echo form_error('linea', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
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
