 <div class="wrapper wrapper-content animated fadeIn">
   <div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5> <img height="20px" width="20px" src="<?php echo base_url(); ?>assets/img/imgy/barcode.png">   Listado de productos <small class="m-l-sm">Ultimos Registros</small></h5>
                <div class="ibox-tools">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus"> </i> Productos</button>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><img height="20px" width="20px" src="<?php echo base_url(); ?>assets/img/imgy/add.png">   Agregar Productos</h4>
                        </div>
                        <div class="modal-body ">
                        <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/home/pro_productos" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="clave" class="col-sm-2 control-label">Clave:</label>
                        <div class="col-sm-4">
                            <input placeholder="Clave" type="text" class="campo form-control" id="clave" name="clave" value="<?php echo set_value('clave'); ?>" /><?php echo form_error('clave', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                        </div>
                        <label  for="descrip" class="col-sm-2 control-label">Descripción:</label>
                        <div class="col-sm-4">
                            <input placeholder="Descripción" type="text" class="campo form-control" id="descrip" name="descrip" value="<?php echo set_value('descrip'); ?>" /><?php echo form_error('descrip', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descripc" class="col-sm-2 control-label">Descripción Corta::</label>
                        <div class="col-sm-4">
                            <input placeholder="Descripción Corta" type="text" class="campo form-control" id="descripc" name="descripc" value="<?php echo set_value('descripc'); ?>" /><?php echo form_error('descripc', '<h4><span class=" label label-danger error">', '</h4></span>'); ?>
                        </div>
                        <label for="cant" class="col-sm-2 control-label">Cantidad de Empaque:</label>
                        <div class="col-sm-4">
                            <input placeholder="1" type="number" class="campo form-control" id="cant" name="cant" value="<?php echo set_value('cant'); ?>" /><?php echo form_error('cant', '<h4><span class=" label label-danger error">', '</h4></span>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="recboni" class="col-sm-2 control-label">Requerido P/Bonificar:</label>
                        <div class="col-sm-4">
                            <input placeholder="0" type="number" class="campo form-control" id="recboni" name="recboni" value="<?php echo set_value('recboni'); ?>" /><?php echo form_error('recboni', '<h4><span class=" label label-danger error">', '</h4></span>'); ?>
                        </div>
                        <label for="boni" class="col-sm-2 control-label">Bonificar:</label>
                        <div class="col-sm-4">
                            <input placeholder="0" type="number" class="campo form-control" id="boni" name="boni" value="<?php echo set_value('boni'); ?>" /><?php echo form_error('boni', '<h4><span class=" label label-danger error">', '</h4></span>'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="unidad" class="col-sm-2 control-label">Unidad:</label>
                        <div class="col-sm-4">
                            <div class="input-group col-sm-12">
                               <select name="unidad" data-placeholder="Choose a Country..."   tabindex="3">
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
                    <div class="col-sm-4">
                        <div class="input-group col-sm-12">
                           <select name="linea" data-placeholder="Choose a Country..."   tabindex="3">

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


                </div>
                <div class="form-group">
                    <label for="lista1" class="col-sm-2 control-label">Lista 1:</label>
                    <div class="col-sm-4">
                        <input placeholder="0" type="text" class="campo form-control" id="lista1" name="lista1" value="<?php echo set_value('lista1'); ?>" />
                    </div>
                    <label for="desc_lis_1" class="col-sm-2 control-label">Descuento 1:</label>
                    <div class="col-sm-3">
                        <input placeholder="0" type="text" class="campo form-control" id="desc_lis_1" name="desc_lis_1" value="<?php echo set_value('desc_lis_1'); ?>" /><?php echo form_error('desc_lis_1', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lista2" class="col-sm-2 control-label">Lista 2:</label>
                    <div class="col-sm-4">
                        <input placeholder="0" type="text" class="campo form-control" id="lista2" name="lista2" value="<?php echo set_value('lista2'); ?>" /><?php echo form_error('lista2', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                    <label for="desc_lis_2" class="col-sm-2 control-label">Descuento 2:</label>
                    <div class="col-sm-4">
                        <input placeholder="0" type="text" class="campo form-control" id="desc_lis_2" name="desc_lis_2" value="<?php echo set_value('desc_lis_2'); ?>" /><?php echo form_error('desc_lis_2', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="lista3" class="col-sm-2 control-label">Lista 3:</label>
                    <div class="col-sm-4">
                        <input placeholder="0" type="text" class="campo form-control" id="lista3" name="lista3" value="<?php echo set_value('lista3'); ?>" /><?php echo form_error('lista3', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                    <label for="desc_lis_3" class="col-sm-2 control-label">Descuento 3:</label>
                    <div class="col-sm-4">
                        <input placeholder="0" type="text" class="campo form-control" id="desc_lis_3" name="desc_lis_3" value="<?php echo set_value('desc_lis_3'); ?>" /><?php echo form_error('desc_lis_3', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lista4" class="col-sm-2 control-label">Lista 4:</label>
                    <div class="col-sm-4">
                        <input placeholder="0" type="text" class="campo form-control" id="lista4" name="lista4" value="<?php echo set_value('lista4'); ?>" /><?php echo form_error('lista4', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                    <label for="desc_lis_4" class="col-sm-2 control-label">Descuento 4:</label>
                    <div class="col-sm-4">
                        <input placeholder="0" placeholder="0" type="text" class="campo form-control" id="desc_lis_4" name="desc_lis_4" value="<?php echo set_value('desc_lis_4'); ?>" /><?php echo form_error('desc_lis_4', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lista5" class="col-sm-2 control-label">Lista 5:</label>
                    <div class="col-sm-4">
                        <input placeholder="0" type="text" class="campo form-control" id="lista5" name="lista5" value="<?php echo set_value('lista5'); ?>" /><?php echo form_error('lista5', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                    <label for="desc_lis_5" class="col-sm-2 control-label">Descuento 5:</label>
                    <div class="col-sm-4">
                        <input placeholder="0" type="text" class="campo form-control" id="desc_lis_5" name="desc_lis_5" value="<?php echo set_value('desc_lis_5'); ?>" /><?php echo form_error('desc_lis_5', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="impuesto" class="col-sm-2 control-label">Impuesto:</label>
                    <div class="col-sm-4">
                        <input placeholder="0" type="text" class="campo form-control" id="impuesto" name="impuesto" value="<?php echo set_value('impuesto'); ?>" /><?php echo form_error('impuesto', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                    <label for="precio_com" class="col-sm-2 control-label">Precio de Compra</label>
                    <div class="col-sm-4>
                        <input placeholder="0" type="text" class="campo form-control" id="precio_com" name="precio_com" value="<?php echo set_value('precio_com'); ?>" /><?php echo form_error('precio_com', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                    </div>
                </div>
                <!--<div class="form-group">
                    <label for="actdesc" class="col-sm-2 control-label">Usar Descuento:</label>
                    <div class="col-sm-3">
                        <select name="Actdesc" placeholder="Seleccionar una Opcion" class="chosen-select col-sm-12"  tabindex="3">
                        <option value="0">NO</option>
                        <option value="1">Si</option>
                        </select>
                    </div>
                    <div class="switch col-sm-5">
                                <div class="onoffswitch">
                                    <input value="" type="checkbox" checked class="onoffswitch-checkbox" id="example1">
                                    <label class="onoffswitch-label" for="example1">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>-->
                        <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
                        <input type="hidden" name="grabar" />
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-12 text-center">
                                <input class="btn btn-default" type="submit" name="Guardar" value="Guardar" title="Guardar">
                                <br>
                                <br>
                            </div>
                        </div >
                    </form>
                         </div>
                         </div>
                         </div>
                         </div>
                        <div class="ibox-content">
                           <?php if ($producto == '0') {?>
                           <div class=" alert alert-warning text-center" role="alert">
                            <img class="img-circle img-thumbnail" src="<?php echo base_url(); ?>assets/img/imgy/desert.png">
                            NO EXISTEN PRODUCTOS DADAS DE ALTA </div>
                            <?php } else {
    ?>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                                        <thead>
                                            <tr>
                                             <th class="center">Clave</th>
                                             <th class="center">Descripcion</th>
                                             <th class="center">Linea</th>
                                             <th class="center">Unidad</th>
                                             <th class="center">Cant Empaque</th>
                                             <th class="center">Lista 1</th>
                                             <th class="center">Lista 2</th>
                                             <th class="center">Lista 3</th>
                                             <th class="center">Lista 4</th>
                                             <th class="center">Lista 5</th>
                                             <th class="center">Descuento 1</th>
                                             <th class="center">Descuento 2</th>
                                             <th class="center">Descuento 3</th>
                                             <th class="center">Descuento 4</th>
                                             <th class="center">Descuento 5</th>
                                             <th class="center">Impuestos</th>
                                             <th class="center">Descuento</th>
                                             <th class="center">Status</th>
                                             <th class="center">Opciones</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                        <?php $num_abo = count($producto);
    for ($x = 0; $x < $num_abo; $x++) {?>
                                        <tr class="gradeX">
                                            <td class="center"><?php echo $producto[$x]['clave']; ?></td>
                                            <td class="center"><?php echo $producto[$x]['descrip']; ?></td>
                                            <td class="center"><?php echo $producto[$x]['linea']; ?></td>
                                            <td class="center"><?php echo $producto[$x]['unidad']; ?></td>
                                            <td class="center"><?php echo $producto[$x]['cant']; ?></td>
                                            <td class="center"><?php echo $producto[$x]['impuesto'] ?> % </td>

                                            <?php if ($producto[$x]['desc'] == "1") {?> <td class="center"><span class="label label-primary">Si</span></td> <?php } else {?> <td class="center"><span class="label label-danger">No</span></td> <?php }?>
                                            <?php if ($producto[$x]['status'] == "1") {?> <td class="center"><span class="label label-success">Activo</span></td> <?php } else {?> <td class="center"><span class="label label-danger">Inactivo</span></td> <?php }?>
                                            <?php if ($producto[$x]['status'] == "1") {?> <td class="center"><a href="<?php echo base_url(); ?>index.php/home/proEditForm/<?php echo $producto[$x]['id']; ?>" class="btn btn-warning btn-xs" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                            <a href="<?php echo base_url(); ?>index.php/home/ProEliminar/<?php echo $producto[$x]['id']; ?>" class="btn btn-danger btn-xs" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                                            <?php } else {?> <td class="center"><a href="<?php echo base_url(); ?>index.php/home/ProActivar/<?php echo $producto[$x]['id']; ?>" class="btn btn-info btn-xs" role="button">Activar</a></td> <?php }?>
                                        </tr>
                                    </tr>
                                    <?php }?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="center">Clave</th>
                                        <th class="center">Descripcion</th>
                                        <th class="center">Linea</th>
                                        <th class="center">Unidad</th>
                                        <th class="center">Cant Empaque</th>
                                        <th class="center">Lista 1</th>
                                        <th class="center">Lista 2</th>
                                        <th class="center">Lista 3</th>
                                        <th class="center">Lista 4</th>
                                        <th class="center">Lista 5</th>
                                        <th class="center">Descuento 1</th>
                                        <th class="center">Descuento 2</th>
                                        <th class="center">Descuento 3</th>
                                        <th class="center">Descuento 4</th>
                                        <th class="center">Descuento 5</th>
                                        <th class="center">Impuestos</th>
                                        <th class="center">Descuento</th>
                                        <th class="center">Status</th>
                                        <th class="center">Opciones</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>

