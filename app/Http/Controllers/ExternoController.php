<?php
namespace App\Http\Controllers;

use App\Models\Oficina;
use App\Models\Reparto;
use App\Models\Taquilla;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExternoController extends Controller
{
    public function comprobarConexion(){
        if(Auth::guard('web')->check()) {
            return [ 'usuario' => Auth::guard('web')->user(), 'oficinas' => $this->getOficinas()];
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
            return [ 'usuario' => Auth::guard('web')->user(), 'oficinas' => $this->getOficinas()];
        } elseif (Auth::check()) {
            Auth::logout();
            return "FALSE";
        }
        return $this->sendFailedLoginResponse($request);
    }

    public function getOficinas()
    {
        return Oficina::getOficinas();
    }

    public function crearPedido(Request $request)
    {
        if($request->selectOficina == "defecto") {
            //guardar pedido con oficina por defecto
            $idOficina = User::select('oficina_id')->where('id', $request->userId)->first();
            $idOficina = $idOficina->oficina_id;
        } else {
            //guardar pedido con oficina seleccionada
            $idOficina = $request->oficinaNueva;

        }
        $idTaquilla = Taquilla::getTaquilla($idOficina);
        $this->anadirPedido($request->userId, $idOficina, $idTaquilla->id);

        $this->ocuparTaquilla($idTaquilla->id);

        return "asd";
    }

    public function anadirPedido($user_id, $oficina_id, $taquilla_id){
        Reparto::insertGetId([
            'clave_usuario' => '0000',
            'clave_repartidor' => '0000',
            'usuario_id' => $user_id,
            'empresa_id' => 1,
            'oficina_id' => $oficina_id,
            'taquilla_id' => $taquilla_id,
        ]);
    }

    public function ocuparTaquilla($id){
        Taquilla::where('id', $id)->update(['ocupada' => 1]);
    }
}
