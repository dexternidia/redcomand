<?php
namespace System\tools\session;
/**
* 
*/
class User
{
	static function data()
	{
	    //$test = new \System\tools\session\Session;
	    //$test = new System\tools\session\Session;
	    $has_session = session_status() == PHP_SESSION_ACTIVE;
	    if(!$has_session == TRUE)
	    {
	        \System\tools\rounting\Redirect::sendController('','info','Sesión ya expiro, porfavor vuelva a loguearse.');
	    }
	    else
	    {
	        $usuario = (object) \System\tools\session\Session::get('current_user');
	        return $usuario;
	    }
	}
}


