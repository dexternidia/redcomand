<?php 
namespace App;
use App\Estructura;
use App\Institucion;
use App\MunicipioCne;
use App\ParroquiaCne;
use App\Partido;
use \Illuminate\Database\Eloquent\Model;
 
class ClpResponsable extends Model {
    protected $table = 'responsable_clp';
	public $timestamps = false;
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

	public function instituciones()
	{
		return $this->belongsTo(Institucion::class, 'id_instituciones','id_instituciones');
	}

	public function partidos()
	{
		return $this->belongsTo(Partido::class, 'id_partidos','id_partidos');
	}

	public function estructuras()
	{
		return $this->belongsTo(Estructura::class, 'id_estructura','id_estructura');
	}

	public function centro()
	{
		return $this->hasOne(ParroquiaCne::class, 'id_clp','id_clp');
	}
}

