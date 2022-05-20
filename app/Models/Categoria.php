<?php

namespace App\Models;

use App\Http\Controllers\ProdutoController;




class Categoria extends RModel
{
    protected $table = "categorias";
    protected $fillable = ['categoria'];

}
