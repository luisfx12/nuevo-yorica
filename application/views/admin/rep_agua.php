  <head>
     <title>:Bitácora De Agua</title>
 </head>

 <div class="wrapper wrapper-content animated fadeIn">
   <div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><img height="20px" width="20px" src="<?php echo base_url(); ?>assets/img/imgy/water-drop.png">  Bitacora de Purificadora <small class="m-l-sm">Ultimos Registros</small></h5>
                <div class="ibox-tools">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Registro</button>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><img height="20px" width="20px" src="<?php echo base_url(); ?>assets/img/imgy/add.png">   Agregar Registro</h4>
                        </div>
                        <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/home/pro_agua" method="post" enctype="multipart/form-data">
                          <div class="modal-body">
                            <div class="form-group">
                                <label for="ant_CA"  class="col-sm-3 control-label">Antes de CA</label>
                                <div class="col-sm-9">
                                    <input type="text" required class="campo form-control" id="ant_CA" name="ant_CA" value="<?php echo set_value('ant_CA'); ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="des_CA"   class="col-sm-3 control-label">Despues de CA</label>
                                <div class="col-sm-9">
                                    <input type="text" required  class="campo form-control" id="des_CA" name="des_CA" value="<?php echo set_value('des_CA'); ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dureza"  class="col-sm-3 control-label">Dureza (ppm)**</label>
                                <div class="col-sm-9">
                                    <input type="text" required  class="campo form-control" id="dureza" name="dureza" value="<?php echo set_value('dureza'); ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dis_total"  class="col-sm-3 control-label">Disueltos Totales</label>
                                <div class="col-sm-9">
                                    <input type="text" required  class="campo form-control" id="dis_total" name="dis_total" value="<?php echo set_value('dis_total'); ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="des_agua"  class="col-sm-3 control-label">Desinfección de tuberia de cloro</label>
                                <div class="col-sm-9">
                                    <input type="text" required  class="campo form-control" id="des_agua" name="des_agua"  value="<?php echo set_value('des_agua'); ?>" />
                                </div>
                            </div>
                            <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
                            <input type="hidden" name="grabar" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <input class="btn btn-default" type="submit" name="Guardar" value="Guardar" title="Guardar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ibox-content">
   <?php if ($agua == '0') {?>
   <div class="alert alert-warning text-center" role="alert">
    <img class="img-circle img-thumbnail" src="<?php echo base_url(); ?>assets/img/imgy/desert.png">
    NO EXISTEN REGISTROS DADOS DE ALTA

</div>
<?php } else {
    ?>
    <div class="table-responsive">
        <table class=" table table-striped table-bordered table-hover dataTables-example" >
            <thead>
                <tr>
                   <th class="center">Folio</th>
                   <th class="center">Fecha</th>
                   <th class=" center">Antes de CA</th>
                   <th class="center">Despues de CA</th>
                   <th class="center">Dureza (ppm)**</th>
                   <th class="center">Disueltos Totales</th>
                   <th class="center">Desinfeccion de tuberia con cloro</th>
                   <th class="center">Estado</th>
                   <th class="center">Usuario</th>
               </tr>
           </thead>
           <tbody>
            <?php $num_abo = count($agua);
    for ($x = 0; $x < $num_abo; $x++) {?>
            <tr class="gradeX">
                <td class="center"><?php echo $agua[$x]['id']; ?></td>
                <td class="center"><?php echo $agua[$x]['created']; ?></td>
                <td class="center"><?php echo $agua[$x]['ant_CA']; ?></td>
                <td class="center"><?php echo $agua[$x]['des_CA']; ?></td>
                <td class="center"><?php echo $agua[$x]['dureza']; ?> Gotas</td>
                <td class="center"><?php echo $agua[$x]['dis_total']; ?></td>
                <td class="center"><?php echo $agua[$x]['des_agua']; ?></td>

                <?php if ($agua[$x]['des_CA'] >= "7.2" && $agua[$x]['des_CA'] <= "7.6") {?>
                <td class="center"><a   class="btn btn-primary btn-xs" role="button"><i class="fa fa-check"> IDEAL / CLORO</a></td>
                <?php }if ($agua[$x]['des_CA'] >= "7.8") {?>
                <td class="center"><a   class="btn btn-warning btn-xs" role="button"><i class="fa fa-warning"> ACIDO / CLORO</a></td>
                <?php }if ($agua[$x]['des_CA'] <= "6.8") {?> <td class="center"><a  class="btn btn-danger btn-xs" role="button"><i class="fa fa-times"></i>BAJO / CLORO</a></td> <?php }?>
                <td class="center"><?php echo $agua[$x]['usuario']; ?></td>
            </tr>
            <?php }?>
        </tbody>
        <tfoot>
            <tr>
                <th class="center">Folio</th>
                <th class="center">Fecha</th>
                <th class=" center">Antes de CA</th>
                <th class="center">Despues de CA</th>
                <th class="center">Dureza (ppm)**</th>
                <th class="center">Disueltos Totales</th>
                <th class="center">Desinfeccion de tuberia con cloro</th>
                <th class="center">Estado</th>
                <th class="center">Usuario</th>
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


<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/jeditable/jquery.jeditable.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/datatables.min.js"></script>
<!-- Page-Level Scripts -->
<script>
    $(document).ready(function(){
        $('.dataTables-example').DataTable({
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
            { extend: 'copy'},
            {extend: 'csv'},
            {extend: 'excel', title: 'Bitácora Nivel de Agua'},
            {extend: 'pdf', title: 'Bitácora Nivel de Agua'},

            {extend: 'print',
            customize: function (win){
                $(win.document.body).addClass('white-bg');
                $(win.document.body).css('font-size', '10px');

                $(win.document.body).find('table')
                .addClass('compact')
                .css('font-size', 'inherit');
            }
        }
        ]

    });

        /* Init DataTables */
        var oTable = $('#editable').DataTable();

        /* Apply the jEditable handlers to the table */
        oTable.$('td').editable( '../example_ajax.php', {
            "callback": function( sValue, y ) {
                var aPos = oTable.fnGetPosition( this );
                oTable.fnUpdate( sValue, aPos[0], aPos[1] );
            },
            "submitdata": function ( value, settings ) {
                return {
                    "row_id": this.parentNode.getAttribute('id'),
                    "column": oTable.fnGetPosition( this )[2]
                };
            },
            "width": "90%",
            "height": "100%"
        } );
    });

    function fnClickAddRow() {
        $('#editable').dataTable().fnAddData( [
            "Custom row",
            "New row",
            "New row",
            "New row",
            "New row" ] );
    }
</script>


