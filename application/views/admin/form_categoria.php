<div class="wrapper wrapper-content animated fadeIn">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5> <img height="20px" width="20px" src="<?php echo base_url(); ?>assets/img/imgy/add.png">  AGREGAR <small class="m-l-sm">CATEGORIAS</small></h5>
          <div class="ibox-tools">

          </div>
        </div>
        <div class="ibox-content">
          <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/home/pro_categoria" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="categoria" class="col-sm-3 control-label">Categoria:</label>
              <div class="col-sm-7">
                <input type="text" class="campo form-control" id="categoria" name="categoria" value="<?php echo set_value('categoria'); ?>" /><?php echo form_error('categoria', '<h4><span class=" label label-danger error">', '</span><h4>'); ?>
              </div>
            </div>
            <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
            <input type="hidden" name="grabar" />
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input class="btn btn-default ladda-button ladda-button-demo btn btn-primary" type="submit" name="Guardar" value="Guardar" title="Guardar">
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
</div>

<script type="text/javascript">
  var l = $( '.ladda-button-demo' ).ladda();
  l.click(function()

          // Start loading
          l.ladda( 'start' );

          // Do something in backend and then stop ladda
          // setTimeout() is only for demo purpose
          setTimeout(function()
            l.ladda('stop');
          },2000)

        });
      </script>
