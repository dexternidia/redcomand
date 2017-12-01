<?php
namespace App\municipal\controllers;

use App\Cne;
use App\FirmaContraMaduro;
use App\HogaresAsignados;
use App\HogaresPorAsignar;
use App\MunicipalResponsable;
use App\PorPensionar;
use App\Profesionales;
use App\YaPensionados;

class Consultas
{
    function __construct()
    {
        Role('municipal');
    }

    public function index()
    {
        extract($_POST);


            $firmo_contra = FirmaContraMaduro::where('cedula',0)->first();
            $hogares_asignados = HogaresAsignados::where('cedula',0)->first();
            $hogares_por_asignar = HogaresPorAsignar::where('cedula',0)->first();
            $por_pensionar = PorPensionar::where('cedula',0)->first();
            $ya_pensionados = YaPensionados::where('cedula',0)->first();
            $profesionales = Profesionales::where('cedula',0)->first();
            $responsable_municipal = MunicipalResponsable::where('cedula',0)->first();

            View(compact('firmo_contra','hogares_asignados','hogares_por_asignar','por_pensionar','ya_pensionados','profesionales','cedula','responsable_municipal'));
        
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

    }

    public function destroy($id)
    {

    }
}