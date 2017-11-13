<?php
namespace App\ubch\controllers;

use App\Cne;
use App\UbchUnoxDiez;

class Unoxdiez
{
    function __construct()
    {
        Role('ubch');
    }

    public function index()
    {
        $user = User();
        //Arr($user);
        $unopordiez = UbchUnoxDiez::where('id_ubch',$user['id_ubch'])->get();
        View(compact('unopordiez'));
    }

    public function busqueda()
    {
        View();
    }

    public function create()
    {
        extract($_POST);
        //Arr($_POST);

        $datos_cne = Cne::where('cedula',$cedula)->first();
        $user = User();

        if($datos_cne)
        {
            if($datos_cne->municipio == $user['id_municipio'] AND $datos_cne->parroquia == $user['id_parroquia'])
            {
                echo "es de la parroquia";
            }
            else
            {
                echo "no pertenece a la misma zona";
            }
        }
        else
        {
            Error('unoxdiez/busqueda','No se encuentra en el registro CNE.');
        }
        //View();
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
}