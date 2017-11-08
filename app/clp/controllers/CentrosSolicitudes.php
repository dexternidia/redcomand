<?php
namespace App\clp\controllers;

use App\TipoSolicitud;

class CentrosSolicitudes
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
        $id_ubch = Uri(5);
        $tipo = TipoSolicitud::all();
        View(compact('id_ubch','tipo')); 
        //Arr($solicitante);    
    }

    public function store()
    {
        extract($_POST);
        $ubch = Ubch::find($id_ubch);
       //Arr($_POST); //Array para ver que envia el formulario
        $problematica = new Problematica;
        $problematica->id_ubch = $id_ubch;
        $problematica->id_municipio = $ubch->id_municipio;
        $problematica->id_parroquia = $ubch->id_parroquia;
        $problematica->direccion = $ubch->direccion_ubch;
        $problematica->id_problema = $tipo;
        $problematica->observaciones = $observacion; 
        $problematica->estatus = 0;

        if($problematica->save())
        {
            Success('centros/'.$id_ubch.'','Guardada existosamente...');
        }
        else
        {
             Error('centros/'.$id_ubch.'','Vuelva a intentarlo...');
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