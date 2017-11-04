<?php
namespace App\ubch\controllers;
use App\Municipio;
use App\Parroquia;
use App\Problematica;
use App\TipoProblematica;
use App\Ubch;
use Carbon\Carbon;
use System\tools\rounting\Redirect;

class ProblematicasUbch2
{
    function __construct()
    {
        Role('ubch');
    }

    public function index()
    {
        $problematicas = Problematica::where('id_ubch',5)->get();
        View(compact('problematicas')); 
    }

    public function create()
    {
       // $id_ubch = Uri(5);
        $id_ubch = 5;
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
        $problematica->id_problema = $tipo;
        $problematica->observaciones = $observacion; 
        $problematica->estatus = 0;

        if($problematica->save())
        {
            Success('ProblematicasUbch','Guardada existosamente...');
        }
        else
        {
             Error('ProblematicasUbch','Vuelva a intentarlo...');
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
        View(compact('id'));
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}