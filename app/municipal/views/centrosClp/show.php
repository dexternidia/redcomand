<div id="panel" class="panel panel-primary">
  <div class="panel-heading" style="background-color: red">
    <?php $user = User(); ?>
    <h3 class="panel-title text-muted"><i class="fa fa-users fa-2x"></i><i class="fa fa-university"></i> CENTROS DE CLP <?php echo strtoupper($centros[0]->clp->name) ?><b></b>
  <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>CuentasUbchMunicipal/create"><i class="fa fa-plus-square text-muted"></i><i style="color:#777;"> CREAR CLP</i></a
  </h3>
</div>
<div class="panel-body">
  <div class="col-md-12 table-responsive">
    <table class="table table-striped table-condensed animated fadeIn" data-striped="true">
      <thead>
        <tr class="">
          <!-- <th>ID</th> -->
          <th width="" class="text-uppercase">Nombre Centro</th>
          <th width="" class="text-uppercase">Dirección</th>
          <th width="" class="text-uppercase">Activo</th>
          <th width="25%" class="text-uppercase">Opciones</th>
        </tr>
      </thead>
      <tbody>
        <?php if ($centros): ?>
        <?php foreach ($centros as $key => $u): ?>
        <tr>
          <!--  <td class="text-uppercase"><?php echo $u->nombre ?></td> -->
          <td class="text-uppercase"><?php echo $u->nombre ?></td>
          <td class="text-uppercase"><?php echo $u->direccion ?></td>
          <td class="text-uppercase">
            <?php if($u->ubch): ?>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#siActivo">SI</button>

            <!-- Modal -->
            <div id="siActivo" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">CENTRO ASIGNADO</h4>
                  </div>
                  <div class="modal-body">
                    <h6></h6>
                    <p></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <?php else: ?>
            <a class="btn btn-danger" href="#"><i class="fa fa-times"></i> NO</a>
            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                  </div>
                  <div class="modal-body">
                    <p>Some text in the modal.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <?php endif ?>
          </td>
          <td>
            <!--<a href="<?php echo baseUrlRole() ?>centrosClp/create/<?php echo $u->id_clp ?>" class="btn"><i class="fa fa-university"></i> Asignar centro</a>
            <a href="<?php echo baseUrlRole() ?>centrosClp/<?php echo $u->id_clp ?>" class="btn text-danger"><i class="text-danger fa fa-search fa-1x"></i> Ver centros</a>
            -->
          </td>
        </tr>
        <?php endforeach ?>
        <?php else: ?>
        
        <?php endif ?>
      </tbody>
    </table>
    <div class="text-center">
      <?php echo Paginator($centros); ?>
    </div>
  </div>
</div>
</div>
</div>