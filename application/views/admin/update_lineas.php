
<div class="wrapper wrapper-content animated fadeIn">
   <br>
   <br>
   <div class="col-sm-12 text-center">
    <img src="<?php echo base_url(); ?>assets/img/imgy/rotate.png">

    <h2>Update Lineas</h2>
                    <!--<ol class="breadcrumb">
                        <li>
                            <a href="index.html">This is</a>
                        </li>
                        <li class="active">
                            <strong>Breadcrumb</strong>
                        </li>
                    </ol>-->
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="col-sm-12">
                            <div class="clients-area center wow fadeInDown">
                                <h2>Formulario Update de Lineas</h2>
                                <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/home/pro_editlin/<?php echo $datos[0]['id']; ?>" method="post" enctype="multipart/form-data">
                                 <div class="form-group">
                                    <label for="linea" class="col-sm-3 control-label">Lineas:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="campo form-control" id="linea" name="linea" value="<?php echo $datos[0]['linea']; ?>"/><?php echo form_error('linea', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
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

                    </div>
                </div>
            </div>
