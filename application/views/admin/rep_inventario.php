 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
 <link href="<?php echo base_url(); ?>assets/css/plugins/footable/footable.core.css" rel="stylesheet">

 <div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                   <h5><img height="20px" width="20px" src="<?php echo base_url(); ?>assets/img/imgy/factory.png">  Cargas a Inventario <small class="m-l-sm">Productos para carga</small></h5>
               </div>
               <div class="ibox-content">
                <?php
$agregado          = $this->session->flashdata('agregado');
$destruido         = $this->session->flashdata('destruido');
$productoEliminado = $this->session->flashdata('productoEliminado');
if ($agregado) {
    ?>
                    <li class="grid_6" id="productoAgregado"><?=$agregado?></li>
                    <?php
} elseif ($destruido) {
    ?>
                    <li class="grid_6" id="productoAgregado"><?=$destruido?></li>
                    <?php
} elseif ($productoEliminado) {
    ?>
                    <li class="grid_6" id="productoAgregado"><?=$productoEliminado?></li>
                    <?php
}
?>
                <?php if ($inventario == '0') {?>
                <div class="alert alert-warning text-center" role="alert">
                    <img class="img-circle img-thumbnail" src="<?php echo base_url(); ?>assets/img/imgy/desert.png">
                    NO EXISTEN PRODUCTOS DADAS DE ALTA </div>
                    <?php } else {
    ?>
                        <input type="text" class="form-control input-sm m-b-xs" id="filter"
                        placeholder="Search in table">

                        <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nombre del Producto</th>
                                    <th data-hide="phone,tablet">Categoria</th>
                                    <th data-hide="phone,tablet">inv.inicial</th>
                                    <th data-hide="phone,tablet">Cantidad</th>
                                    <th data-hide="phone,tablet">inv.post</th>
                                    <th data-hide="phone,tablet">opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $num_abo = count($inventario);
    for ($x = 0; $x < $num_abo; $x++) {?>
                                <?php if ($inventario[$x]['status'] == 1) {?>

                                <tr class="gradeX">
                                    <td> <?php echo $inventario[$x]['clave']; ?></td>
                                    <td> <?php echo $inventario[$x]['descrip']; ?></td>
                                    <td> <?php echo $inventario[$x]['linea']; ?></td>
                                    <td class="center"><h2><?php echo $inventario[$x]['existencia']; ?></h2></td>
                                    <td class="center"><input type="number" size="3" placeholder="0" type="text"  class="text-sm form-control"></td>
                                    <td class="center"><h2>0</h2></td>
                                    <td class="center"><button class="btn btn-sm  btn-primary dim" alt="Agregar" type="submit" value="Enviar"><i class="fa fa fa-plus-square"></i></button>

                                        <!--<button class="btn btn-sm btn-danger  dim " alt="Destruccion" type="button"><i class="fa fa-trash"></i></button>--></td>
                                    </tr>
                                    <?php }?>
                                    <?php }?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="7">
                                            <ul class="pagination pull-right"></ul>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/jeditable/jquery.jeditable.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/datatables.min.js"></script>


        <script>
            $(document).ready(function() {

                $('.footable').footable();
                $('.footable2').footable();

            });

        </script>







