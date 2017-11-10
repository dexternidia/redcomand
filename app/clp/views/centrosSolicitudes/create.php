<script src="<?php echo baseUrl ?>node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<link rel="stylesheet" href="<?php echo baseUrl ?>assets/bower/trumbowyg/dist/ui/trumbowyg.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
<script src="<?php echo baseUrl ?>assets/bower/trumbowyg/dist/trumbowyg.min.js"></script>
<script>
$(document).ready(function(){
$("#preguntaBeneficiario").change(function () {
$("#preguntaBeneficiario option:selected").each(function () {
//organismo_id = $(this).val();
//id1 = $(this).val();
var pregunta = $(this).val();
var pregunta_beneficiario = pregunta.split('-');
alert(pregunta_beneficiario[0]);

if (pregunta_beneficiario==1)
{
//alert(organismo_id);
$("#telefonosMovistar").prop('required',true);
$("#telefonosMovistar").css("display", "block");
$("#telefonosMovistar").addClass( "animated fadeIn" );
}
else
{
$("#telefonosMovistar").prop('required',false);
$("#telefonosMovistar").css("display", "none");
$("#telefonosMovistar").removeClass( "animated fadeIn" );
//alert('otras');
}

if (pregunta_beneficiario==2)
{
//alert(organismo_id);
$("#telefonoMovilnet").prop('required',true);
$("#telefonosMovilnet").css("display", "block");
$("#telefonosMovistar").addClass( "animated fadeIn" );
}
else
{
$("#telefonosMovistar").prop('required',false);
$("#telefonosMovistar").css("display", "none");
$("#telefonosMovistar").removeClass( "animated fadeIn" );
//alert('otras');
}

if (pregunta_beneficiario==3)
{
//alert(organismo_id);
$("#telefonosMovistar").prop('required',true);
$("#telefonosMovistar").css("display", "block");
$("#telefonosMovistar").addClass( "animated fadeIn" );
}
else
{
$("#telefonosMovistar").prop('required',false);
$("#telefonosMovistar").css("display", "none");
$("#telefonosMovistar").removeClass( "animated fadeIn" );
//alert('otras');
}
});
});
});
</script>
<div id="panel" class="panel panel-primary">
  <div class="panel-heading" style="background-color: red">
    <h3 class="panel-title text-muted"><i class="fa fa-university fa-2x"></i> INGRESAR PROBLEMATICA</h3>
  </div>
  <br>
  <div class="panel-body">
    <form action="<?php echo baseUrlRole() ?>centrosProblematicas" method="POST">
      <?php echo Token() ?>
      <input type="hidden" name="id_ubch" value="<?php echo $id_ubch ?>">
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <select id="preguntaBeneficiario" class="form-control" name="tipo" required/>
              <option>PROBLEMATICAS</option>
              <?php $n = 0; ?>
              <?php foreach ($tipo as $key => $t): ?>
              <?php $n = $n + 1; ?>
              <option value="<?php echo $n ?>-<?php echo $t->id_problema ?>"><?php echo $t->nombre ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
      </div>
      <div style="display: none" id="telefonosMovistar" class="col-lg-12" placeholder="INGRESE NUMEROS MOVISTAR">
        <input class="form-control" type="text" value="" data-role="tagsinput"/>
      </div>
      <br>
      <div style="display: none" id="telefonoMovilnet" class="col-lg-12" placeholder="INGRESE NUMEROS MOVILNET">
        <input class="form-control" type="text" value="" data-role="tagsinput"/>
      </div>
      <div style="display: none" id="telefonoDigitel" col-lg-12" placeholder="INGRESE NUMEROS DIGITEL">
        <input class="form-control" type="text" value="" data-role="tagsinput"/>
      </div>
      <div class="col-lg-12">
        <button onclick="enviar()" id="botonSubmit" type="submit" class="btn btn-lg btn-danger pull-right"><i class="fa fa-save fa-2x"></i></button>
      </div>
      <br>
    </form>
  </div>