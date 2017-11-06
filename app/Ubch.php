<?php 
namespace App;
use App\MunicipioCne;
use App\ParroquiaCne;
use App\Problematica;
use \Illuminate\Database\Eloquent\Model;
 
class Ubch extends Model {
    protected $table = 'registro_ubch';
	public $timestamps = false;
	protected $primaryKey='id_ubch';
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
	public function municipio()
	{
		return $this->hasOne(MunicipioCne::class, 'id_municipio','id_municipio');
	}

	public function parroquia()
	{
		return $this->hasOne(ParroquiaCne::class, 'id_parroquia','id_parroquia');
	}

	public function responsable()
	{
		return $this->hasOne(UbchResponsable::class, 'id_ubch','id_ubch');
	}

	public function mesas()
	{
		return $this->belongsTo(MesasCne::class, 'tipo_solicitud_id', 'id');
	}

	public function requerimientos()
	{
		return $this->hasMany(Requerimiento::class,'id_ubch','id_ubch');
	}

	public function problematicas()
	{
		return $this->hasMany(Problematica::class,'id_ubch','id_ubch');
	}
}
