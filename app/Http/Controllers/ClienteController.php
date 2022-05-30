<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\Endereco;
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

        $usuario->login = $request->input("cpf", "");

        $senha = $request->input("password", "");
        $usuario->login = \Hash::make($senha); //Criptografa

        $endereco = new Endereco ($values);
        $endereco->logradouro = $request->input("endereco", "");
    


        try {
            \DB::beginTransaction(); //Iniciar a transações
            $usuario->save();//salva usuario
            $endereco->usuario_id = $usuario->id;//Relaciona com as tabelas
            $endereco->save();//salvar endereço
            \DB::commit(); //confirmando a transação
            throw new \Exception( "erro na menssagem");

        } 
      
        catch(\Exception $e){
           //trata o erro
           \DB::rollback(); //Cancelar a transação
        }
       
        return redirect()->route('cadastrar');
    }
}

