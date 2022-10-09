<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EscolaControlle extends Controller
{
    public function index(){
        return view('telaLogin');
    }

    public function cadastarAdm(){
        return view('CadastroAdm');
    }

    public function login(){
        return view('index');
    }
}
