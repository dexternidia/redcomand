<div id="panel" class="panel panel-primary">
  <div class="panel-heading" style="background-color: red">
    <h3 class="panel-title text-muted"><i class="fa fa-user fa-2x"></i>x<i class="fa fa-users fa-2x"></i> Registro 1x10<b></b>
    <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>unoxdiez/busqueda"><i class="fa fa-plus-square text-muted"></i><i style="color:#777;"> Agregar 1x10</i></a>    </h3>
  </div>
  <div class="panel-body">
    <div class="col-md-12 table-responsive">
      <table class="table table-striped table-condensed animated fadeIn" data-striped="true">
        <thead>
          <tr class="">
            <th width="" class="text-uppercase">Nombre</th>
            <th width="" class="text-uppercase">Apellido</th>
            <th width="" class="text-uppercase">Cedula</th>
            <th width="" class="text-uppercase">Telefono</th>
            <th width="" class="text-uppercase">Telefono (opcional)</th>
            <th class="text-uppercase">Ver</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($unopordiez as $key => $u): ?>
          <tr>
            <td><?php echo $u->cedula ?></td>
            <td><?php echo $u->nombre ?></td>
            <td><?php echo $u->apellido ?></td>
            <td><?php echo $u->telefono_1 ?></td>
            <td><?php echo $u->telefono_2 ?></td>
            <td><a class="text-danger fa fa-search fa-2x" href="<?php echo baseUrlRole() ?>unopordiez/<?php echo $u->id_ubch ?>"></a></td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <div class="text-center">
        <?php echo Paginator($unopordiez); ?>
      </div>
    </div>
  </div>
</div>
</div>