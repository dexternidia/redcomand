<?php
namespace App\clp\controllers;

use App\Cne;
use App\Estructura;
use App\Institucion;
use App\MunicipioCne;
use App\ParroquiaCne;
use App\Partido;
use App\UbchResponsable;
use Carbon\Carbon;

class CentrosResponsables
{
    function __construct()
    {
        Role('clp');
    }

    public function busqueda()
    {
        $id_ubch = Uri(5);
        $tipo = TipoProblematica::all();
        View(compact('id_ubch','tipo')); 
        //Arr($solicitante);
    }

    public function index()
    {
        View();
    }

    public function create()
    {
        //$id_ubch = Uri(6);
        extract($_POST);
        $datos_cne = Cne::where('cedula',$cedula)->first();
        $instituciones = Institucion::all();
        $partidos = Partido::all();   
        $estructura = Estructura::all();     
        $municipios = MunicipioCne::all();
        $municipio = MunicipioCne::find($datos_cne->municipio);
        $parroquias = ParroquiaCne::all();
        $municipio = ParroquiaCne::find($datos_cne->parroquia);
        View(compact('datos_cne','ubch','instituciones','partidos','estructura','id_ubch','municipio','municipios')); 
        //Arr($datos_cne);

    }

    public function store()
    {
        extract($_POST);
        extract($_GET);

        $responsable = UbchResponsable::where('cedula',$cedula)->first();

        if(!$responsable)
        {
            $fecha_hora_registro = Carbon::now();
            list($fecha_registro,$hora_registro) = explode(' ', $fecha_hora_registro);
            $ubch = new UbchResponsable;
            $ubch->id_municipio = $id_municipio;
            $ubch->id_parroquia = $id_parroquia;
            $ubch->direccion = $direccion;
            $ubch->id_ubch = $id_ubch;
            $ubch->nacionalidad = $nacionalidad;
            $ubch->cedula = $cedula;
            $ubch->nombre_apellido = $nombre_apellido;
            $ubch->email = $email;
            $ubch->telefono_1 = $telefono1;
            $ubch->telefono_2 = $telefono2;
            $ubch->vehiculo = $vehiculo;
            $ubch->id_instituciones = $id_institucion;
            $ubch->id_partidos = $id_partido;
            $ubch->id_estructura = $id_estructura;
            $ubch->fecha_registro = $fecha_registro;
            $ubch->hora_registro = $hora_registro;
            $ubch->eliminar = 0;

            if($ubch->save())
            {
                Success('centrosResponsables/','Responsable de centro agregado con exito.');
            }
            else
            {
                Error('centrosResponsables/','Error al ingresar Responsable de centro.');
            }
        }
        else
        {
            Error('centrosResponsables','Esta persona ya es responsable de un centro.');
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
}