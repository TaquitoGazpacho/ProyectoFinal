<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'numero_pedido', 'estado', 'recogido',
    ];


    public static function getPedidos(){
        return Pedido::get();
    }

}
