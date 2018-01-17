<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExternoController extends Controller
{
    public function comprobarConexion(){
        if(Auth::guard('web')->check()) {
            return "hola";
        } else {
            return "dola";
        }
//        $datos = User::get();
//
//        return $datos;
    }
}
