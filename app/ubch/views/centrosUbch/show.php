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
      <?php if ($responsable): ?>
      <div class="col-lg-6 animated fadeIn animated">
        <div class="col-lg-12">
          <div class="">
            <h5 class="text-muted text-muted">
            <i class="fa fa-file"></i> RESPONSABLE
            <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>ResponsableUbch/<?php echo $responsable->id_responsable_ubch ?>/delete"><i class="fa fa-times text-danger"></i></a>
            <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>ResponsableUbch/<?php echo $responsable->id_responsable_ubch ?>/edit" data-toggle="modal" data-target="#editarResponsable"><i class="fa fa-pencil text-primary"></i></a>
            </h5>
            <br>
          </div>
          <div class="">
            <table class="table table-user-information panel panel-default animated fadeIn">
              <tbody>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-address-card-o"></i> Nombre:</b></td>
                  <td class="text-uppercase"><?php echo ucwords($responsable->nombre_apellido) ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa-address-card"></i> Cédula:</b></td>
                  <td class="text-uppercase"><?php echo $responsable->cedula ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-envelope"></i> Email:</b></td>
                  <td class="text-uppercase"><?php echo $responsable->email ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa-volume-control-phone"></i> Telefono n°1:</b></td>
                  <td class="text-uppercase"><?php echo $responsable->telefono_1 ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-mobile"></i> Telefono n°2:</b></td>
                  <td class="text-uppercase"><?php echo $responsable->telefono_2 ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa-map-pin"></i> Municipio:</b></td>
                  <td class="text-uppercase"><?php echo $responsable->municipio->nombre ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-map-marker"></i> Parroquia:</b></td>
                  <td class="text-uppercase"><?php echo $responsable->parroquia->nombre ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa fa-map"></i> Dirección:</b></td>
                  <td class="text-uppercase"><?php echo $responsable->direccion ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa fa-car"></i> Vehiculo:</b></td>
                  <td class="text-uppercase">
                    <?php if ($responsable->vehiculo == true): ?>
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
      <!-- Modal -->
      <div id="editarResponsable" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Editar Responsable</h4>
            </div>
            <div class="modal-body">
              <form action="<?php echo baseUrlRole() ?>cuentas" method="POST">
                <?php echo Token::field() ?>
                <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" data-inputmask="'mask': '(9999) 999-9999'" type="text"  name="telefono1" placeholder="Telefono n°1" required/>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" data-inputmask="'mask': '(9999) 999-9999'" type="text" name="telefono2" placeholder="Telefono n°2"/>
          </div>
        </div>
                  <div class="col-lg-12">
                    <input class="form-control" type="text" data-inputmask="'mask': '(9999) 999-9999'" name="telefono_1" placeholder="TELEFONO 1" value="<?php echo $responsable->telefono_1 ?>">
                  </div>
                  <div class="col-lg-12">
                    <input class="form-control" type="text" name="telefono_2" placeholder="TELEFONO 2" value="<?php echo $responsable->telefono_2 ?>">
                  </div>
                  <div class="col-lg-12">
                    <input class="form-control" type="text" name="name" placeholder="EMAIL" value="<?php echo $responsable->email ?>">
                  </div>
                <br>
              </div>
            </div>
            <div class="modal-footer">
                  <button onclick="enviar()" id="botonSubmit" type="submit" class="btn btn-lg btn-danger pull-right"><i class="fa fa-save fa-2x"></i></button>
            </div>
          </form>
          </div>
        </div>
      </div>
      <?php else: ?>
      <div class="col-lg-6 animated fadeIn animated">
        <div class="col-lg-12">
          <div class="">
            <h5 class="text-muted text-muted">
            <i class="fa fa-file"></i> RESPONSABLE
            </h5>
            <hr>
          </div>
          <div class="">
            <h5><i class="fa fa-exclamation-triangle text-warning" aria-hidden="true"></i>
            Este <i class="fa fa-university text-danger"></i>centro no tiene responsable, ingrese con el siguiente link</h5>
            <a class="btn btn-danger" href="<?php echo baseUrlRole() ?>centrosResponsables/busqueda/<?php echo $ubch->id_ubch ?>"><i class="fa fa-user-plus"></i> Agregar Responsable UBCH</a>
          </div>
        </div>
      </div>
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
            <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>centrosProblematicasUbch/create/<?php echo $ubch->id_ubch ?>"><i class="fa fa-plus text-primary"></i></a>
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
                    <a class="text-danger fa fa-search fa-1x pull-right" href="<?php echo baseUrlRole() ?>centrosProblematicasUbch/<?php echo $u->id_problematica_ubch ?>" onclick="this.parentNode.submit(); return false;"></a>
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
      <?php if ($solicitudes): ?>
      <div class="col-lg-6 animated fadeIn animated">
        <div class="col-lg-12">
          <div class="">
            <h5 class="text-muted text-muted">
            <i class="fa fa-file"></i> SOLICITUDES
            <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>centrosSolicitudesUbch/create/<?php echo $ubch->id_ubch ?>"><i class="fa fa-plus text-primary"></i></a>
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
                    <a class="text-danger fa fa-search fa-1x pull-right" href="<?php echo baseUrlRole() ?>centrosSolicitudesUbch/<?php echo $u->id_solicitud_ubch ?>" onclick="this.parentNode.submit(); return false;"></a>
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
      <?php if ($unoxdiezpadrinos): ?>
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