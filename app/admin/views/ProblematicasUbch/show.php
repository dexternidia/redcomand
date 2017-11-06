<div id="panel" class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-university fa-2x"></i> PROBLEMATICAS<b></b>
    </h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-6 animated fadeIn animated">
        <div class="col-lg-12">
          <div class="">
            <h5 class="text-muted text-muted">
            <i class="fa fa-file"></i> DATOS PROBLEMAS DEL CENTRO
            <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>ProblematicasUbch/create/<?php echo $problema->id ?>"><i class="fa fa-times text-danger"></i></a>
            <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>ProblematicasUbch/create/<?php echo $problema->id ?>"><i class="fa fa-pencil text-primary"></i></a>
            </h5>
            <hr>
          </div>
          <div class="">
            <table class="table table-user-information panel panel-default animated fadeIn">
              <tbody>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-address-card-o"></i> Nombre:</b></td>
                  <td class="text-uppercase"><?php echo ucwords($problema->ubch->nombre_ubch) ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa-map-pin"></i> Municipio:</b></td>
                  <td class="text-uppercase"><?php echo $problema->municipio->nombre ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-map-marker"></i> Parroquia:</b></td>
                  <td class="text-uppercase"><?php echo $problema->parroquia->nombre ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa fa-map"></i> Dirección:</b></td>
                  <td class="text-uppercase"><?php echo $problema->ubch->direccion_ubch ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa fa-calendar"></i> Tipo de Problema:</b></td>
                  <td class="text-uppercase"><?php echo $problema->tipo->nombre ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa fa-archive"></i> Observaciòn:</b></td>
                  <td class="text-uppercase"><?php echo $problema->observaciones ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa fa-calendar"></i> Estatus:</b></td>
                  <td class="text-uppercase">
                    <?php if ($problema->estatus): ?>
                    <?php if ($problema->estatus == 1): ?>
                    <button class="btn btn-success"><i class="fa fa-check"></i> Solucionado</button>
                    <?php else: ?>
                    <button class="btn btn-danger"><i class="fa fa-check"></i> En Estudio</button>
                    <?php endif ?>
                    <?php else: ?>
                    <button class="btn btn-danger"><i class="fa fa-times"></i> Sin Solucion</button>
                    <?php endif ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <?php if ($problema->ubch->responsable): ?>
      <div class="col-lg-6 animated fadeIn animated">
        <div class="col-lg-12">
          <div class="">
            <h5 class="text-muted text-muted">
            <i class="fa fa-file"></i> DATOS RESPONSABLE
            <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>ProblematicasUbch/create/<?php echo $problema->ubch->id ?>"><i class="fa fa-times text-danger"></i></a>
            <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>ProblematicasUbch/create/<?php echo $problema->ubch->id ?>"><i class="fa fa-pencil text-primary"></i></a>
            </h5>
            <hr>
          </div>
          <div class="">
            <table class="table table-user-information panel panel-default animated fadeIn">
              <tbody>
                <tr>
                  <td width="50%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-address-card-o"></i> Nombre:</b></td>
                  <td class="text-uppercase"><?php echo ucwords($problema->ubch->responsable->nombre_apellido) ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa-address-card"></i> Cédula:</b></td>
                  <td class="text-uppercase"><?php echo $problema->ubch->responsable->cedula ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-envelope"></i> Email:</b></td>
                  <td class="text-uppercase"><?php echo $problema->ubch->responsable->email ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa-volume-control-phone"></i> Telefono n°1:</b></td>
                  <td class="text-uppercase"><?php echo $problema->ubch->responsable->telefono_1 ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-mobile"></i> Telefono n°2:</b></td>
                  <td class="text-uppercase"><?php echo $problema->ubch->responsable->telefono_2 ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa-map-pin"></i> Municipio:</b></td>
                  <td class="text-uppercase"><?php echo $problema->ubch->responsable->municipio->nombre ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-map-marker"></i> Parroquia:</b></td>
                  <td class="text-uppercase"><?php echo $problema->ubch->responsable->parroquia->nombre ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa fa-map"></i> Dirección:</b></td>
                  <td class="text-uppercase"><?php echo $problema->ubch->responsable->direccion ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa fa-car"></i> Vehiculo:</b></td>
                  <td class="text-uppercase">
                    <?php if ($problema->ubch->responsable->vehiculo == true): ?>
                    <i class="btn btn-default fa fa-check"></i>
                    <?php else: ?>
                    <i class="btn btn-default fa fa-times"></i>
                    <?php endif ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <?php else: ?>
      <div class="col-lg-6 animated fadeIn animated">
        <div class="col-lg-12">
          <div class="">
            <h5 class="text-muted text-muted">
            <i class="fa fa-file"></i> DATOS RESPONSABLE
            </h5>
            <hr>
          </div>
          <div class="">
            <h5><i class="fa fa-exclamation-triangle text-warning" aria-hidden="true"></i>
            Este UBCH no tiene responsable, ingrese con el siguiente link</h5>
            <a class="btn btn-danger" href="<?php echo baseUrlRole() ?>ProblematicasUbch/create/<?php echo $problema->id_ubch ?>"><i class="fa fa-user-plus"></i> Agregar Responsable UBCH</a>
          </div>
        </div>
      </div>
      <?php endif ?>
    </div>
  </div>
</div>

