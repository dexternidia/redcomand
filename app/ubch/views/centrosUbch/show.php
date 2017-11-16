<script type="text/javascript" src="<?php echo baseUrl ?>node_modules/jquery-paginate/jquery-paginate.js"></script>
<style type="text/css">
.page-navigation a {
margin: 0 2px;
display: inline-block;
padding: 4px 10px;
color: #ffffff;
background-color: #FF4D4D;
border-radius: 0px;
text-decoration: none;
font-weight: bold;
}
.page-navigation a[data-selected] {
background-color: #3d9be0;
}
.page-navigation
{
text-align: center;
}
</style>
<div id="panel" class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-university fa-2x"></i> CENTRO<b> <?php echo strtoupper($ubch->nombre_ubch) ?></b>
    </h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-6 animated fadeIn animated">
        <div class="col-lg-12">
          <div class="">
            <h5 class="text-muted text-muted">
            <i class="fa fa-file"></i> DATOS GENERALES
            </h5>
            <br>
          </div>
          <div class="">
            <table class="table table-user-information panel panel-default animated fadeIn">
              <tbody>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-address-card-o"></i> Nombre:</b></td>
                  <td class="text-uppercase"><?php echo ucwords($ubch->nombre_ubch) ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa-map-pin"></i> Municipio:</b></td>
                  <td class="text-uppercase"><?php echo $ubch->municipio->nombre ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-map-marker"></i> Parroquia:</b></td>
                  <td class="text-uppercase"><?php echo $ubch->parroquia->nombre ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa-map"></i> Dirección:</b></td>
                  <td class="text-uppercase"><?php echo $ubch->direccion_ubch ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-calendar"></i> Fecha Registro:</b></td>
                  <td class="text-uppercase"><?php echo $ubch->fecha_registro ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa-archive"></i> Cantidad Mesas:</b></td>
                  <td class="text-uppercase"><?php echo $ubch->numero_mesas ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-sort-numeric-asc"></i> Cant. Electorres:</b></td>
                  <td class="text-uppercase"><?php echo $ubch->cantidad_electores ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa-calendar"></i> Estatus:</b></td>
                  <td class="text-uppercase">
                    <?php if ($ubch->estatus): ?>
                    <?php if ($ubch->estatus == 1): ?>
                    <button class="btn btn-danger"><i class="fa fa-check"></i> Activo</button>
                    <?php else: ?>
                    <button class="btn btn-danger"><i class="fa fa-check"></i> Activo</button>
                    <?php endif ?>
                    <?php else: ?>
                    <button class="btn btn-danger"><i class="fa fa-times"></i> Inactivo</button>
                    <?php endif ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
         <?php if ($mesas): ?>
      <div class="col-lg-6 animated fadeIn animated">
        <div class="col-lg-12">
          <div class="">
            <h5 class="text-muted text-muted">
            <i class="fa fa-file"></i> MESAS
            </h5>
            <br>
          </div>
          <div class="col-md-12 table-responsive panel panel-default">
            <table id="myTable" class="table table-striped table-condensed animated fadeIn" data-striped="true">
              <thead>
                <tr class="">
                  <th width="" class="text-uppercase">MESA</th>
                  <th class="text-uppercase">COD MESA</th>
                  <th class="text-uppercase">Cant. Testigos</th>
                  <th class="text-uppercase">Ver</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($mesas as $key => $u): ?>
                <tr>
                  <td><?php echo $u->mesa ?></td>
                  <td><?php echo $u->codigo_mesa ?></td>
                  <td class="text-uppercase">
                   <?php echo $u->testigos->count() ?>
                  </td>
                  <td width="5%">
                    <?php echo Token() ?>
                    <a class="text-danger fa fa-search fa-1x pull-right" href="<?php echo baseUrlRole() ?>centrosMesasUbch/<?php echo $u->id_mesas_ubch ?>" onclick="this.parentNode.submit(); return false;"></a>
                  </td>
                </tr>
                <?php endforeach ?>
              </tbody>
            </table>
            <br>
          </div>
        </div>
      </div>
      <?php else: ?>
        
