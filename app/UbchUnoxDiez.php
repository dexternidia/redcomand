<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class UbchUnoxDiez extends Model {
    protected $table = 'ubch_registro_unoxdiez';
	public $timestamps = false;
	protected $primaryKey='id_ubch_registro_unoxdiezPrimary';
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
}

