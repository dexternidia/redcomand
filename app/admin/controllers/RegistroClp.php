<?php
namespace App\admin\controllers;

use App\Clp;
use App\Estructura;
use App\Institucion;
use App\MesasCne;
use App\Parroquia;
use App\ParroquiaCne;
use App\Partido;
use App\Ubch;
use System\core\BaseController;
use System\tools\session\Session;

class RegistroClp extends BaseController
{
    function __construct()
    {
        Role('admin');
    }

    public function index()
    {

        $clp = Clp::where('id_usuario',parent::User()->id)->get();
        View(compact('clp'));
       // $mesas = MesasCne::all();
        //Arr($clp);
        //$usuario = Usuario();
        //Arr(Usuario());
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
        echo "<option value=''>MESAS</option>";
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

        $clp = new Clp;
        $clp->nombre_clp = $nombre;
        $clp->id_usuario = Usuario()->id;
        $clp->id_municipio = $id_municipio;
        $clp->id_parroquia = $id_parroquia;
        $clp->eliminar = 0;
        
        if($clp->save())
        {
            Success('RegistroClp','El CLP fue registrado');
        }
        else
        {
            Error('RegistroClp','Error al registrar CLP.');
        }
    }

    public function show($id)
    {
        $ubch = Ubch::find($id);
        $responsable = $ubch->responsable;
        //Arr($ubch);
        View(compact('ubch','responsable'));
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