<?php

namespace App\Http\Controllers;
use App\Models\Usuario;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function cadastrar (Request $request){
        $data = [];

        return view("cadastrar", $data);
    }
    public function cadastrarCliente(Request $request){

        //pegar valores de todos os formulários
        $values = $request->all();
        $usuario = new Usuario();
        $usuario->fill($values);
        dd($usuario);

        return redirect()->route('cadastrar');
    }
}