<!--       <div class="col-lg-6 animated fadeIn animated">
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
            <a class="btn btn-danger" href="<?php echo baseUrlRole() ?>/ResponsableUbch/create/<?php echo $ubch->id_ubch ?>"><i class="fa fa-user-plus"></i> Agregar Responsable UBCH</a>
          </div>
        </div>
      </div> -->
      <?php endif ?>
    </div>
    <hr>
    <div class="row">

      <?php if ($problematicas): ?>
      <div class="col-lg-6 animated fadeIn animated">
        <div class="col-lg-12">
          <div class="">
            <h5 class="text-muted text-muted">
            <i class="fa fa-file"></i> PROBLEMATICAS
            <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>centrosProblematicas/create/<?php echo $ubch->id_ubch ?>"><i class="fa fa-plus text-primary"></i></a>
            </h5>
            <br>
          </div>
          <div class="col-md-12 table-responsive panel panel-default">
            <table id="myTable" class="table table-striped table-condensed animated fadeIn" data-striped="true">
              <thead>
                <tr class="">
                  <th width="" class="text-uppercase">Tipo Problema</th>
                  <th class="text-uppercase">Estatus</th>
                  <th class="text-uppercase">Ver</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($problematicas as $key => $u): ?>
                <tr>
                  <td><?php echo $u->tipo->nombre ?></td>
                  <td class="text-uppercase">
                    <?php if ($u->estatus): ?>
                    <?php if ($u->estatus == 1): ?>
                    <a class="text-success"><i class="fa fa-check"></i> Solucionado</a>
                    <?php else: ?>
                    <a class=""><i class="fa fa-check"></i> En Estudio</a>
                    <?php endif ?>
                    <?php else: ?>
                    <a class="text-danger"><i class="fa fa-times"></i> Sin Solucion</a>
                    <?php endif ?>
                  </td>
                  <td width="5%">
                    <?php echo Token() ?>
                    <a class="text-danger fa fa-search fa-1x pull-right" href="<?php echo baseUrlRole() ?>centrosProblematicas/<?php echo $u->id_problematica_ubch ?>" onclick="this.parentNode.submit(); return false;"></a>
                  </td>
                </tr>
                <?php endforeach ?>
              </tbody>
            </table>
            <br>
          </div>
        </div>
      </div>
      <?php else: ?>
<!--       <div class="col-lg-6 animated fadeIn animated">
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
            <a class="btn btn-danger" href="<?php echo baseUrlRole() ?>/ResponsableUbch/create/<?php echo $ubch->id_ubch ?>"><i class="fa fa-user-plus"></i> Agregar Responsable UBCH</a>
          </div>
        </div>
      </div> -->
      <?php endif ?>


      <?php if ($problematicas): ?>
      <div class="col-lg-6 animated fadeIn animated">
        <div class="col-lg-12">
          <div class="">
            <h5 class="text-muted text-muted">
            <i class="fa fa-file"></i> SOLICITUDES
            <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>centrosSolicitudes/create/<?php echo $ubch->id_ubch ?>"><i class="fa fa-plus text-primary"></i></a>
            </h5>
            <br>
          </div>
          <div class="col-md-12 table-responsive panel panel-default">
            <table id="myTable" class="table table-striped table-condensed animated fadeIn" data-striped="true">
              <thead>
                <tr class="">
                  <th width="" class="text-uppercase">Tipo Solicitud</th>
                  <th class="text-uppercase">Estatus</th>
                  <th class="text-uppercase">Ver</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($solicitudes as $key => $u): ?>
                <tr>
                  <td><?php echo $u->tipo->nombre ?></td>
                  <td class="text-uppercase">
                    <?php if ($u->estatus): ?>
                    <?php if ($u->estatus == 1): ?>
                    <a class="text-success"><i class="fa fa-check"></i> Solucionado</a>
                    <?php else: ?>
                    <a class=""><i class="fa fa-check"></i> En Estudio</a>
                    <?php endif ?>
                    <?php else: ?>
                    <a class="text-danger"><i class="fa fa-times"></i> Sin Solucion</a>
                    <?php endif ?>
                  </td>
                  <td width="5%">
                    <?php echo Token() ?>
                    <a class="text-danger fa fa-search fa-1x pull-right" href="<?php echo baseUrlRole() ?>centrosSolicitudes/<?php echo $u->id_solicitud_ubch ?>" onclick="this.parentNode.submit(); return false;"></a>
                  </td>
                </tr>
                <?php endforeach ?>
              </tbody>
            </table>
            <br>
          </div>
        </div>
      </div>
      <?php else: ?>

