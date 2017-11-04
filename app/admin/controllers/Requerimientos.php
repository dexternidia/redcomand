<?php
namespace App\admin\controllers;

class Requerimientos
{
    function __construct()
    {
        Role('admin');
    }

    public function busqueda()
    {
        View();
    }

    public function index()
    {
        View();
    }

    public function create()
    {
        extract($_POST);
        Arr($_POST);
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