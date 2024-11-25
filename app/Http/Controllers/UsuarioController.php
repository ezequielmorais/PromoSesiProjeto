<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function CadastroPessoas(){
        return view ("cadastro/cadastro_dados");
    }
}
