<?php 
namespace App;
use App\Municipio;
use App\Parroquia;
use \Illuminate\Database\Eloquent\Model;
 
class Ubch extends Model {
    protected $table = 'ubch';
	public $timestamps = false;
	protected $primaryKey='id_ubch';
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
	public function municipio()
	{
		return $this->hasOne(Municipio::class, 'id_municipio','id_municipio');
	}

	public function parroquia()
	{
		return $this->hasOne(Parroquia::class, 'id_parroquia','id_parroquia');
	}
}
