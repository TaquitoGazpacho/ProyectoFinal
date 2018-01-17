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

    public function login(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|min:1',
            'password' => 'required|min:6',
            //'g-recaptcha-response' => 'required|recaptcha',
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
            //'verified' => true,
        ];

        Auth::attempt($credential, $request->member);
        if(Auth::check() && Auth::user()->verified) {
            return Auth::guard('web')->user();
        } elseif (Auth::check()) {
            Auth::logout();
            return "FALSE";
        }
        return $this->sendFailedLoginResponse($request);
    }
}
