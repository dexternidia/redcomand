<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class CentroResponsable extends Model {
    protected $table = 'responsable_ubch';
	public $timestamps = false;
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];

}

