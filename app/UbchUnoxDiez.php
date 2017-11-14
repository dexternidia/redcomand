<?php 
namespace App;
use App\UbchUnoxDiezIntegrantes;
use \Illuminate\Database\Eloquent\Model;
 
class UbchUnoxDiez extends Model {
    protected $table = 'ubch_registro_unoxdiez';
	public $timestamps = false;
	protected $primaryKey='id_ubch_registro_unoxdiez';
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];

	public function unoxdiez_ahijados()
	{
		return $this->hasMany(UbchUnoxDiezIntegrantes::class,'id_ubch_registro_unoxdiez','id_ubch_registro_unoxdiez');
	}
}

