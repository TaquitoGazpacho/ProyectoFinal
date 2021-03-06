<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Taquilla;

class RepartosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estado=['Depositado', 'Recogido'];
        //Loop para recorrer Usuarios
        for($i = 1; $i <= 4; ++$i) {
            //loop para crear pedidos
            for($j = 1; $j <= 3 ; ++$j) {
                $estadoTabla = $estado[rand(0,1)];
                $oficina_id = rand(1,12);
                $taquilla_id = Taquilla::getTaquilla($oficina_id)->id;
                DB::table('repartos')->insert([
                    'clave_repartidor' => ''.rand(0,9).rand(0,9).rand(0,9).rand(0,9),
                    'clave_usuario' => ''.rand(0,9).rand(0,9).rand(0,9).rand(0,9),
                    'estado' => $estadoTabla,
                    'usuario_id' => $i,
                    'empresa_id' => rand(1,3),
                    'oficina_id' => $oficina_id,
                    'taquilla_id' => $taquilla_id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
                if ($estadoTabla == 'Depositado'){
                    \App\Models\Taquilla::cambiarAOcupada($j);
                }
            }
        }


    }
}
