<?php
namespace App\clp\controllers;

use App\Problematica;
use App\TipoProblematica;
use App\Ubch;

class CentrosProblematicas
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
        $tipo = TipoProblematica::all();
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
        $problematica->id_tipo_problema = $tipo;
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
        $problema = Problematica::find($id);
        View(compact('problema'));
       // Arr($problema); 
    }


    public function edit($id)
    {
        $problema = Problematica::find($id);
        View(compact('problema'));
    }

    public function update($id)
    {
        extract($_POST);
       //Arr($_POST); //Array para ver que envia el formulario
        $problematica = Problematica::find($id);
        $problematica->id_problema = $tipo;
        $problematica->observaciones = $observacion; 
        $problematica->estatus = $estatus;

        if($problematica->save())
        {
            Success('centrosProblematicas/'.$problematica->id_problematica_ubch.'','Actulizada exitosamente la problematica.');
        }
        else
        {
            Error('centrosProblematicas/'.$problematica->id_problematica_ubch.'','Error al editar problematica.');
        }
    }

    public function destroy($id)
    {

    }
}