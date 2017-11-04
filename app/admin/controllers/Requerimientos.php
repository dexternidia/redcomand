<?php
namespace App\admin\controllers;

use App\Cne;
use App\Requerimiento;
use System\core\BaseController;

class Requerimientos extends BaseController
{
    function __construct()
    {
        Role('admin');
    }

    public function index()
    {
        View();
    }

    public function busqueda()
    {
        View();
        //Arr($id_control);
        //View();
    }

    public function create()
    {
        extract($_POST);

        $id_control = parent::User()->id_control;

        if($id_control)
        {
            $cne = Cne::where('id',$cedula)->first();
            //Arr($cne);
            View(compact('id_control','cne'));
        }
        else
        {
            echo "tiene que crear centro";
        }
    }

    public function store()
    {
        //Arr($_POST);
        extract($_POST);

        $requerimientos = new Requerimiento;
        $requerimientos->nombre_apellido  = $nombre_apellido;
        $requerimientos->cedula = $cedula;
        $requerimientos->telefono = $telefono;
        $requerimientos->id_ubch =$id_ubch;

        if($requerimientos->save())
        {
            Success('requerimientos','Inserción con exito.');
        }
        else
        {
            Error('requerimientos','Error en inserción');
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
}