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
var pregunta_beneficiario = pregunta.split(/\s*-\s*/);
alert(pregunta_beneficiario);
if (pregunta_beneficiario=='1,')
{
//alert(organismo_id);
$("#vehiculos").prop('required',true);
$("#vehiculos").css("display", "block");
$("#vehiculos").addClass( "animated fadeIn" );
}
else
{
$("#vehiculos").prop('required',false);
$("#vehiculos").css("display", "none");
$("#vehiculos").removeClass( "animated fadeIn" );
//alert('otras');
}

if (pregunta_beneficiario=='2,')
{
//alert(organismo_id);
$("#motos").prop('required',true);
$("#motos").css("display", "block");
$("#motos").addClass( "animated fadeIn" );
}
else
{
$("#motos").prop('required',false);
$("#motos").css("display", "none");
$("#motos").removeClass( "animated fadeIn" );
//alert('otras');
}

if (pregunta_beneficiario=='3,')
{
//alert(organismo_id);
$("#movistar").prop('required',true);
$("#movistar").css("display", "block");
$("#movistar").addClass( "animated fadeIn" );
}
else
{
$("#movistar").prop('required',false);
$("#movistar").css("display", "none");
$("#movistar").removeClass( "animated fadeIn" );
//alert('otras');
}

if (pregunta_beneficiario=='3,')
{
//alert(organismo_id);
$("#movilnet").prop('required',true);
$("#movilnet").css("display", "block");
$("#movilnet").addClass( "animated fadeIn" );
}
else
{
$("#movilnet").prop('required',false);
$("#movilnet").css("display", "none");
$("#movilnet").removeClass( "animated fadeIn" );
//alert('otras');
}

if (pregunta_beneficiario=='3,')
{
//alert(organismo_id);
$("#digitel").prop('required',true);
$("#digitel").css("display", "block");
$("#digitel").addClass( "animated fadeIn" );
}
else
{
$("#digitel").prop('required',false);
$("#digitel").css("display", "none");
$("#digitel").removeClass( "animated fadeIn" );
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
            <select id="preguntaBeneficiario" class="form-control text-uppercase" name="tipo" required/>
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
        <br>
        <input class="col-lg-4" style="display: none" class="form-control" id="vehiculos" type="number" placeholder="INGRESE NUMEROS DE VEHICULOS"/>

        <input class="col-lg-4" style="display: none" class="form-control" id="motos" type="number" placeholder="INGRESE NUMEROS DE MOTOS"/>

      <div style="display: none" id="movistar" class="col-lg-12" placeholder="INGRESE NUMEROS MOVISTAR">
        <input class="form-control" type="text" value="" data-role="tagsinput" placeholder="INGRESE NUMEROS MOVISTAR" />
      </div>

      <div style="display: none" id="movilnet" class="col-lg-12" placeholder="INGRESE NUMEROS MOVILNET">
        <input class="form-control" type="text" value="" data-role="tagsinput" placeholder="INGRESE NUMEROS MOVISTAR" />
      </div>

      <div style="display: none" id="digitel" class="col-lg-12" placeholder="INGRESE NUMEROS DIGITEL">
        <input class="form-control" type="text" value="" data-role="tagsinput" placeholder="INGRESE NUMEROS MOVISTAR" />
      </div>
     
    
        <button onclick="enviar()" id="botonSubmit" type="submit" class="btn btn-lg btn-danger pull-right"><i class="fa fa-save fa-2x"></i></button>
      </div>
      <br>
    </form>
  </div>