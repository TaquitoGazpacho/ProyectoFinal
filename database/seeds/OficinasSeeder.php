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

        DB::table('oficinas')->insert([
            'pais' => 'Francia',
            'ciudad' => 'Bayonne',
            'calle' => 'Rue Delphin',
            'num_calle' => '8',
            'cp' => '64100',
            'lat' => 43.49,
            'alt' => -1.48,
        ]);

        DB::table('oficinas')->insert([
            'pais' => 'Francia',
            'ciudad' => 'Anglet',
            'calle' => 'Amédée Dufourg',
            'num_calle' => '4',
            'cp' => '64600',
            'lat' => 43.48,
            'alt' => -1.51,
        ]);

        DB::table('oficinas')->insert([
            'pais' => 'Italia',
            'ciudad' => 'Napoli',
            'calle' => 'Nouva Poggioreale',
            'num_calle' => '178',
            'cp' => '80143',
            'lat' => 40.85,
            'alt' => 14.27,
        ]);

        DB::table('oficinas')->insert([
            'pais' => 'Portugal',
            'ciudad' => 'Porto',
            'calle' => 'Av. da Boavista',
            'num_calle' => '302',
            'cp' => '4050-115',
            'lat' => 41.17,
            'alt' => -8.62,
        ]);

        DB::table('oficinas')->insert([
            'pais' => 'Alemania',
            'ciudad' => 'Winterberg',
            'calle' => 'Múhlengrund',
            'num_calle' => '1',
            'cp' => '59955',
            'lat' => 51.19,
            'alt' => 8.53,
        ]);

        DB::table('oficinas')->insert([
            'pais' => 'Alemania',
            'ciudad' => 'Stuttgart',
            'calle' => 'Rotebúhlpl',
            'num_calle' => '21',
            'cp' => '70178',
            'lat' => 48.77,
            'alt' => 9.17,
        ]);

    }
}
