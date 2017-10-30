<?php
namespace App\admin\controllers;
use App\Municipio;
use App\Parroquia;
use App\Ubch;
use Carbon\Carbon;
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
        $ubch= Ubch::find(0);
        View(compact('ubch')); 
        //Arr($solicitante);

    }

    public function store()
    {
        //Arr($_POST);
        extract($_POST);
        extract($_GET);

        list($fecha_registro,$hora_registro) = explode(' ', $fecha_hora_registro);
        $solicitante = new Solicitante;
        $solicitante->nacionalidad = $nacionalidad;
        $solicitante->nombre_apellido = $nombre_apellido;
        $solicitante->fecha_nacimiento = $fecha_nacimiento;
        $solicitante->fecha_registro = $fecha_registro;
        $solicitante->hora_registro = $hora_registro;
        $solicitante->municipio_id = $municipio_id;
        $solicitante->parroquia_id = $parroquia_id;
        $solicitante->telefono1 = $telefono1;
        $solicitante->telefono2 = $telefono2;
        $solicitante->urbanizacion_barrio = $urbanizacion_barrio;
        $solicitante->avenida_calle = $avenida_calle;
        $solicitante->casa_edificio_apartamento = $casa_edificio_apartamento;
        $solicitante->email = $email;
        $solicitante->cedula = $cedula;
        $solicitante->eliminar = 0;

        if($solicitante->save())
        {
            Success('solicitantes/'.$solicitante->id,'El registro fue guardado.');
        }
        else
        {
            Error('solicitantes/','Error al ingresar solicitante.');
        }
    }

    public function show($id)
    {
        $solicitante = Solicitante::find($id);
        View(compact('solicitante'));
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