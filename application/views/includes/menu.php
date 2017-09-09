
 <div id="wrapper" style=" border-top: solid #19DFB4;">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
         <a class="close-canvas-menu"><i class="fa fa-times"></i></a>
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header" style=" background: #326477; border-bottom:  dotted #2f4050;">
                    <?php if ($this->ion_auth->logged_in()) {?>
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" style="box-shadow: 1px 1px 2px #413F3F" class="img-circle " src="<?php echo base_url(); ?>assets/img/imgy/user.png" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                         <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('first_name') . " " . $this->session->userdata('last_name'); ?></strong>

                            <span class="text-muted text-xs block">Opciones<b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="<?php echo base_url(); ?>index.php/home/perfil">Perfil</a></li>
                            <!--<li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>-->
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>index.php/auth/logout">Cerrar sesión</a></li>
                        </ul>
                    </div>
              <?php }?>
                    <div class="logo-element">
                        <img width="70%" height="70%" src="<?php echo base_url(); ?>assets/img/imgy/logologin.png" class=" img-circle img-thumbnail  img-responsive" >
                    </div>
                </li>
                <?php if ($this->ion_auth->logged_in()) {?>
                <!--<li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Empresas</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url(); ?>">Productos Yorica</a></li>
                        <li><a href="<?php echo base_url(); ?>">TISA</a></li>
                        <li><a href="<?php echo base_url(); ?>">Los Mezquites</a></li>
                        <li><a href="<?php echo base_url(); ?>">Yorica Brisas Del Valle</a></li>
                        <li><a href="<?php echo base_url(); ?>">Yorica Estación Luis</a></li>
                        <li><a href="<?php echo base_url(); ?>">Yorica Tetanchopo</a></li>
                        <li><a href="<?php echo base_url(); ?>">Yorica Tierra Blanca</a></li>
                        <li><a href="<?php echo base_url(); ?>">Yorica vías cuarta</a></li>

                    </ul>
                </li>-->
                <?php }?>
                <li>
                    <a href="<?php echo base_url(); ?>index.php"><i class="fa fa-home"></i> <span class="nav-label">Inicio</span> <span class="fa arrow"></span></a>

                </li>
                <!--<li>
                    <a href=""><i class="fa fa-tint"></i> <span class="nav-label">Purificadoras</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url(); ?>index.php/home/bitacora">Bitacora de Agua</a></li>

                    </ul>
                </li>-->

                <li>
                    <a href=""><i class="fa fa-phone"></i> <span class="nav-label">Directorio Teléfonico</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url(); ?>index.php/home/telefonos">Teléfonos</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/Categorias">Categorias</a></li>
                    </ul>
                </li>
                <li>
                    <a href="layouts.html"><i class="fa fa-male"></i> <span class="nav-label">Clientes</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url(); ?>index.php/home/cons_cliente">Consulta de Clientes</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/cons_alta_cliente">Consulta de Altas de Clientes</a></li>
                    </ul>
                </li>
                <li>
                    <a href="layouts.html"><i class="fa fa-pie-chart"></i> <span class="nav-label">Ventas</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url(); ?>index.php/home/cons_venta">Consulta de Ventas</a></li>
                    </ul>
                </li>

                <li>
                    <a href="layouts.html"><i class="fa fa-car"></i><span class="nav-label">Vendedores</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url(); ?>index.php/home/gastos">Gastos Opertivos</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/agenda_sem">Agenda Semanal</a></li>

                    </ul>
                </li>
                <li >
                    <a href="#"><i class="fa fa-cogs"></i><span class="nav-label">Productos</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse ">
                        <li><a href="<?php echo base_url(); ?>index.php/home/productos">Productos</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/lineas">Lineas de productos</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/inventario">Carga a inventario</a></li>
                    </ul>
                </li>
                <?php if ($this->session->userdata('groups_id') == 1) {?>
                <li class="special_link" >
                    <a href=""><i class="fa fa-cog"></i> <span class="nav-label">Administrativo</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url(); ?>/index.php/home/usuarios">Usuarios</a></li>
                        <!--<li><a href="<?php echo base_url(); ?>index.php/home/grupos">Grupos</a></li>-->
                        <li><a href="<?php echo base_url(); ?>index.php/home/lista_precio">Lista de Precios</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/home/configuracion">Configuración</a></li>
                    </ul>
                </li>
            </ul>
            <?php }?>
        </div>
    </nav>
</div>
