<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RModel extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    public $timestamps= true;
    public $incrementing = true;
    protected $fillable = []; // vai guarda o modelo

    public function beforesave(){
        return true;
    }
    public function save(array $options = []){
    try{
        if(!$this->beforesave()){
            return false;

        }
        return parent::save($options);

    }catch(\Exception $e){
        // caso for falso vai manda menssagem de erro

            throw new \Exception( $e.getMessege());
        
    }

}

}



