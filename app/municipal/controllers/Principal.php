<?php
namespace App\municipal\controllers;

use App\municipal\models\PrincipalModel;
use Controller,View,Token,Session,Arr,Message,Redirect;

class Principal extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
		View::ver('municipal/principal/index');
    }
}