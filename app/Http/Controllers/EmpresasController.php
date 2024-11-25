<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
 public function CadastrarEmpresa(){

    return view('cadastro_empresas');
 }
}