<!--       <div class="col-lg-6 animated fadeIn animated">
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
            <a class="btn btn-danger" href="<?php echo baseUrlRole() ?>/ResponsableUbch/create/<?php echo $ubch->id_ubch ?>"><i class="fa fa-user-plus"></i> Agregar Responsable UBCH</a>
          </div>
        </div>
      </div> -->
      <?php endif ?>


    </div>
    <hr>
    <div class="row">
   

      <?php if ($mesas): ?>
      <div class="col-lg-6 animated fadeIn animated">
        <div class="col-lg-12">
          <div class="">
            <h5 class="text-muted text-muted">
            <i class="fa fa-file"></i> 1X10 PATRULLEROS<a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>unoxdiezUbch/create/<?php echo $ubch->id_ubch ?>"><i class="fa fa-plus text-primary"></i></a>
            </h5>
            <br>
          </div>
          <div class="col-md-12 table-responsive panel panel-default">
            <table id="myTable" class="table table-striped table-condensed animated fadeIn" data-striped="true">
              <thead>
                <tr class="">
                  <th width="" class="text-uppercase">Nombre</th>
                  <th class="text-uppercase">Apellido</th>
                  <th class="text-uppercase">Cedula</th>
                  <th class="text-uppercase">Telefono 1</th>
                  <th class="text-uppercase">Telefono 2</th>
                  <th class="text-uppercase">Patrullados</th>
                  <th class="text-uppercase">Ver</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($unoxdiezpadrinos as $key => $u): ?>
                <tr>
                  <td><?php echo $u->nombre ?></td>
                  <td><?php echo $u->apellido ?></td>
                  <td><?php echo $u->cedula ?></td>
                  <td><?php echo $u->telefono_1 ?></td>
                  <td><?php echo $u->telefono_2 ?></td>
                  <td style="text-align: center"><?php echo $u->unoxdiez_ahijados->count(); ?></td>
                  <td width="5%">
                    <?php echo Token() ?>
                    <a class="text-danger fa fa-search fa-1x pull-right" href="<?php echo baseUrlRole() ?>unoxdiezUbch/<?php echo $u->id_ubch_registro_unoxdiez ?>" onclick="this.parentNode.submit(); return false;"></a>
                  </td>
                </tr>
                <?php endforeach ?>
              </tbody>
            </table>
            <br>
          </div>
        </div>
      </div>
      <?php else: ?>
        
<!--       <div class="col-lg-6 animated fadeIn animated">
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
            <a class="btn btn-danger" href="<?php echo baseUrlRole() ?>/ResponsableUbch/create/<?php echo $ubch->id_ubch ?>"><i class="fa fa-user-plus"></i> Agregar Responsable UBCH</a>
          </div>
        </div>
      </div> -->
      <?php endif ?>

    </div>


  </div>
</div>
<script type="text/javascript">
$('#myTable').paginate({ limit: 7 });
$('#myTable2').paginate({ limit: 7 });
</script>