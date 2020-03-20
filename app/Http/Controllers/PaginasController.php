<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class PaginasController extends Controller
{
    public function usuarios()
    {
        //return "Texto de usuarios desde el controlador";
        return view('usuarios');
    }
}