<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\Endereco;
use Illuminate\Http\Request;
use App\Service\ClienteService;

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

        $usuario->login = $request->input("cpf", "");

        $senha = $request->input("password", "");
        $usuario->password = \Hash::make($senha); //Criptografa

        $endereco = new Endereco ($values);
        $endereco->logradouro = $request->input("endereco", "");
    

       $clienteService = new ClienteService();
      $result = $clienteService->SalvarUsuario($usuario, $endereco);
        
        $message = $result["message"];
        $status = $result["status"];

        $request->session()->flash($status, $message);
         

        return redirect()->route('cadastrar');
    }
}


