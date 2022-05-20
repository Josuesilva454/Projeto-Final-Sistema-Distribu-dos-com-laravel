<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index (Request $request){
        $data = [];

        $listaProdutos = Produto::all();
        $data["lista"] = $listaProdutos;

        return view("home", $data);
    }

    public function categoria( Request $request, $idcategoria = 0){
        $data = [];

    $listaCategorias = Categoria::all();


//select * from produto limit 4
    $queryProduto = Produto::limit(4);

    if($idcategoria != 0){
        //where categoria_id 
        $queryProduto->where("categoria_id", $idcategoria);
    }
    $listaProdutos = $queryProduto->get();
        
        $data['lista'] = $listaProdutos;
        $data ['listaCategoria'] = $listaCategorias;
        $data ['idcategoria'] = $idcategoria;
        return view("categoria", $data);
    }
    public function adicionarcarrinho(Request $request, $idproduto = 0 ){
      //Buscar o produto pelo id
        $prod1 = Produto::find($idproduto);

        if ($prod1) {
            //Encontrou o produto

            $carrinho = session('cart', []);
          //vai gravar a sessão
         array_push($carrinho, $prod1);
         session(['cart' => $carrinho]);
        }
        return redirect()->route("home");

    }
    public function usercarrinho(Request $request){
        //buscando sessão do carrinho
        $carrinho = session('cart', []);
        
        return view('carrinho', $data);
    }
    
}

