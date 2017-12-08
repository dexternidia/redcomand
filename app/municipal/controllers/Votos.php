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

        if(isset($id_parroquia) and $id_parroquia)
        {
            if(isset($id_mesa) and $id_mesa)
            {
                $candidatos = Voto::where('id_municipio',$user['id_municipio'])
                ->where('id_parroquia',$id_parroquia)
                ->where('id_mesa',$id_mesa)
                ->get();
            }
            else
            {
                if(isset($id_candidatos) and $id_candidatos)
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


        View(compact('candidatos','id_parroquia','id_mesa','id_candidatos'));
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
        extract($_POST);

        $voto = Voto::find($id);
        $voto->h7am = $h7am;
        $voto->h8am = $h8am;
        $voto->h9am = $h9am;
        $voto->h10am= $h10am;
        $voto->h11am= $h11am;
        $voto->h12pm= $h12pm;
        $voto->h1pm = $h1pm;
        $voto->h2pm = $h2pm;
        $voto->h3pm = $h3pm;
        $voto->h4pm = $h4pm;
        $voto->h5pm = $h5pm;
        $voto->h6pm = $h6pm;
        $voto->h7pm = $h7pm;
        $voto->h8pm = $h8pm;
        $voto->h9pm = $h9pm;
        $voto->h10pm =$h10pm;

        if($voto->save())
        {
            Success('votos?id_parroquia='.$voto->id_parroquia.'&id_mesa='.$voto->id_mesa,'Votos de '.$voto->candidato->nombre.' han sido actualizados!');
        }
        else
        {
            Error('votos','Error al actualizar votos.');
        }
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