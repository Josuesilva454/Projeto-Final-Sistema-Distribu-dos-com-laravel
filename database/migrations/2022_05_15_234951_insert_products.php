<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       $cat = new \App\Models\Categoria(['categoria'=>'Geral' ]);
       $cat->save();

       $prod1 = new \App\Models\Produto(['nome' => 'Camisa Blusa Camiseta Masculina Gola V Estampa Jesus Cristo', 'valor' => 25, 'foto' => 'images/Produto.jpg', 'descricao' => '','categoria_id' => $cat->id ]);
       $prod1->save();

       $prod2 = new \App\Models\Produto(['nome' => 'I Love You- Camiseta Masculino Branco em Malha Algodão', 'valor' => 30, 'foto' => 'images/Produto1.jpg', 'descricao' => '','categoria_id'=> $cat->id  ]);
       $prod2->save();

       $prod3 = new \App\Models\Produto(['nome' => 'Camisa Maculina do Barcelona Nike', 'valor' => 70, 'foto' => 'images/Produto2.jpg', 'descricao' => '','categoria_id'=> $cat->id  ]);
       $prod3->save(); 

       $prod4 = new \App\Models\Produto(['nome' => 'Blusa Feminina Adulto Manga Curta Estampa Folhas Detalhe Amarrar 1000074964 Malwee Mostarda', 'valor' => 70, 'foto'=> 'images/Produto3.jpg', 'descricao' => '','categoria_id'=> $cat->id  ]);
       $prod4->save();
    

}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
