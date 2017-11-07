<?php
namespace App\admin\controllers;
use App\Estructura;
use App\Institucion;
use App\MesasCne;
use App\Municipio;
use App\MunicipioCne;
use App\Parroquia;
use App\ParroquiaCne;
use App\Partido;
use App\Ubch;
use Carbon\Carbon;
use System\tools\rounting\Redirect;
use System\tools\session\User;

class RegistroUbch2
{
    function __construct()
    {
        Role('clp');
    }

    public function index()
    {
        $ubch = Ubch::all();
        View(compact('ubch'));
       // $mesas = MesasCne::all();
        //Arr($mesas);
    }

    public function parroquias()
    {
        extract($_GET);
        $parroquias = Parroquia::where('id_municipio',$idMunicipio)->get();
        //var_dump($parroquias);
        echo "<option value=''>PARROQUIA</option>";
        echo "<option value=''></option>";
        foreach ($parroquias as $key => $parroquia) {
            echo '<option value="'.$parroquia->id_parroquia.'">'.$parroquia->nombre.'</option>';
        } 
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

    public function mesasCne()
    {
        extract($_GET);
        $mesas = MesasCne::where('id_parroquia',$idParroquia)->where('mesa',1)->get();
        //var_dump($mesas);
        echo "<option value=''>CENTROS</option>";
        echo "<option value=''></option>";
        foreach ($mesas as $key => $m) {
            echo '<option value="'.$m->id_mesas_cne.'">'.$m->nombre.'</option>';
        } 
    }

    public function verificar_email()
    {
        extract($_GET);

        if($email)
        {
            $solicitante = Solicitante::where('email',$email)->first();
            
            if(!empty($solicitante))
            {
                $existe = 1;
            }
            else
            {
                $existe = 0;
            }
        }
        else
        {
            $existe = 0;
        }
    
        echo json_encode($existe);
    }

    public function create()
    {
        $ubch= Ubch::find(0);
        $instituciones = Institucion::all();
        $partidos = Partido::all();   
        $estructura = Estructura::all();     
        View(compact('ubch','instituciones','partidos','estructura')); 
        //Arr($solicitante);

    }

    public function store()
    {
        extract($_POST);
        extract($_GET);

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
            $ubch->id_municipio = $id_municipio;
            $ubch->id_parroquia = $id_parroquia;
            $ubch->direccion_ubch = $direccion_ubch;
            $ubch->estatus = 0;
            $ubch->id_clp = 0;
            $ubch->fecha_registro = $fecha_registro;
            $ubch->hora_registro = $hora_registro;  
            $ubch->eliminar = 0;

            if($ubch->save())
            {
                Success('ResponsableUbch/create/'.$ubch->id,'UBCH registrado, porceda a ingresar responsable.');
            }
            else
            {
                Error('RegistroUbch/','Error al ingresar ubch.');
            }
        }
        else
        {
            Error('RegistroUbch/','El UBCH ya existe.');
        }
    }

    public function show($id)
    {
        $ubch = Ubch::find($id);
        $responsable = $ubch->responsable;
        $requerimientos = $ubch->requerimientos;
        $problematicas = $ubch->problematicas;
        View(compact('ubch','responsable','requerimientos','problematicas'));
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