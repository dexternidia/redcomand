<script language="javascript">
$(document).ready(function(){
$("#municipioSelect").change(function () {
$("#municipioSelect option:selected").each(function () {
//organismo_id = $(this).val();
//id1 = $(this).val();
var idMunicipio = $(this).val();
//alert(idMunicipio);
$.get("<?php echo baseUrl ?>admin/RegistroUbch/parroquias", { idMunicipio:idMunicipio }, function(data){
$("#ParroquiaSelect").html(data);
});
});
})
});
</script>

<script language="javascript">
$(document).ready(function(){
var inputEmail = $("#inputEmail").val();
//alert(tipo_id);
$.get("<?php echo baseUrl ?>admin/RegistroUbch/parroquias", { idMunicipio:idMunicipio }, function(data){
$("#ParroquiaSelect").html(data);
});
});

$('#IngresarSolicitante').click(function () {
      $(":input").each(function(){
          this.value = this.value.toUpperCase();          
      });
});

function enviar(argument) {
  var email = $("#inputEmail").val();
  //alert(inputEmail);
$.get("<?php echo baseUrl ?>admin/solicitantes/verificar_email", { email:email }, function(existe){

if(existe == true) {
  swal(
  'Error...',
  'El email ya esta registrado por solicitante.',
  'error'
)
} 
else {
$("#IngresarSolicitante").submit();
}
});
}
</script>

<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-user-plus fa-2x"></i> INGRESAR RESPONSABLE UBCH</h3>
  </div>
  <br>
  <div class="panel-body">
    <form action="<?php echo baseUrl ?>admin/solicitantes" method="POST">
      <?php echo Token::field() ?>
      <div class="row">
        <div class="col-lg-2">
          <div class="form-group">
            <?php if (isset($ubch->nacionalidad)): ?>
            <select class="form-control" name="nacionalidad" required readonly/>
              <option value="<?php echo $ubch->nacionalidad ?>"><?php echo $ubch->nacionalidad ?></option>
            </select>
            <?php else: ?>
            <select class="form-control" name="nacionalidad" required/>
              <option value="">Nacionalidad</option>
              <option value=""></option>
              <option value="V">V</option>
              <option value="E">E</option>
            </select>
            <?php endif ?>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <?php if (isset($ubch->cedula)): ?>
            <input class="form-control" type="text" name="cedula" placeholder="Cédula" value="<?php echo $ubch->cedula ?>" required readonly>
            <?php else: ?>
            <input class="form-control" type="text" name="cedula" placeholder="Cédula" required/>
            <?php endif ?>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <?php if (isset($ubch->nombre_apellido)): ?>
            <input class="form-control text-uppercase" type="text" name="nombre_apellido" placeholder="Nombre y Apellido" value="<?php echo $ubch->nombre_apellido ?>" required readonly/>
            <?php else: ?>
            <input class="form-control" type="text" name="nombre_apellido" placeholder="Nombre y Apellido" required/>
            <?php endif ?>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input id="inputEmail" class="form-control" type="email" name="email" placeholder="Email"/>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" data-inputmask="'mask': '(9999) 999-9999'" type="text"  name="telefono_1" placeholder="Telefono n°1" required/>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" data-inputmask="'mask': '(9999) 999-9999'" type="text" name="telefono_2" placeholder="Telefono n°2"/>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <select id="municipioSelect" class="form-control" name="id_municipio" required/>
              <?php
              use App\Municipio;
              $municipios = Municipio::all();
              ?>
              <?php if(isset($ubch->id_municipio)): ?>
              <?php $municipio_solicitante = Municipio::find($ubch->id_municipio); ?>
              <option value="<?php echo $municipio_solicitante->id_municipio ?>"><?php echo $municipio_solicitante->nombre ?></option>
              <?php else: ?>
              <option value="">MUNICIPIOS</option>
              <?php endif ?>
              <option value="">-----------------</option>
              <?php foreach ($municipios as $municipio): ?>
              <option value="<?php echo $municipio->id_municipio ?>"><?php echo $municipio->nombre ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <select id="ParroquiaSelect" class="form-control" name="id_parroquia" required/>
              <?php
              use App\Parroquia;
              $parroquias = Parroquia::all();
              ?>
              <?php if (isset($ubch->id_parroquia)): ?>
              <?php $parroquia_solicitante = Parroquia::find($ubch->id_parroquia); ?>
              <option value="<?php echo $parroquia_solicitante->id_parroquia ?>"><?php echo $municipio_solicitante->nombre ?></option>
              <?php else: ?>
              <option value="">PARROQUIAS</option>
              <?php endif ?>
              <option value="">-----------------</option>
              <?php foreach ($parroquias as $parroquia): ?>
              <option value="<?php echo $parroquia->id_parroquia ?>"><?php echo $parroquia->nombre ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <?php if (isset($ubch->sector)): ?>
            <input class="form-control" type="text" name="sector" placeholder="Urbanización/Barrio/Sector" value="<?php echo $ubch->sector ?>" required/>
            <?php else: ?>
            <input class="form-control" type="text" name="sector" placeholder="Urbanización/Barrio/Sector" required/>
            <?php endif ?>
          </div>
        </div>
      </div>
      <br>
      <button onclick="enviar()" id="botonSubmit" type="submit" class="btn btn-lg btn-primary pull-right"><i class="fa fa-save fa-2x"></i></button>
    </form>
  </div>
</div>  