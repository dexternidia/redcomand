<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class MunicipalResponsable extends Model {
    protected $table = 'responsable_municipal';
	public $timestamps = false;
	protected $primaryKey='id_responsable_municipal';
    //Ejemplo de definir campos
    //protected $fillable = ['username','email','password'];

}

