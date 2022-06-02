?php

namespace App\Service;

use App\Models\Usuario;
use App\Models\Endereco;
use Log;


class ClienteService
{
    public function SalvarCliente(Usuario $usuario, Endereco $endereco){      
        //salvar usuário
    try {
         $dbUsuario = Usuario::where("login", $usuario->login)->first();
         if($dbUsuario){
         return (' lOGIN ja CADASTRADO COM SUCESSO!');
             
         }
        //code...
        \DB::beginTransaction(); //Iniciar a transações
        $usuario->save();//salva usuario
        $endereco->usuario_id = $usuario->id;//Relaciona com as tabelas
        $endereco->save();//salvar endereço
        \DB::commit(); //confirmando a transação  
        return (' Usuário cadastrado com sucesso!');
  } catch (\Exception $e) {
    throw $e;
     
      \DB::rollback(); //Cancelar a transação
      return('Usuário não pode cadastar');
  }
 }
 }   

