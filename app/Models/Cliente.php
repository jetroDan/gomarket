<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use SoftDeletes;
    protected $table = "clientes";
    
    public static function getUser(){
        if(session()->get("usuario_id") != null){
            return static::find(session()->get("usuario_id"));
        }else{
            return null;
        }
    }
}
