<div id="panel" class="panel panel-primary">
  <div class="panel-heading" style="background-color: red">
    <h3 class="panel-title text-muted"><i class="fa fa-search fa-2x"></i> CONSULTAS<b></b>
    <!--    <a class="btn btn-default pull-right" href="<?php echo baseUrlRole() ?>centrosMunicipal/create"><i class="fa fa-plus-square text-muted"></i><i style="color:#777;"> Agregar Centro</i></a>  -->   </h3>
  </div>
  <div class="panel-body">
    <br>
    <div class="col-lg-12">
      <div class="col-lg-6">
        <form action="<?php echo baseUrl ?>municipal/consultas/index" method="POST">
          <?php echo Token::field() ?>
          <input class="form-control" name="cedula" type="number" placeholder="INGRESE CEDULA">
        </div>
        <div class="col-lg-1">
          <button class="btn btn-danger" type="submit"><i class="fa fa-search"></i></button>
        </div>
      </form>
    </div>
    <br><br><br>

    <?php if (isset($responsable_municipal) and $responsable_municipal): ?>
    <div class="row">
      <div class="col-lg-6 animated fadeInLeft">
        <div class="col-lg-12">
          <div class="">
            <h5 class="text-muted text-muted">
            <i class="fa fa-map-marker text-danger"></i> RESPONSABLE MUNICIPAL
            </h5>
            <hr>
          </div>
          <div class="">
            <table class="table table-user-information panel panel-default animated fadeIn">
              <tbody>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-map-signs"></i> MUNICIPIO:</b></td>
                  <td class="text-uppercase">
                    <td><?php echo $responsable_municipal->municipio->nombre ?></td>
                  </td>
                </tr>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-phone-square"></i> TLF 1:</b></td>
                  <td class="text-uppercase">
                    <td><?php echo $responsable_municipal->telefono_1 ?></td>
                  </td>
                </tr>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-phone"></i> TLF 2:</b></td>
                  <td class="text-uppercase">
                    <td><?php echo $responsable_municipal->telefono_2 ?></td>
                  </td>
                </tr>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-envelope-o"></i> EMAIL:</b></td>
                  <td class="text-uppercase">
                    <td><?php echo $responsable_municipal->email ?></td>
                  </td>
                </tr>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-id-card-o"></i> INSTITUCIÓN:</b></td>
                  <td class="text-uppercase">
                    <td><?php echo $responsable_municipal->instituciones->nombre ?></td>
                  </td>
                </tr>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-id-card-o"></i> PARTIDO:</b></td>
                  <td class="text-uppercase">
                    <td><?php echo $responsable_municipal->partidos->nombre ?></td>
                  </td>
                </tr>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-id-card-o"></i> ESTRUCTURA:</b></td>
                  <td class="text-uppercase">
                    <td><?php echo $responsable_municipal->estructuras->nombre ?></td>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?php else: ?>
    <?php endif ?>

   

    <?php if (isset($responsable_clp) and $responsable_clp): ?>
    <div class="row">
      <div class="col-lg-6 animated fadeInLeft">
        <div class="col-lg-12">
          <div class="">
            <h5 class="text-muted text-muted">
            <i class="fa fa-street-view text-danger"></i> RESPONSABLE CLP
            </h5>
            <hr>
          </div>
          <div class="">
            <table class="table table-user-information panel panel-default animated fadeIn">
              <tbody>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-map-signs"></i> MUNICIPIO:</b></td>
                  <td class="text-uppercase">
                    <td><?php echo $responsable_clp->municipio->nombre ?></td>
                  </td>
                </tr>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-phone-square"></i> TLF 1:</b></td>
                  <td class="text-uppercase">
                    <td><?php echo $responsable_clp->telefono_1 ?></td>
                  </td>
                </tr>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-phone"></i> TLF 2:</b></td>
                  <td class="text-uppercase">
                    <td><?php echo $responsable_clp->telefono_2 ?></td>
                  </td>
                </tr>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-envelope-o"></i> EMAIL:</b></td>
                  <td class="text-uppercase">
                    <td><?php echo $responsable_clp->email ?></td>
                  </td>
                </tr>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-id-card-o"></i> INSTITUCIÓN:</b></td>
                  <td class="text-uppercase">
                    <td><?php echo $responsable_clp->instituciones->nombre ?></td>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?php else: ?>
    <?php endif ?>

    <?php if (isset($responsable_ubch) and $responsable_ubch): ?>
    <div class="row">
      <div class="col-lg-6 animated fadeInLeft">
        <div class="col-lg-12">
          <div class="">
            <h5 class="text-muted text-muted">
            <i class="fa fa-file-text-o text-danger"></i> RESPONSABLE UBCH
            </h5>
            <hr>
          </div>
          <div class="">
            <table class="table table-user-information panel panel-default animated fadeIn">
              <tbody>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-map-signs"></i> MUNICIPIO:</b></td>
                  <td class="text-uppercase">
                    <td><?php echo $responsable_ubch->municipio->nombre ?></td>
                  </td>
                </tr>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-map-signs"></i> DIRECCIÓN:</b></td>
                  <td class="text-uppercase">
                    <td><?php echo $responsable_ubch->direccion ?></td>
                  </td>
                </tr>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-phone-square"></i> TLF 1:</b></td>
                  <td class="text-uppercase">
                    <td><?php echo $responsable_ubch->telefono_1 ?></td>
                  </td>
                </tr>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-phone"></i> TLF 2:</b></td>
                  <td class="text-uppercase">
                    <td><?php echo $responsable_ubch->telefono_2 ?></td>
                  </td>
                </tr>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-envelope-o"></i> EMAIL:</b></td>
                  <td class="text-uppercase">
                    <td><?php echo $responsable_ubch->email ?></td>
                  </td>
                </tr>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-id-card-o"></i> INSTITUCIÓN:</b></td>
                  <td class="text-uppercase">
                    <td><?php echo $responsable_ubch->instituciones->nombre ?></td>
                  </td>
                </tr>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-id-card-o"></i> PARTIDO:</b></td>
                  <td class="text-uppercase">
                    <td><?php echo $responsable_ubch->partidos->nombre ?></td>
                  </td>
                </tr>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-id-card-o"></i> ESTRUCTURA:</b></td>
                  <td class="text-uppercase">
                    <td><?php echo $responsable_ubch->estructuras->nombre ?></td>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?php else: ?>
    <?php endif ?>


    <?php if (isset($profesionales) and $profesionales): ?>
    <div class="row">
      
      <div class="col-lg-6 animated fadeInRight">
        <div class="col-lg-12">
          <div class="">
            <h5 class="text-muted">
            <i class="fa fa-graduation-cap text-danger"></i> DATOS PROFESIONALES
            </h5>
            <hr>
          </div>
          <div class="">
            <table class="table table-user-information panel panel-default animated fadeIn">
              <tbody>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-id-card-o"></i> NOMBRE Y APELLIDO:</b></td>
                  <td class="text-uppercase"><?php echo ucwords($profesionales->nombres) ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa-graduation-cap"></i> PROFESIÓN:</b></td>
                  <td class="text-uppercase"><?php echo $profesionales->profesion ?></td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-briefcase"></i> CARGO:</b></td>
                  <td class="text-uppercase"><?php echo $profesionales->cargo ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?php else: ?>
    <?php endif ?>
    <?php if (isset($cedula) and $cedula): ?>
    <div class="row">
      <div class="col-lg-6 animated fadeInUp">
        <div class="col-lg-12">
          <div class="">
            <h5 class="text-muted text-muted">
            <i class="fa fa-file-text-o text-danger"></i> DATOS DE BENEFICIOS
            </h5>
            <hr>
          </div>
          <div class="">
            <table class="table table-user-information panel panel-default animated fadeIn">
              <tbody>
                <tr>
                  <td width="30%" class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-pencil"></i> FIRMO:</b></td>
                  <td class="text-uppercase">
                    <?php if ($firmo_contra): ?>
                    <td>Si</td>
                    <?php else: ?>
                    <td>No</td>
                    <?php endif ?>
                  </td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E9E9E9;"><b><i class="fa fa-home"></i> HOGARES ASIGNADOS:</b></td>
                  <td class="text-uppercase">
                    <?php if ($hogares_asignados): ?>
                    <td>Si</td>
                    <?php else: ?>
                    <td>No</td>
                    <?php endif ?>
                  </td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-home"></i> HOGARES POR ASIGNAR:</b></td>
                  <td class="text-uppercase">
                    <?php if ($hogares_por_asignar): ?>
                    <td>Si</td>
                    <?php else: ?>
                    <td>No</td>
                    <?php endif ?>
                  </td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-credit-card"></i> POR PENSIONAR:</b></td>
                  <td class="text-uppercase">
                    <?php if ($por_pensionar): ?>
                    <td>Si</td>
                    <?php else: ?>
                    <td>No</td>
                    <?php endif ?>
                  </td>
                </tr>
                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-credit-card"></i> PENSIONADOS:</b></td>
                  <td class="text-uppercase">
                    <?php if ($ya_pensionados): ?>
                    <td>Si</td>
                    <?php else: ?>
                    <td>No</td>
                    <?php endif ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?php else: ?>
    <?php endif ?>


  </div>
</div>
</div>
</div>
</div>