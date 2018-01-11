<?php

use Illuminate\Database\Seeder;

class OficinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oficinas')->insert([
            'pais' => 'España',
            'ciudad' => 'San Sebastián',
            'calle' => 'Miracruz',
            'num_calle' => '52',
            'cp' => 20001,
            'lat' => 43.32,
            'alt' => -1.97,

        ]);
        DB::table('oficinas')->insert([
            'pais' => 'España',
            'ciudad' => 'Madrid',
            'calle' => 'Calle Mayor',
            'num_calle' => '7',
            'cp' => '28012',
            'lat' => 40.42,
            'alt' => -3.70,

        ]);
        DB::table('oficinas')->insert([
            'pais' => 'España',
            'ciudad' => 'Madrid',
            'calle' => 'Calle de Castilla la Vieja',
            'num_calle' => '25',
            'cp' => '28941',
            'lat' => 40.29,
            'alt' => -3.80,

        ]);

        DB::table('oficinas')->insert([
            'pais' => 'México',
            'ciudad' => 'Palmira',
            'calle' => 'Córdoba',
            'num_calle' => '25',
            'cp' => '94420',
            'lat' => 18.88,
            'alt' => -97.11,
        ]);

        DB::table('oficinas')->insert([
            'pais' => 'México',
            'ciudad' => 'México City',
            'calle' => 'Ignacio Allende',
            'num_calle' => '157',
            'cp' => '04100',
            'lat' => 19.36,
            'alt' => -99.16,
        ]);

        DB::table('oficinas')->insert([
            'pais' => 'Polonia',
            'ciudad' => 'Warszawa',
            'calle' => 'Mariańska',
            'num_calle' => '1',
            'cp' => '00-123',
            'lat' => 52.23,
            'alt' => 21.00,
        ]);
    }
}
