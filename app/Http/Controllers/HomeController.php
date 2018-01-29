<?php

namespace App\Http\Controllers;

use App\Mail\Contacto;
use Illuminate\Http\Request;
use App\Models\Oficina;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('sendContactMail');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oficinas = Oficina::getOficinas();
        return view('user.home', ['oficinas' => $oficinas]);
    }

    public function suscripcion() {
        return view('user.suscripcion');
    }

    public function ajustes() {
        return view('user.ajustes');
    }
    public function pedidos(){
        return view('user.pedidos');
    }
    public function oficinas(){
        return view('user.oficinas');
    }

    public function sendContactMail(Request $request){
        Mail::to(env('MAIL_USERNAME'))->send(new Contacto($request->texto, $request->email));
        session()->put('success','Email enviado correctamente, contactaremos contigo lo antes posible.');
        return redirect(route('index'));
    }
}
