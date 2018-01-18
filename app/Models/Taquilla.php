<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taquilla extends Model
{
    protected $fillable = [
        'numero_taquilla', 'tamanio', 'ocupada',
    ];

    public function oficina()
    {
        return $this->belongsTo('App\Models\Oficina');
    }

    public function reparto()
    {
        return $this->hasMany('App\Models\Reparto');
    }

    public static function getTaquilla($oficina_id){
        return Taquilla::select('id')->where([
            ['ocupada', 0],
            ['oficina_id', $oficina_id]
        ])->first();
    }
}
