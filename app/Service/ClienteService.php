<?php

namespace App\Service;

use App\Models\Usuario;
use App\Models\Endereco;
use Log;


class ClienteService
{
    public function SalvarUsuario(Usuario $user, Endereco $endereco){      
        //salvar usuário
    try {
         $dbUsuario = Usuario::where("login", $user->login)->first();
         if($dbUsuario){
         return ['status' => 'ok', 'message' => 'login ja cadastrado!'];
             
         }
         
        //code...
        \DB::beginTransaction(); //Iniciar a transações
        $user->save();//salva usuario
        $endereco->usuario_id = $user->id;//Relaciona com as tabelas
        $endereco->save();//salvar endereço
        \DB::commit(); //confirmando a transação  
        return ['status' => 'ok', 'message' => ' Usuário cadastrado com sucesso!'];
  } catch (\Exception $e) {
    \Log::error("ERRO", ['file' => 'ClienteService.SalvarUsuario',
    'message' => $e->getMessege()]);

      \DB::rollback(); //Cancelar a transação

      return ['status' => 'err', 'message' => "Usuário não pode cadastar"];
  }
 }
 }   

