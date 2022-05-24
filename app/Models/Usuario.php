<?php

namespace App\Models;



class Usuario extends RModel
{
     // adicionado Usuários
    protected $table = "usuarios";
    protected $fillable= ['email','cpf ', 'password', 'nome' ];
}
