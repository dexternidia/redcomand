<?php 
namespace App;
use App\Ubch;
use App\Usuario;
use \Illuminate\Database\Eloquent\Model;
 
class CentroClp extends Model {
    protected $table = 'centros_clp';
	protected $primaryKey='id_centros_clp';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
	public function clp()
	{
		return $this->belongsTo(Usuario::class, 'id_clp', 'id_clp');
	}

	public function ubch()
	{
		return $this->hasOne(Ubch::class, 'codigo_cne','codigo_cne');
	}
}

