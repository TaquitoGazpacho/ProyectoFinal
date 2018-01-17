<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExternoController extends Controller
{
    public function comprobarConexion(){
        if(Auth::guard('web')->check()) {
            return Auth::guard('web')->user();
        } else {
            return "";
        }
    }

    public function getLoginHTML() {
        return view("auth.login");
    }
}
