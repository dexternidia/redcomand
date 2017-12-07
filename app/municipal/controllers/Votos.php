<?php
namespace App\municipal\controllers;

use App\Candidato;
use App\MesasCne;
use App\ParroquiaCne;
use App\Voto;

class Votos
{
    function __construct()
    {
        Role('municipal');
    }

    public function index()
    {
        $user = User();
        extract($_GET);
        extract($_POST);

        if(isset($id_parroquia))
        {
            if(isset($id_mesa))
            {
                $candidatos = Voto::where('id_municipio',$user['id_municipio'])
                ->where('id_parroquia',$id_parroquia)
                ->where('id_mesa',$id_mesa)
                ->get();
            }
            else
            {
                if(isset($id_candidatos))
                {
                    $candidatos = Voto::where('id_municipio',$user['id_municipio'])
                    ->where('id_parroquia',$id_parroquia)
                    ->where('id_centros_clp',$id_centros_clp)
                    ->where('id_candidatos',$id_candidatos)
                    ->get();
                }
                else
                {
                    $candidatos = Voto::where('id_municipio',$user['id_municipio'])
                    ->where('id_parroquia',$id_parroquia)
                    ->get();
                }
            }
        }
        else
        {
            $candidatos = Voto::where('id_municipio',$user['id_municipio'])->get();
        }

        View(compact('candidatos'));
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

    public function parroquiasCne()
    {
        extract($_GET);
        $parroquias = ParroquiaCne::where('id_municipio',$idMunicipio)->get();
        //var_dump($parroquias);
        echo "<option value=''>PARROQUIA</option>";
        echo "<option value=''></option>";
        foreach ($parroquias as $key => $parroquia) {
            echo '<option value="'.$parroquia->id_parroquia.'">'.$parroquia->nombre.'</option>';
        } 
    }

    public function centrosBusqueda()
    {
        extract($_GET);
        $user= User();
        $parroquias = MesasCne::orderBy('nombre', 'DESC')->where('id_municipio',$user['id_municipio'])
        ->where('id_parroquia',$idParroquia)
        ->where('mesa',1)
        ->get();

        //var_dump($parroquias);
        echo "<option value=''>CENTROS</option>";
        echo "<option value=''></option>";
        foreach ($parroquias as $key => $parroquia) {
            echo '<option value="'.$parroquia->id_mesas_cne.'">'.$parroquia->nombre.'</option>';
        } 
    }
}