  <div class="wrapper wrapper-content animated fadeIn">
   <div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><img height="20px" width="20px" src="<?php echo base_url(); ?>assets/img/imgy/user.png">  Usuarios <small class="m-l-sm">Ultimos Registros</small></h5>
                <div class="ibox-tools">
                 <a href="<?php echo base_url(); ?>index.php/home/form_user" class="btn btn-primary dim"><i class="fa fa-plus"> </i></a>
                </div>

<div class="ibox-content">
   <?php if ($usuarios == '0') {?>
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
                    <th class="center">Foto</th>
                    <th class="center">Username</th>
                    <th class="center">Nombre</th>
                    <th class="center">Apellido</th>
                    <th class="center">Email</th>
                    <th class="center">Status</th>
                    <th class="center">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $num_abo = count($usuarios);
    for ($x = 0; $x < $num_abo; $x++) {?>
                <tr class="gradeX">
                    <td class="center text-center"><img width="40px" class="img-responsive img-circle img-thumbnail" src="<?php echo base_url(); ?>assets/img/imgperfil/<?php echo $usuarios[$x]['photo']; ?>"></td>
                    <td class="center"><?php echo $usuarios[$x]['username']; ?></td>
                    <td class="center"><?php echo $usuarios[$x]['first_name']; ?></td>
                    <td class="center"><?php echo $usuarios[$x]['last_name']; ?></td>
                    <td class="center"><?php echo $usuarios[$x]['email']; ?></td>

                    <?php if ($usuarios[$x]['active'] == "1") {?> <td class="center"><span class="label label-primary">Activo </span></td> <?php } else {?> <td class="center"><span class="label label-danger">Inactivo</span></td> <?php }?>

                    <td class="center"><a data-toggle="tooltip" data-placement="left" title="Agregar"  href="<?php echo base_url(); ?>index.php/home/userEditForm/<?php echo $usuarios[$x]['active']; ?>" class="btn btn-warning btn-xs" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                        <a data-toggle="tooltip" data-placement="left" title="Borrar" href="<?php echo base_url(); ?>index.php/home/userEliminar/<?php echo $usuarios[$x]['active']; ?>" class="btn btn-danger btn-xs" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>

                    </tr>
                    <?php }?>



                </tbody>
                <tfoot>
                    <tr>
                     <th class="center">Foto</th>
                     <th class="center">Username</th>
                     <th class="center">Nombre</th>
                     <th class="center">Apellido</th>
                     <th class="center">Email</th>
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
                s
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
