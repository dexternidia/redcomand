<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class Solicitud extends Model {
    protected $table = 'solicitud_ubch';
	public $timestamps = false;
	protected $primaryKey='id_solicitud_ubch';

    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];

	public function tipo()
	{
		return $this->belongsTo(TipoProblematica::class, 'id_tipo_solicitud','id_tipo_solicitud');
	}
}

