<?php

namespace App\Http\Controllers;

use App\Models\Empresa_reparto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class EmpresaRepartoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:empresa');
    }

    public function index(){
        return view('fijas.empresa');
    }

    protected function create(array $data)
    {
        return Empresa_reparto::create([
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'telefono' => $data['telefono'],
            'nif' => $data['nif'],
            'password' => bcrypt($data['password']),
        ]);
    }


    //cambiar en la vista de empresas el estado del pedido
    public function cambiarEstado(Request $request){

        DB::table('repartos')->where([
            ['id', $request->reparto_id],
            ['empresa_id', Auth::guard('empresa')->user()->id]
        ])->update(['estado' => $request->estado]);
    }

}
