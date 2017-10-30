<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-file fa-2x"></i> Registro Ubch<b></b>
    <a class="btn btn-default pull-right" href="<?php echo baseUrl ?>admin/RegistroUbch/create"><i class="fa fa-plus-square text-primary"></i><i style="color:#777;"> Agregar UBCH</i></a>    </h3>
  </div>
  <div class="panel-body">
    <div class="col-md-12 table-responsive">
      <table class="table table-striped table-condensed animated fadeIn" data-striped="true">
        <thead>
          <tr class="bg-primary text-white">
            <th width="" class="text-uppercase">Nombre UBCH</th>
            <th width="" class="text-uppercase">Municipio</th>
            <th width="" class="text-uppercase">Parroquia</th>
            <th width="" class="text-uppercase">Sector</th>
            <th width="" class="text-uppercase">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($ubch as $key => $u): ?>
          <tr>
            <td><?php echo $u->nombre_ubch ?></td>
            <td><?php echo $u->municipio->nombre ?></td>
            <td><?php echo $u->parroquia->nombre ?></td>
            <td><?php ?></td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <div class="text-center">
        <?php echo Paginator($ubch); ?>
      </div>
    </div>
  </div>
</div>
</div>