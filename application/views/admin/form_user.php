
    <div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
           <!--<div class="ibox float-e-margins">
            <div class="ibox-title">
                        <h5> <img height="20px" width="20px" src="<?php echo base_url(); ?>assets/img/imgy/add.png">  AGREGAR <small class="m-l-sm">USUARIOS</small></h5>
                        <div class="ibox-tools">

                        </div>
                    </div>
               <div class="ibox-content">
                   <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/home/pro_usuario" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                                        <label for=username" class="col-sm-3 control-label">Username:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="campo form-control" id="username" name="username" value="<?php echo set_value('username'); ?>" /><?php echo form_error('username', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="email" class="col-sm-3 control-label">Email:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="campo form-control" id="email" name="email" value="<?php echo set_value('email'); ?>" /><?php echo form_error('email', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="first_name" class="col-sm-3 control-label">Nombre(s):</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="campo form-control" id="first_name" name="first_name" value="<?php echo set_value('first_name'); ?>" /><?php echo form_error('first_name', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="last_name" class="col-sm-3 control-label">Apellido(s):</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="campo form-control" id="last_name" name="last_name" value="<?php echo set_value('last_name'); ?>" /><?php echo form_error('last_name', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="nombre" class="col-sm-3 control-label">Contraseña:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="campo form-control" id="nombre" name="nombre" value="<?php echo set_value('nombre'); ?>" /><?php echo form_error('nombre', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="nombre" class="col-sm-3 control-label">Confirmar Contraseña *:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="campo form-control" id="confirm" name="confirm" value="<?php echo set_value('nombre'); ?>" /><?php echo form_error('nombre', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
                                        </div>
                                    </div>

                                <div class="form-group">
                <label class="col-sm-3 control-label">Nivel</label>
                <div class="col-sm-7">

                                <select data-placeholder="Nivel de usuario" class="form-control chosen-select" multiple style="width:350px;" tabindex="">
                                <?php $num_abo = count($grupos);
for ($x = 0; $x < $num_abo; $x++) {?>
                                <?php if ($grupos[$x]['status'] == 1) {?>
                                <option value="<?php echo $grupos[$x]['id']; ?>"><?php echo $grupos[$x]['name']; ?> </option>
                                <?php }?>
                                <?php }?>

                            </select>
                            <?php echo form_error('linea', '<h4><span class=" label label-danger error">', '</h4></span>'); ?>
                </div>
                </div>
                                  <div class="form-group">
                                <label for="userfile" class="col-sm-3 control-label">Subir Foto:</label>
                                <div class="col-sm-4">
                                    <input type="file" class="campo form-control" id="userfile" name="userfile">
                                </div>
                            </div>
                <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
                <input type="hidden" name="grabar" />
                <div class="form-group text-center">
                    <div class="col-sm-6 col-sm-12">
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
</div>-->
        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                        <h5> <img height="20px" width="20px" src="<?php echo base_url(); ?>assets/img/imgy/add.png">  AGREGAR <small class="m-l-sm">USUARIOS</small></h5>
                        <div class="ibox-tools">

                        </div>
                    </div>
                        <div class="ibox-content">
                            <h2>
                                ALTA DE USUARIO
                            </h2>
                            <p>
                                Formulario altas de usuarios
                            </p>

                            <form id="form" action="<?php echo base_url(); ?>index.php/home/pro_usuario" class="wizard-big" enctype="multipart/form-data">
                                <h1>Usuario</h1>
                                <fieldset>
                                    <h2>Información de la cuenta</h2>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Username *</label>
                                                <input id="userName" value="<?php echo set_value('username'); ?>" name="userName" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Password *</label>
                                                <input id="password" name="password" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password *</label>
                                                <input id="confirm" name="confirm" type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                <h1>Perfil</h1>
                                <fieldset>
                                    <h2>Informacion del Perfil</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nombre(s) *</label>
                                                <input id="name" name="name" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Apellidos *</label>
                                                <input id="surname" name="surname" type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Email *</label>
                                                <input id="email" name="email" type="text" class="form-control required email">
                                            </div>
                                                <div class="form-group">
                <label class="col-lg-6 ">Nivel</label>
                <div class="col-sm-7">
                                <select class="form-control " data-placeholder="Nivel de usuario"  multiple style="width:350px;" tabindex="">
                                <?php $num_abo = count($grupos);
for ($x = 0; $x < $num_abo; $x++) {?>
                                <?php if ($grupos[$x]['status'] == 1) {?>
                                <option value="<?php echo $grupos[$x]['id']; ?>"><?php echo $grupos[$x]['name']; ?> </option>
                                <?php }?>
                                <?php }?>
                            </select>
                            <?php echo form_error('linea', '<h4><span class=" label label-danger error">', '</h4></span>'); ?>
                        </div>
                </div>

                                        </div>
                                    </div>
                                </fieldset>

                                <h1>Imagen</h1>
                                <fieldset>
                                    <div class="text-center" style="margin-top: 120px">
                                        <h1>Imagen de Usuario</h1>
                                        <br>
                                         <div class="form-group">
                                <label for="userfile" class="col-sm-2 control-label">Subir Foto:</label>
                                <div class="col-sm-8">
                                    <input type="file" class="campo form-control" id="userfile" name="userfile">
                                </div>
                            </div>
                                    </div>
                                </fieldset>

                                <h1>Recopilación</h1>
                                <fieldset>
                                    <h2>Recopilación de Datos</h2>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div></div></div>




    <!-- Mainly scripts -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js"></script>

    <!-- Custom and plugin javascript -->


    <!-- Steps -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/staps/jquery.steps.min.js"></script>

    <!-- Jquery Validate -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/validate/jquery.validate.min.js"></script>


    <script>
        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });
       });
    </script>












