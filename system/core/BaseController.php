<?php  
namespace System\core;

abstract class BaseController 
{
	public function __construct()
    {
    	
    }

	public function User()
	{
	    $test = new \System\tools\session\Session;
	    $has_session = session_status() == PHP_SESSION_ACTIVE;
	    if(!$has_session == TRUE)
	    {
	        \System\tools\rounting\Redirect::sendController('','info','Sesión ya expiro, porfavor vuelva a loguearse.');
	    }
	    else
	    {
	        //$usuario = "";
	        $usuario = \System\tools\session\Session::get('current_user');
	        $arr = array('id'=>$usuario['id'],'name'=>$usuario['name']);
	        $arr = (object) $arr;
	        $GLOBALS['user'] = $arr;
	        return $arr;
	    }
	}
}
