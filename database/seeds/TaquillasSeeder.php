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
