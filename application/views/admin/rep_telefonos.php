
<div class="wrapper wrapper-content animated fadeIn">
   <div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><img height="20px" width="20px" src="<?php echo base_url(); ?>assets/img/imgy/phone-call.png">  Listado de Teléfonos <small class="m-l-sm">Ultimos Registros</small></h5>
                <div class="ibox-tools">

                 <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Teléfonos</button>
                 <!-- Modal -->
                 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><img height="20px" width="20px" src="<?php echo base_url(); ?>assets/img/imgy/add.png">   Agregar Teléfonos</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/home/pro_telefono" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
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
                                   <select name="categoria" data-placeholder="Choose a Country..."   tabindex="3">
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
   <?php if ($telefonos == '0') {?>
   <div class=" alert alert-warning text-center" role="alert">
    <img class="img-circle img-thumbnail" src="<?php echo base_url(); ?>assets/img/imgy/desert.png">
    NO EXISTEN TELÉFONOS DADAS DE ALTA </div>
    <?php } else {
    ?>
        <div class="table-responsive">
            <table class=" table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                    <tr>
                        <th class="center">NOMBRE</th>
                        <th class="center">TELÉFONO</th>
                        <th class="center">CATEGORIA</th>
                        <th class="center">STATUS</th>
                        <th class="center">OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $num_abo = count($telefonos);
    for ($x = 0; $x < $num_abo; $x++) {?>
                    <tr class="gradeX">
                     <td class="center"><?php echo $telefonos[$x]['nombre']; ?></td>
                     <td class="center"><a href="callto://<?php echo $telefonos[$x]['telefono']; ?>"><?php echo $telefonos[$x]['telefono']; ?></a></td>
                     <td class="center"> <?php echo $telefonos[$x]['categoria']; ?></td>
                     <?php if ($telefonos[$x]['status'] == "1") {?> <td class="text-center"><span class="label label-primary">Activo</span></td> <?php } else {?> <td class="text-center"><span class="label label-danger">Inactivo</span></td> <?php }?>
                     <?php if ($telefonos[$x]['status'] == "1") {?> <td class="text-center"><a href="<?php echo base_url(); ?>index.php/home/TelEditForm/<?php echo $telefonos[$x]['id']; ?>" class="btn btn-warning btn-xs" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                     <a href="<?php echo base_url(); ?>index.php/home/TelEliminar/<?php echo $telefonos[$x]['id']; ?>" class="btn btn-danger btn-xs" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                     <?php } else {?> <td class="center"><a href="<?php echo base_url(); ?>index.php/home/TelActivar/<?php echo $telefonos[$x]['id']; ?>" class="btn btn-info btn-xs" role="button">Activar</a></td> <?php }?>
                 </tr>
                 <?php }?>
             </tbody>
             <tfoot>
                <tr>
                    <th class="center">NOMBRE</th>
                    <th class="center">TELÉFONO</th>
                    <th class="center">CATEGORIA</th>
                    <th class="center">STATUS</th>
                    <th class="center">OPCIONES</th>
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
            {extend: 'excel', title: 'Reporte de Teléfonos'},
            {extend: 'pdf', title: 'Reporte de Teléfonos'},

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



