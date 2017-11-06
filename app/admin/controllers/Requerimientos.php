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
        extract($_GET);
        $requerimientos = Requerimiento::where('id_ubch',$id_ubch);
        View(compact('requerimientos'));
    }

    public function busqueda()
    {
        $id_ubch = Uri(5);
        View(compact('id_ubch'));
    }

    public function create()
    {
        extract($_POST);
        $cne = Cne::where('id',$cedula)->first();
        if(!$cne)
        {
            $cne = "";
        }
        //Arr($cne);
        View(compact('id_ubch','cne'));
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
            Success('requerimientos?id_ubch='.$id_ubch.'','Inserción con exito.');
        }
        else
        {
            Success('requerimientos?id_ubch='.$id_ubch.'','Inserción con exito.');
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