<?php
namespace App\clp\controllers;

use App\MesasCne;
use App\Ubch;
use Carbon\Carbon;

class Centros2
{
    function __construct()
    {
        Role('ubch');
    }

    public function index()
    {
        $user = User();
        $centros = Ubch::where('id_municipio',$user['id_municipio'])
        ->where('id_parroquia',$user['id_parroquia'])
        ->get();

        View(compact('centros'));
    }

    public function create()
    {
        $user = User();
        $mesas_cne = MesasCne::where('id_municipio',$user['id_municipio'])
        ->where('id_parroquia',$user['id_parroquia'])
        ->where('mesa',1)
        ->where('estatus',0)
        ->get();
        //Arr($mesas_cne);
        View(compact('mesas_cne'));
    }

    public function store()
    {
        extract($_POST);
        extract($_GET);

        $user = User();

        $mesa = MesasCne::where('id_mesas_cne',$id_mesa)->first();
        $centro = MesasCne::where('codigo_cne',$mesa->codigo_cne)->get();


        $existeUbch = Ubch::where('nombre_ubch',$mesa->nombre)
        ->where('id_municipio',$mesa->id_municipio)
        ->where('id_parroquia',$mesa->id_parroquia)
        ->first();

        if(!$existeUbch)
        {
            $nombre_ubch = $mesa->nombre;
            $direccion_ubch = $mesa->direccion;
            $fecha_hora_registro = Carbon::now();
            list($fecha_registro,$hora_registro) = explode(' ', $fecha_hora_registro);
            $ubch = new Ubch;
            $ubch->codigo_cne = $mesa->codigo_cne;
            $ubch->numero_mesas = $centro->count();
            $ubch->cantidad_electores = $centro->sum('cant_electores');
            $ubch->nombre_ubch = $nombre_ubch;
            $ubch->id_municipio = $user['id_municipio'];
            $ubch->id_parroquia = $user['id_parroquia'];
            $ubch->direccion_ubch = $direccion_ubch;
            $ubch->estatus = 0;
            $ubch->id_clp = 0;
            $ubch->fecha_registro = $fecha_registro;
            $ubch->hora_registro = $hora_registro;  
            $ubch->eliminar = 0;

            if($ubch->save())
            {
                $mesa->estatus = 1;
                $mesa->save();
                Success('centros/'.$ubch->id,'UBCH registrado, porceda a ingresar responsable.');
            }
            else
            {
                Error('centros/create','Error al ingresar ubch.');
            }
        }
        else
        {
            Error('centros/create','El Centro ya existe.');
        }
    }

    public function show($id)
    {
        $ubch = Ubch::find($id);
        $responsable = $ubch->responsable;
        $solicitudes_comunicaciones = $ubch->solicitudes_comunicaciones;
        $problematicas = $ubch->problematicas;
        $unoxdiezpadrinos = $ubch->unoxdiez_padrinos;
        Arr($unoxdiezpadrinos);
        //View(compact('ubch','responsable','solicitudes_comunicaciones','problematicas'));
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