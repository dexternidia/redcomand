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
            <th width="25%">Nombre</th>
            <th width="25%">Dirección</th>
            <th width="10%">Municipio</th>
            <th width="10%">Parroquia</th>
            <th width="10%">Responsable</th>
            <th width="6%">N° Patrulleros</th>
          </tr>
        </thead>
        <tbody>
          
          <?php foreach ($ubchs as $key => $u): ?>
          <tr>
            <td><?php echo $u->nombre_ubch ?></td>
            <td><?php echo $u->direccion_ubch ?></td>
            <td><?php echo $u->municipio->nombre ?></td>
           <td>
              <?php 
              $parroquia = \App\ParroquiaCne::where('id_municipio',$u->id_municipio)->where('id_parroquia',$u->id_parroquia)->first();
              echo $parroquia->nombre;
               ?>
            </td>
            <td><?php echo $u->responsable->nombre_apellido ?></td>
            <td><?php echo $u->patrulleros->count() ?></td>
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