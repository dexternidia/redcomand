<script language="javascript">
$(document).ready(function(){
$("#municipioSelect").change(function () {
$("#municipioSelect option:selected").each(function () {
//organismo_id = $(this).val();
//id1 = $(this).val();
var idMunicipio = $(this).val();
//alert(idMunicipio);
$.get("<?php echo baseUrl ?>admin/RegistroUbch/parroquiasCne", { idMunicipio:idMunicipio }, function(data){
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
$.get("<?php echo baseUrl ?>admin/RegistroUbch/mesasCne", { idParroquia:idParroquia }, function(data){
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
    <form action="<?php echo baseUrl ?>admin/RegistroUbch" method="POST">
      <?php echo Token::field() ?>
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
            <input class="form-control" type="number" placeholder="CEDULA">
          </div>
        </div>
        <div class="col-lg-7">
          <div class="form-group">
            <input class="form-control" type="text" placeholder="NOMBRE Y APELLIDO">
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
            <input class="form-control" type="text" placeholder="DIRECCIÓN">
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