<div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5> <img height="20px" width="20px" src="<?php echo base_url(); ?>assets/img/imgy/add.png">  AGREGAR <small class="m-l-sm">TELÉFONOS</small></h5>
                    <div class="ibox-tools">

                    </div>
                </div>
                <div class="ibox-content">
                 <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/home/pro_telefono" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre" class="col-sm-3 control-label">Nombre:</label>
                        <div class="col-sm-7">
                            <input type="text" class="campo form-control" id="nombre" name="nombre" value="<?php echo set_value('nombre'); ?>" /><?php echo form_error('nombre', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telefono" class="col-sm-3 control-label">Teléfono :</label>
                        <div class="col-sm-7">
                            <input type="text" data-mask="(999) 999-9999" class="form-control" id="telefono" name="telefono" value="<?php echo set_value('telefono'); ?>" /><?php echo form_error('telefono', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="categoria" class=" col-sm-3 control-label">Categoria:</label>
                        <div class="col-sm-7">
                            <div class="input-group col-sm-12">
                               <select name="categoria" data-placeholder="Choose a Country..." class="chosen-select col-sm-12"  tabindex="3">
                                  <?php if ($categoria == '0') {?>
                                  <option value="">No Existen Lineas Disponibles</option>

                                  <?php } else {
    ?>


                                    <option value="">Seleccionar Linea</option>
                                    <?php $num_abo = count($categorias);
    for ($x = 0; $x < $num_abo; $x++) {?>

                                    <?php if ($categorias[$x]['status'] == 1) {?>

                                    <option value="<?php echo $categorias[$x]['categoria']; ?>"><?php echo $categorias[$x]['categoria']; ?></option>

                                    <?php }?>
                                    <?php }?>
                                    <?php }?>
                                </select>
                                <?php echo form_error('categoria', '<h4><span class=" label label-danger error">', '</h4></span>'); ?>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
                    <input type="hidden" name="grabar" />
                    <div class="form-group text-center">
                        <div class="col-sm-offset-2 col-sm-12">
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






