<?php
namespace App\clp\controllers;

use App\Institucion;
use App\Ubch;
use App\admin\controllers\RegistroUbch;
use System\core\BaseController;
use System\tools\session\User;

class CuentasUbch extends BaseController
{
    function __construct()
    {
        Role('clp');
    }

    public function index()
    {
        View();
    }

    public function create()
    {
        //Arr($usuario);
        $usuario = User();
        $ubch = Ubch::where('id_municipio',$usuario['id_municipio'])
        ->where('id_parroquia',$usuario['id_parroquia'])
        ->get();

        Arr($ubch);
        $organismos = Institucion::all();
        //View(compact('ubch','organismos'));
    }

    public function store()
    {

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