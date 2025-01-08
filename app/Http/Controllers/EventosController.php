<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class EventosController extends Controller
{
    //
    public function ListarEventos(){
        return view("listar_eventos");
    }

    public function MostrarEventos(){
        return view("template/tela_evento");
    }

    public function CadastrarEventos(){
        return view("cadastro/cadastro_eventos");
    }
}
 
 