<div id="panel" class="panel panel-primary">
  <div class="panel-heading" style="background-color: red">
    <h3 class="panel-title text-muted"><i class="fa fa-handshake-o fa-2x"></i> REPORTE CLP<b></b> </h3>
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
            <th width="25%">Nombre</th>
            <th width="25%">Dirección</th>
            <th width="10%">Municipio</th>
            <th width="10%">Parroquia</th>
            <th width="10%">Responsable</th>
            <th width="6%">N° Centros</th>
          </tr>
        </thead>
        <tbody>
          
          <?php foreach ($clps as $key => $c): ?>
          <tr>
            <td><?php echo $c->nombre ?></td>
            <td><?php echo $c->direccion ?></td>
            <td><?php echo $c->municipio->nombre ?></td>
            <td>
              <?php 
              $parroquia = \App\ParroquiaCne::where('id_municipio',$c->id_municipio)->where('id_parroquia',$c->id_parroquia)->first();
              echo $parroquia->nombre;
               ?>
            </td>
            <td><?php echo $c->responsable->nombre_apellido ?></td>
            <td><?php echo $c->centros->count() ?></td>
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