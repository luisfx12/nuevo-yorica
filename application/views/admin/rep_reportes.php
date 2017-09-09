
<div class="wrapper wrapper-content animated fadeIn">
   <div class="col-sm-4">
    <h2>Página Principal</h2>
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
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <img style="box-shadow: 4px 4px 5px #999"  src="<?php echo base_url(); ?>assets/img/imgy/portada.png" class=" img-responsive" >
                            </div>
                            <div class="col-sm-6">
                                <H1>Sistemas Yorica</H1>
                                <H4>Sistema de Bítacora</H4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="col-sm-12">
                        <h2>Listado de producto</h2>
                        <a href="<?php echo base_url(); ?>index.php/home/form_productos" class="btn btn-primary btn-lg active" role="button">Agregar Nueva producto</a>
                    </br>
                </br>
            </br>
            <?php if ($producto == '0') {?>
            <div class="alert alert-warning text-center" role="alert">
                <img class="img-circle img-thumbnail" src="<?php echo base_url(); ?>assets/img/imgy/desert.png">
                NO EXISTEN COMPUTADORAS DADAS DE ALTA </div>
                <?php } else {
    ?>
                    <div class="table">
                        <table class="table table-responsive">
                            <thead>
                                <tr  class="warning">
                                    <th class="center">clave</th>
                                    <th class="center">Descripcion</th>
                                    <th class="center">Existencia</th>
                                    <th class="center">Devoluciones</th>
                                    <th class="center">Unidad</th>
                                    <th class="center">linea</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $num_abo = count($producto);
    for ($x = 0; $x < $num_abo; $x++) {?>
                                <tr class="center">
                                   <th class="center"><?php echo $producto[$x]['clave']; ?></th>
                                   <th class="center"><?php echo $producto[$x]['descrip']; ?></th>
                                   <th class="center"> <?php echo $producto[$x]['cant']; ?></th>
                                   <th class="center"><?php echo $producto[$x]['unidad']; ?></th>
                                   <th class="center"><?php echo $producto[$x]['linea']; ?></th>

                               </tr>
                               <?php }?>
                           </tbody>
                       </table>
                   </div>
                   <?php }?>
               </div>
           </div>
