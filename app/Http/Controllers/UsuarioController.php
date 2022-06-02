<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UsuarioController extends Controller
{
    public function logar (Request $request){

    $data = [];

    if($request->isMethod("POST")){
        //SE ENTRAR NESTE IF É PORQUE O USUÁRIO CLICOU NO BOTÃO LOGAR
        $login = $request->input("login");
        $senha = $request->input("senha");

        $crendential = ['login' => $login, 'passweord' => $senha];

        //logar
    if(Auth::attempt($crendential)){
      dd("logado");
    }else {
       dd("Dados invalido logado");
    }
    }

    return view("logar", $data);
}
}