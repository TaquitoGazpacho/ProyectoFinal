<?php

use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedidos')->insert([
            'numero_pedido' => '1234',
            'estado' => 'Enviado',
            'recogido' => false,
            'numero_taquilla' => '1',
            'user_id' => '4',
            'oficina_id' => '2',

        ]);
        DB::table('pedidos')->insert([
            'numero_pedido' => '1235',
            'estado' => 'Enviado',
            'recogido' => false,
            'numero_taquilla' => '4',
            'user_id' => '4',
            'oficina_id' => '1',

        ]);
        DB::table('pedidos')->insert([
            'numero_pedido' => '1236',
            'estado' => 'Recibido',
            'recogido' => true,
            'numero_taquilla' => '2',
            'user_id' => '4',
            'oficina_id' => '3',

        ]);
        DB::table('pedidos')->insert([
            'numero_pedido' => '1236',
            'estado' => 'enviado',
            'recogido' => false,
            'numero_taquilla' => '3',
            'user_id' => '3',
            'oficina_id' => '2',

        ]);
    }
}