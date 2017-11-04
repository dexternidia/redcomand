<?php
namespace App\ubch\controllers;
use App\Estructura;
use App\Institucion;
use App\Municipio;
use App\Parroquia;
use App\Partido;
use App\Ubch;
use App\UbchResponsable;
use Carbon\Carbon;
use System\tools\rounting\Redirect;

class ResponsableUbch2
{
    function __construct()
    {
        Role('ubch');
    }

    public function index()
    {
        $ubch = Ubch::all();
        View(compact('ubch'));
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
        $id_ubch = Uri(6);
        $instituciones = Institucion::all();
        $partidos = Partido::all();   
        $estructura = Estructura::all();     
        View(compact('ubch','instituciones','partidos','estructura','id_ubch')); 
        //Arr($solicitante);

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
                Success('RegistroUbch2/','Responsable de UBCH agregado con exito.');
            }
            else
            {
                Error('ResponsableUbch2/','Error al ingresar Responsable de UBCH.');
            }
        }
        else
        {
            Error('RegistroUbch2','Esta persona ya es responsable de un UBCH.');
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
