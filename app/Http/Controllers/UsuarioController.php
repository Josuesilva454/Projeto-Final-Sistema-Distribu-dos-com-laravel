<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function logar (Request $request){

    $data = [];

    if($request->isMethod("POST")){
        //SE ENTRAR NESTE IF É PORQUE O USUÁRIO CLICOU NO BOTÃO LOGAR
        $login = $request->input("login");
        $senha = $request->input("senha");
       

        $crendential = ['login' => $login, 'password' => $senha];

        //logar
    if(Auth::attempt($crendential)){
      return redirect()->route("home");
    }else {
       $request->session()->flash("err", "Usuário/ senha inválido");
       return redirect()->route("logar");
    }
    }

    return view("logar", $data);
}
}