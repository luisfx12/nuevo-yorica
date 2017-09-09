
 <div class="wrapper wrapper-content animated fadeIn">
                 <div class="col-sm-4">
                    <h2>Página Principal</h2>
                </div>

                <div class="container">
                <div class="row">
                <div class="col-sm-12">
                        <div class="col-sm-6">
                            <img style="box-shadow: 4px 4px 5px #999"  src="<?php echo base_url(); ?>assets/img/imgy/portada.png" class=" img-responsive" >
                        </div>
                        <div class="col-sm-6">
                            <H1>Sistemas Yorica</H1>
                            <H4>Sistema de Bitácora</H4>
                        </div>
                   </div>

                </div>
            </div>
            </div>
             <div class="row">
            <div class="col-sm-12 text-center">
            <div class="col-sm-12">
            <h2>Listado de Computadora</h2>
            <a href="<?php echo base_url(); ?>index.php/home/form_computadora" class="btn btn-primary btn-lg active" role="button">Agregar Nueva Computadora</a>
            </br>
            </br>
            </br>


        <?php if ($computadora == '0') {?>
            <div class="alert alert-warning text-center" role="alert">
            <img class="img-circle img-thumbnail" src="<?php echo base_url(); ?>assets/img/imgy/desert.png">
            NO EXISTEN COMPUTADORAS DADAS DE ALTA </div>
            <?php } else {
    ?>
            <div class="table">
            <table class="table table-responsive">
                <thead>
                    <tr  class="warning">
                        <th class="center">Foto</th>
                        <th class="center">COD-PC</th>
                        <th class="center">Nombre</th>
                        <th class="center">Responsable</th>
                        <th class="center">observaciones</th>
                        <th class="center">procesador</th>
                        <th class="center">ram</th>
                        <th class="center">tecla-mou-pant</th>
                        <th class="center">PY</th>
                        <th class="center">TI</th>
                        <th class="center">ME</th>
                        <th class="center">YB</th>
                        <th class="center">YE</th>
                        <th class="center">YTT</th>
                        <th class="center">YTB</th>
                        <th class="center">YV</th>
                        <th class="center">Opciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $num_abo = count($computadora);
    for ($x = 0; $x < $num_abo; $x++) {?>
                        <tr class="center">
                           <th class="center"><img width="25px" height="25px" src="<?php echo base_url(); ?>assets/computadoras/sin_foto.png" alt=""></th>
                             <th class="center"><?php echo $computadora[$x]['codpc']; ?></th>
                             <th class="center"><?php echo $computadora[$x]['nombre']; ?></th>
                            <th class="center"><?php echo $computadora[$x]['respon']; ?></th>
                            <th class="center"><?php echo $computadora[$x]['obser']; ?></th>
                            <th class="center"><?php echo $computadora[$x]['pro']; ?></th>
                            <th class="center"><?php echo $computadora[$x]['ram']; ?></th>
                            <th class="center"><?php echo $computadora[$x]['tmp']; ?></th>
                            <?php if ($computadora[$x]['py'] == "1") {?> <th class="center"><span class="label label-success">Si</span></th> <?php } else {?> <th class="center"><span class="label label-danger">No</span></th> <?php }?>
                            <?php if ($computadora[$x]['ti'] == "1") {?> <th class="center"><span class="label label-success">Si</span></th> <?php } else {?> <th class="center"><span class="label label-danger">No</span></th> <?php }?>
                            <?php if ($computadora[$x]['me'] == "1") {?> <th class="center"><span class="label label-success">Si</span></th> <?php } else {?> <th class="center"><span class="label label-danger">No</span></th> <?php }?>
                            <?php if ($computadora[$x]['yb'] == "1") {?> <th class="center"><span class="label label-success">Si</span></th> <?php } else {?> <th class="center"><span class="label label-danger">No</span></th> <?php }?>
                            <?php if ($computadora[$x]['ye'] == "1") {?> <th class="center"><span class="label label-success">Si</span></th> <?php } else {?> <th class="center"><span class="label label-danger">No</span></th> <?php }?>
                            <?php if ($computadora[$x]['ytt'] == "1") {?> <th class="center"><span class="label label-success">Si</span></th> <?php } else {?> <th class="center"><span class="label label-danger">No</span></th> <?php }?>
                            <?php if ($computadora[$x]['ytb'] == "1") {?> <th class="center"><span class="label label-success">Si</span></th> <?php } else {?> <th class="center"><span class="label label-danger">No</span></th> <?php }?>
                            <?php if ($computadora[$x]['yv'] == "1") {?> <th class="center"><span class="label label-success">Si</span></th> <?php } else {?> <th class="center"><span class="label label-danger">No</span></th> <?php }?>
                           <?php if ($computadora[$x]['status'] == "1") {?> <th class="center"><a href="<?php echo base_url(); ?>index.php/home/CompEditForm/<?php echo $computadora[$x]['id']; ?>" class="btn btn-warning btn-xs" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                    <a href="<?php echo base_url(); ?>index.php/home/CompEliminar/<?php echo $computadora[$x]['id']; ?>" class="btn btn-danger btn-xs" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></th>
                                <?php } else {?> <th class="center"><a href="<?php echo base_url(); ?>index.php/home/CompActivar/<?php echo $computadora[$x]['id']; ?>" class="btn btn-info btn-xs" role="button">Activar</a></th> <?php }?>
                        </tr>
                        <?php }?>
                </tbody>
            </table>
            </div>
            <?php }?>
            </div>
        </div>




