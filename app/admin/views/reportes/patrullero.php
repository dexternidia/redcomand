<div id="panel" class="panel panel-primary">
  <div class="panel-heading" style="background-color: red">
    <h3 class="panel-title text-muted"><i class="fa fa-handshake-o fa-2x"></i> REPORTE UBCH<b></b> </h3>
  </div>
  <div class="panel-body">
    <div class="col-md-12">
      <table>
      <tr>
        <td style="margin:center">
          <img width="100%" src="<?php echo baseUrl ?>assets/img/elecciones-municipales.png"/>
        </td>
      </tr>
    </table>
    <br/>
    <div class="pull-right">
      BARINAS <?php echo date('d/m/y'); ?>
    </div>
      <table class="table table-striped table-condensed animated fadeIn" data-striped="true">
        <thead>
          <tr>
            <th width="20%">Nombre</th>
            <th width="8%">Cédula</th>
            <th width="10%">Municipio</th>
            <th width="10%">Parroquia</th>
            <th width="20%">Dirección</th>
            <th width="10%">Télefono 1</th>
            <th width="10%">Télefono 2</th>
            <th width="15%">N° Patrullados</th>
          </tr>
        </thead>
        <tbody>
          
          <?php foreach ($unox10 as $key => $u): ?>
          <tr>
            <td><?php echo $u->nombre ?> <?php echo $u->apellido ?></td>
            <td><?php echo $u->cedula ?></td>
            <td><?php echo $u->municipio->nombre ?></td>
            <td>
              <?php 
              $parroquia = \App\ParroquiaCne::where('id_municipio',$u->id_municipio)->where('id_parroquia',$u->id_parroquia)->first();
              echo $parroquia->nombre;
               ?>
            </td>
            <td><?php echo $u->direccion ?></td>
            <td><?php echo $u->telefono_1 ?></td>
            <td><?php echo $u->telefono_2 ?></td>
            <td><?php echo $u->patrullados->count() ?></td>
          </tr>
          <?php endforeach ?>          
        </tbody>
      </table>
      <div class="text-center">        
      </div>
    </div>
  </div>
</div>
</div>