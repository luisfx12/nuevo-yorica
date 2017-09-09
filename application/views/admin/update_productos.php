<div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5> <img height="20px" width="20px" src="<?php echo base_url(); ?>assets/img/imgy/add.png">  Formulario Update de  <small class="m-l-sm">PRODUCTOS</small></h5>
                    <div class="ibox-tools">
                    </div>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/home/pro_editpro/<?php echo $datos[0]['id']; ?>" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="clave" class="col-sm-2 control-label">Clave:</label>
                        <div class="col-sm-2">
                            <input placeholder="Clave" type="text" class="campo form-control" id="clave" name="clave" value="<?php echo $datos[0]['clave']; ?>" /><?php echo form_error('clave', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                        </div>
                        <label  for="descrip" class="col-sm-1 control-label">Descripción:</label>
                        <div class="col-sm-5">
                            <input placeholder="Descripción" type="text" class="campo form-control" id="descrip" name="descrip" value="<?php echo $datos[0]['descrip']; ?>" /><?php echo form_error('descrip', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descripc" class="col-sm-2 control-label">Descripción Corta::</label>
                        <div class="col-sm-3">
                            <input placeholder="Descripción Corta" type="text" class="campo form-control" id="descripc" name="descripc" value="<?php echo $datos[0]['descripc']; ?>" /><?php echo form_error('descripc', '<h4><span class=" label label-danger error">', '</h4></span>'); ?>
                        </div>
                        <label for="cant" class="col-sm-2 control-label">Cantidad de Empaque:</label>
                        <div class="col-sm-3">
                            <input placeholder="1" type="number" class="campo form-control" id="cant" name="cant" value="<?php echo $datos[0]['cant']; ?>" /><?php echo form_error('cant', '<h4><span class=" label label-danger error">', '</h4></span>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="recboni" class="col-sm-2 control-label">Requerido P/Bonificar:</label>
                        <div class="col-sm-3">
                            <input placeholder="0" type="number" class="campo form-control" id="recboni" name="recboni" value="<?php echo $datos[0]['recboni']; ?>" /><?php echo form_error('recboni', '<h4><span class=" label label-danger error">', '</h4></span>'); ?>
                        </div>
                        <label for="boni" class="col-sm-2 control-label">Bonificar:</label>
                        <div class="col-sm-3">
                            <input placeholder="0" type="number" class="campo form-control" id="boni" name="boni" value="<?php echo $datos[0]['boni']; ?>" /><?php echo form_error('boni', '<h4><span class=" label label-danger error">', '</h4></span>'); ?>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="unidad" class="col-sm-2 control-label">Unidad:</label>
                        <div class="col-sm-3">
                            <div class="input-group col-sm-12">
                               <select  name="unidad" data-placeholder="Choose a Country..." class="chosen-select col-sm-12"  tabindex="3">
                                <option value="">Seleccionar Unidad</option>
                                <option value="CAJA">CAJA</option>
                                <option value="FARDO">FARDO</option>
                                <option value="PAQUETE">PAQUETE</option>
                                <option value="SACO">SACO</option>
                                <option value="BULTO">BULTO</option>
                                <option value="CUBETA">CUBETA</option>
                                <option value="KILO">KILO</option>
                                <option value="LITRO">LITRO</option>
                                <option value="PIEZA">PIEZA</option>
                                <option value="ROLLO">ROLLO</option>
                            </select>
                            <?php echo form_error('unidad', '<h4><span class=" label label-danger error">', '</h4></span>'); ?>

                        </div>

                    </div>
                    <label for="linea" class=" col-sm-2 control-label">Linea:</label>
                    <div class="col-sm-3">
                        <div class="input-group col-sm-12">
                           <select name="linea" data-placeholder="Choose a Country..." class="chosen-select col-sm-12"  tabindex="3">

                              <?php if ($linea == '0') {?>
                              <option value="">No Existen Lineas Disponibles</option>

                              <?php } else {
    ?>

                                <option value="">Seleccionar Linea</option>
                                <?php $num_abo = count($lineas);
    for ($x = 0; $x < $num_abo; $x++) {?>
                                <?php if ($lineas[$x]['status'] == 1) {?>
                                <option value="<?php echo $lineas[$x]['linea']; ?>"><?php echo $lineas[$x]['linea']; ?></option>
                                <?php }?>
                                <?php }?>
                                <?php }?>
                            </select>
                            <?php echo form_error('linea', '<h4><span class=" label label-danger error">', '</h4></span>'); ?>
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <label for="lista1" class="col-sm-2 control-label">Lista 1:</label>
                    <div class="col-sm-3">
                        <input placeholder="0" type="text" class="campo form-control" id="lista1" name="lista1" value="<?php echo $datos[0]['lista1']; ?>" /><?php echo form_error('lista1', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                    <label for="desc_lis_1" class="col-sm-2 control-label">Descuento 1:</label>
                    <div class="col-sm-3">
                        <input placeholder="0" type="text" class="campo form-control" id="desc_lis_1" name="desc_lis_1" value="<?php echo $datos[0]['desc_lis_1']; ?>" /><?php echo form_error('desc_lis_1', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lista2" class="col-sm-2 control-label">Lista 2:</label>
                    <div class="col-sm-3">
                        <input placeholder="0" type="text" class="campo form-control" id="lista2" name="lista2" value="<?php echo $datos[0]['lista2']; ?>" /><?php echo form_error('lista2', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                    <label for="desc_lis_2" class="col-sm-2 control-label">Descuento 2:</label>
                    <div class="col-sm-3">
                        <input placeholder="0" type="text" class="campo form-control" id="desc_lis_2" name="desc_lis_2" value="<?php echo $datos[0]['desc_lis_2']; ?>" /><?php echo form_error('desc_lis_2', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="lista3" class="col-sm-2 control-label">Lista 3:</label>
                    <div class="col-sm-3">
                        <input placeholder="0" type="texttext" class="campo form-control" id="lista3" name="lista3" value="<?php echo $datos[0]['lista3']; ?>" /><?php echo form_error('lista3', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                    <label for="desc_lis_3" class="col-sm-2 control-label">Descuento 3:</label>
                    <div class="col-sm-3">
                        <input placeholder="0" type="texttext" class="campo form-control" id="desc_lis_3" name="desc_lis_3" value="<?php echo $datos[0]['desc_lis_3']; ?>" /><?php echo form_error('desc_lis_3', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lista4" class="col-sm-2 control-label">Lista 4:</label>
                    <div class="col-sm-3">
                        <input placeholder="0" type="texttext" class="campo form-control" id="lista4" name="lista4" value="<?php echo $datos[0]['lista4']; ?>" /><?php echo form_error('lista4', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                    <label for="desc_lis_4" class="col-sm-2 control-label">Descuento 4:</label>
                    <div class="col-sm-3">
                        <input placeholder="0" placeholder="0" type="texttext" class="campo form-control" id="desc_lis_4" name="desc_lis_4" value="<?php echo $datos[0]['desc_lis_4']; ?>" /><?php echo form_error('desc_lis_4', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lista5" class="col-sm-2 control-label">Lista 5:</label>
                    <div class="col-sm-3">
                        <input placeholder="0" type="texttext" class="campo form-control" id="lista5" name="lista5" value="<?php echo $datos[0]['lista5']; ?>" /><?php echo form_error('lista5', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                    <label for="desc_lis_5" class="col-sm-2 control-label">Descuento 5:</label>
                    <div class="col-sm-3">
                        <input placeholder="0" type="texttext" class="campo form-control" id="desc_lis_5" name="desc_lis_5" value="<?php echo $datos[0]['desc_lis_5']; ?>" /><?php echo form_error('desc_lis_5', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="impuesto" class="col-sm-2 control-label">Impuesto:</label>
                    <div class="col-sm-3">
                        <input placeholder="0" type="texttext" class="campo form-control" id="impuesto" name="impuesto" value="<?php echo $datos[0]['impuesto']; ?>" /><?php echo form_error('impuesto', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                    <label for="precio_com" class="col-sm-2 control-label">Precio de Compra</label>
                    <div class="col-sm-3">
                        <input placeholder="0" type="texttext" class="campo form-control" id="precio_com" name="precio_com" value="<?php echo $datos[0]['precio_com']; ?>" /><?php echo form_error('precio_com', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                </div>

                <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
                <input type="hidden" name="grabar" />
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input class="btn btn-default" type="submit" name="Guardar" value="Guardar" title="Guardar">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>

