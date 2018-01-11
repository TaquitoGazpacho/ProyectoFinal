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
            'estado' => 'enviado',
            'recogido' => false,
            'user_id' => '1',
            'oficina_id' => '2',

        ]);
        DB::table('pedidos')->insert([
            'numero_pedido' => '1235',
            'estado' => 'enviado',
            'recogido' => false,
            'user_id' => '2',
            'oficina_id' => '1',

        ]);
        DB::table('pedidos')->insert([
            'numero_pedido' => '1236',
            'estado' => 'recibido',
            'recogido' => true,
            'user_id' => '3',
            'oficina_id' => '3',

        ]);
        DB::table('pedidos')->insert([
            'numero_pedido' => '1236',
            'estado' => 'enviado',
            'recogido' => false,
            'user_id' => '3',
            'oficina_id' => '2',

        ]);
    }
}
