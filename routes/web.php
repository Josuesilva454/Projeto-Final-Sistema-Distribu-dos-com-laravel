<?php
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|Criando as rotas
|
*/


Route::match(['get', 'post'],'/', [ProdutoController::class,'index'])
->name ("home");

//Rota categoria

Route::match(['get', 'post'], '/categoria', [ProdutoController::class, 'categoria'])
->name ("categoria");

// id da rota categoria
Route::match(['get', 'post'],'/{idcategoria}/categoria', [ProdutoController::class, 'categoria'])
->name ("categoria_por_id");


Route::match(['get', 'post'],'/{idproduto}/carrinho/adicionar', [ProdutoController::class, 'adicionarcarrinho'])
->name ("adicionar_carrinho");

//Usar o carrinho

Route::match(['get', 'post'],'/carrinho', [ProdutoController::class, 'usercarrinho'])
->name ("user_carrinho");

// rotas excluir
Route::match(['get', 'post'],'/{indice}/excluircarrinho', [ClienteController::class,'excluirCarrinho'])
->name ("carrinho_excluir");

//cadastrar

Route::match(['get', 'post'],'/cadastrar', [ClienteController::class,'cadastrar'])
->name ("cadastrar");
// Rotas cadastrar cliente

Route::match(['get', 'post'],'cliente/cadastrar', [ClienteController::class,'cadastrarCliente'])
->name ("cadastrar_cliente");

Route::match(['get', 'post'],'/logar', [UsuarioController::class,'logar'])
->name ("logar");


Route::get('/sair', [UsuarioController::class,'sair'])
->name ("sair");














