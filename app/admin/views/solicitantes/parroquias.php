<?php
//SECCIÓN DE CARGA DE LIBRERIAS Y MODELOS
require __DIR__ . '/vendor/autoload.php';
use DB\Eloquent;
use Models\Comercio;
use Models\Parroquia;

new Eloquent();
//\krumo::dump($comercios);
$id_municipio = $_POST['idmunicipio'];
$parroquias = Parroquia::where('id_municipio',$id_municipio)->get();
//var_dump($parroquias);
echo "<option value=''>PARROQUIA</option>";
echo "<optgroup label='-------'></optgroup>";
foreach ($parroquias as $key => $parroquia) {
	echo '<option value="'.$parroquia->id_parrouia.'">'.$parroquia->nombre_parroquia.'</option>';
}
?>
