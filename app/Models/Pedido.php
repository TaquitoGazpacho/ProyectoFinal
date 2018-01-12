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

    public static function getPedidosPorUsuario($id){
        $todos= Pedido::get();
        $delUsuario=[];
        foreach ($todos as $pedido){
            if($pedido->user_id == $id)
            {

                array_push($delUsuario,$pedido);
            }
        }
        return $delUsuario;
    }


}
