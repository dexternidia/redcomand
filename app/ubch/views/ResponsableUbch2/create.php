<script language="javascript">
$(document).ready(function(){
$("#municipioSelect").change(function () {
$("#municipioSelect option:selected").each(function () {
//organismo_id = $(this).val();
//id1 = $(this).val();
var idMunicipio = $(this).val();
//alert(idMunicipio);
$.get("<?php echo baseUrlRole() ?>RegistroUbch2/parroquiasCne", { idMunicipio:idMunicipio }, function(data){
$("#ParroquiaSelect").html(data);
});
});
})
});
</script>
<script language="javascript">
$(document).ready(function(){
$("#ParroquiaSelect").change(function () {
$("#ParroquiaSelect option:selected").each(function () {
//organismo_id = $(this).val();
//id1 = $(this).val();
var idParroquia = $(this).val();
//alert(idParroquia);
$.get("<?php echo baseUrlRole() ?>RegistroUbch2/mesasCne", { idParroquia:idParroquia }, function(data){
$("#MesasSelect").html(data);
});
});
})
});
</script>
<div id="panel" class="panel panel-primary">
  <div class="panel-heading" style="background-color: red">
    <h3 class="panel-title text-muted"><i class="fa fa-user-plus fa-2x"></i> INGRESAR RESPONSABLE UBCH</h3>
  </div>
  <br>
  <div class="panel-body">
    <form action="<?php echo baseUrlRole() ?>ResponsableUbch2" method="POST">
      <?php echo Token::field() ?>
      <input type="hidden" name="id_ubch" value="<?php echo $id_ubch ?>">
      <div class="row">
        <div class="col-lg-1">
          <div class="form-group">
            <select class="form-control" name="nacionalidad" id="">
              <option value="V">V</option>
              <option value="E">E</option>
            </select>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="number" name="cedula" placeholder="CEDULA">
          </div>
        </div>
        <div class="col-lg-7">
          <div class="form-group">
            <input class="form-control" type="text" name="nombre_apellido" placeholder="NOMBRE Y APELLIDO">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="EMAIL">
          </div>
        </div>
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
        <div class="col-lg-4">
          <div class="form-group">
            <select id="" class="form-control" name="vehiculo" required/>
              <option value="">VEHICULO</option>
              <option value="1">SI</option>
              <option value="0">NO</option>
            </select>
          </div>
        </div>
        
        <div class="col-lg-4">
          <div class="form-group">
            <select id="municipioSelect" class="form-control" name="id_municipio" required/>
              <?php
              use App\MunicipioCne;
              $municipios = MunicipioCne::all();
              ?>
              <option>MUNICIPIOS</option>
              <option></option>
              <?php foreach ($municipios as $municipio): ?>
              <option value="<?php echo $municipio->id_municipio ?>"><?php echo $municipio->nombre ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <select id="ParroquiaSelect" class="form-control" name="id_parroquia" required/>
            </select>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="form-group">
            <input class="form-control" name="direccion" type="text" placeholder="DIRECCIÓN">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <select id="municipioSelect" class="form-control" name="id_institucion" required/>
              <option value="">INSTITUCIÓN</option>
              <?php foreach ($instituciones as $key => $i): ?>
              <option value="<?php echo $i->id_instituciones ?>"><?php echo $i->nombre ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <select id="municipioSelect" class="form-control" name="id_partido" required/>
              <option value="">PARTIDOS</option>
              <?php foreach ($partidos as $key => $p): ?>
              <option value="<?php echo $p->id_partidos ?>"><?php echo $p->nombre ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <select id="municipioSelect" class="form-control" name="id_estructura" required/>
              <option value="">ESTRUCTURA</option>
              <?php foreach ($estructura as $key => $e): ?>
              <option value="<?php echo $e->id_estructura ?>"><?php echo $e->nombre ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
        
        <div class="col-lg-12">
          <button onclick="enviar()" id="botonSubmit" type="submit" class="btn btn-lg btn-danger pull-right"><i class="fa fa-save fa-2x"></i></button>
        </div>
      </div>
    </div>
    <br>
  </form>
</div>