<?php
namespace App\admin\controllers;
use App\Municipio;
use App\Parroquia;
use App\Ubch;
use Carbon\Carbon;
use App\Institucion;
use App\Partido;
use App\Estructura;
use App\MunicipioCne;
use App\ParroquiaCne;
use App\MesasCne;
use System\tools\rounting\Redirect;

class RegistroUbch
{
    function __construct()
    {
        Role('admin');
    }

    public function index()
    {
        $ubch = Ubch::all();
        View(compact('ubch'));
        //$municipios = MunicipioCne::all();
        //$parroquias = ParroquiaCne::all();
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
        $parroquias = MesasCne::where('id_parroquia',$idParroquia)->get();
        //var_dump($parroquias);
        echo "<option value=''>MESAS</option>";
        echo "<option value=''></option>";
        foreach ($parroquias as $key => $parroquia) {
            echo '<option value="'.$parroquia->id_mesas_cne.'">'.$parroquia->nombre.'</option>';
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
        //Arr($_POST);
        extract($_POST);
        extract($_GET);

        //Arr($_POST);
        $fecha_hora_registro = Carbon::now();
        list($fecha_registro,$hora_registro) = explode(' ', $fecha_hora_registro);
        $ubch = new Ubch;
        $ubch->nombre_ubch = $nombre_ubch;
        $ubch->id_municipio = $id_municipio;
        $ubch->id_parroquia = $id_parroquia;
        $ubch->sector = $sector;
        $ubch->estatus = $estatus;
        $ubch->id_clp = $id_clp;
        $ubch->cod_centro_cne = $cod_centro_cne;
        $ubch->cod_mesa_cne = $cod_mesa_cne;
        $ubch->cantidad_mesa_cne = $cantidad_mesa_cne;
        $ubch->fecha_registro = $fecha_registro;
        $ubch->hora_registro = $hora_registro;  
        $ubch->eliminar = 0;

        if($ubch->save())
        {
            Success('solicitantes/'.$ubch->id,'El registro fue guardado.');
        }
        else
        {
            Error('solicitantes/','Error al ingresar ubch.');
        }
    }

    public function show($id)
    {
        $ubch = Solicitante::find($id);
        View(compact('ubch'));
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