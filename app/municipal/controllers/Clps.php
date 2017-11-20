<?php
namespace App\municipal\controllers;

use App\Usuario;

class Clps
{
    function __construct()
    {
        Role('municipal');
    }

    public function index()
    {
        $user = User();
        $clps = Usuario::orderBy('id', 'DESC')
        ->where('id_municipio',$user['id_municipio'])
        ->where('role','!=','admin')
        ->where('role','!=','ubch')
        ->where('role','!=','municipal')
        ->where('role','!=','patrullero')
        ->get();
        View(compact('clps'));
    }

    public function create()
    {
        View();
    }

    public function store()
    {

    }

    public function show($id)
    {
        $usuario = Usuario::find($id);
        $centros = $usuario->centros;
        View(compact('centros'));
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