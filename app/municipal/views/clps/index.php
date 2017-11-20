<div id="panel" class="panel panel-primary">
  <div class="panel-heading" style="background-color: red">
    <h3 class="panel-title text-muted"><i class="fa fa-users fa-2x"></i> CLP<b></b>
    </h3>
  </div>
  <div class="panel-body">
    <div class="col-md-12 table-responsive">
      <table class="table table-striped table-condensed animated fadeIn" data-striped="true">
        <thead>
          <tr class="">
            <!-- <th>ID</th> -->
            <th width="" class="text-uppercase">Responsable Clp</th>
            <th width="" class="text-uppercase">parroquia</th>
            <th width="" class="text-uppercase">Cant. Centros</th>
            <th width="" class="text-uppercase">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($clps): ?>
          <?php foreach ($clps as $key => $u): ?>
          <tr>
            <!--  <td class="text-uppercase"><?php echo $u->id ?></td> -->
            <td class="text-uppercase"><?php echo $u->name ?></td>
            <td class="text-uppercase"><?php echo $u->parroquia->nombre ?></td>
            <td class="text-uppercase"><?php echo $u->centros->count() ?></td>
            <td style="text-align: center;" class="text-uppercase">
              <a class="text-danger fa fa-search fa-1x" href="<?php echo baseUrlRole() ?>clps/<?php echo $u->id_clp ?>"></a>
            </td>
          </tr>
          <?php endforeach ?>
          <?php else: ?>
          
          <?php endif ?>
        </tbody>
      </table>
      <div class="text-center">
        <?php echo Paginator($clps); ?>
      </div>
    </div>
  </div>
</div>
</div>