<?php
namespace App\municipal\controllers;

use App\Institucion;
use App\Ubch;
use App\Usuario;
use App\admin\controllers\RegistroUbch;
use Carbon\Carbon;
use System\core\BaseController;
use System\tools\session\User;

class CuentasUbchMunicipal extends BaseController
{
    function __construct()
    {
        Role('municipal');
    }

    public function index()
    {
        $usuario = User();
        $usuariosubch = Usuario::orderBy('id', 'DESC')
        ->where('id_municipio',$usuario['id_municipio'])
        ->where('role','!=','admin')
        ->where('role','!=','ubch')
        ->where('role','!=','patrullero')
        ->where('role','!=','municipal')
        ->get();
        View(compact('usuariosubch'));
    }

    public function create()
    {
        //Arr($usuario);
        $usuario = User();
        $centros = Ubch::where('id_municipio',$usuario['id_municipio'])
        ->where('id_parroquia',$usuario['id_parroquia'])
        ->get();

        //Arr($ubch);
        $organismos = Institucion::all();
        View(compact('centros','organismos'));
    }

    public function store()
    {
        extract($_POST);
        //Arr($_POST);
        $clave = password_hash($password, PASSWORD_DEFAULT);
        $user = User();

        $usuario_existe = Usuario::where('email',$email)->first();

        if(!$usuario_existe)
        {
            $usuario = new Usuario;
            $usuario->name = $name;
            $usuario->email = $email;
            $usuario->password = $clave;
            $usuario->role = 'clp';
            $usuario->id_instituciones = $id_instituciones;
            $usuario->id_municipio = $user['id_municipio'];
            $usuario->id_parroquia = $user['id_parroquia'];
            $usuario->id_municipal = $user['id'];
            $usuario->id_clp = 0;
            $usuario->id_ubch = 0;
            $usuario->id_patrullero = 0;
            $usuario->created_at = Carbon::now();
            $usuario->updated_at = Carbon::now();
            $usuario->estatus = 0;
            
            if($usuario->save())
            {
                $clp = Usuario::find($usuario->id);
                $clp->id_clp = $clp->id;
                $clp->save();
                Success('clps','La cuenta fue creada.');
            }
            else
            {
                Error('CuentasUbchMunicipal/create','Error al crear la cuenta.');
            }
        }
        else
        {
            Error('CuentasUbchMunicipal/create','Nombre de usuario ya esta en uso.!');
        }
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        View(compact('id'));
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}