<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class MesaTestigo extends Model {
    protected $table = 'mesas_ubch_testigos';
	public $timestamps = false;
	protected $primaryKey='id_mesas_ubch_testigos';
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];
}

