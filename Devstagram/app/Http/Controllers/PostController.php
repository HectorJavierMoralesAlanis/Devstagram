<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //Constructor de la sesion
    public function __construct()
    {
        //Proteger el constructor con autenticacion, es decir antes de ejecutar el metodo index debemos pasar el parametro de autenticacion
        $this->middleware('auth');
    }

    public function index()
    {
        //Aplicamos un helper para revisar que el usuario esta autenciado
        //dd(auth()->user());
        return view('dashboard');
    }

}
