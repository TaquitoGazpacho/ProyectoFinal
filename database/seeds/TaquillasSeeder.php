<?php

use Illuminate\Database\Seeder;

class TaquillasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
      public function run()
      {
//        DB::table('taquillas')->insert([
//            'numero_taquilla' => 1,
//            'tamanio' => 'Grande',
//            'ocupada' => false,
//            'estado' => 'Funcionando',
//            'oficina_id' => 1,
//
//        ]);
//
//        DB::table('taquillas')->insert([
//            'numero_taquilla' => 2,
//            'tamanio' => 'Grande',
//            'ocupada' => false,
//            'estado' => 'Funcionando',
//            'oficina_id' => 1,
//
//        ]);
//        DB::table('taquillas')->insert([
//            'numero_taquilla' => 3,
//            'tamanio' => 'Mediana',
//            'ocupada' => false,
//            'estado' => 'Funcionando',
//            'oficina_id' => 1,
//
//        ]);
//
//        DB::table('taquillas')->insert([
//            'numero_taquilla' => 1,
//            'tamanio' => 'Grande',
//            'ocupada' => false,
//            'estado' => 'Funcionando',
//            'oficina_id' => 2,
//
//        ]);
//
//        DB::table('taquillas')->insert([
//            'numero_taquilla' => 2,
//            'tamanio' => 'Grande',
//            'ocupada' => false,
//            'estado' => 'Funcionando',
//            'oficina_id' => 2,
//
//        ]);
//        DB::table('taquillas')->insert([
//            'numero_taquilla' => 1,
//            'tamanio' => 'Mediana',
//            'ocupada' => false,
//            'estado' => 'Funcionando',
//            'oficina_id' => 3,
//
//        ]);

          $tamanio=['Pequeña','Mediana','Grande'];
          //Loop para recorreo Oficinas
          for($i = 1; $i <= 12; ++$i) {
            //loop para crear taquillas
              for($j = 1; $j <= 20 ; ++$j) {
                  DB::table('taquillas')->insert([
                    'numero_taquilla' => $j,
                    'tamanio' => $tamanio[rand(0,2)],
                    'ocupada' => false,
                    'estado' => 'Funcionando',
                    'oficina_id' => $i,
                  ]);
              }
          }



    }
}
