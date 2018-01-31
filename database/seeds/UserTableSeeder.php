<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Andrea',
            'surname' => 'Espada',
            'email' => 'andrea@andrea.com',
            'sex' => 'Femenino',
            'phone' => 654987654,
            'password' => bcrypt('zubiri'),
            'verified' => true,
            'suscripcion_id' => 1,
            'oficina_id' =>1
        ]);

        DB::table('users')->insert([
            'name' => 'Iker',
            'surname' => 'Ruzo',
            'email' => 'iker@iker.com',
            'sex' => 'Masculino',
            'phone' => 654567894,
            'password' => bcrypt('zubiri'),
            'verified' => true,
            'suscripcion_id' => 2,
            'oficina_id' =>1
        ]);

        DB::table('users')->insert([
            'name' => 'Tibi',
            'surname' => 'Bencea',
            'email' => 'tibi@tibi.com',
            'sex' => 'Masculino',
            'phone' => 652104233,
            'password' => bcrypt('zubiri'),
            'verified' => true,
            'suscripcion_id' => 3,
            'oficina_id' =>1
        ]);

        DB::table('users')->insert([
            'name' => 'Pedro',
            'surname' => 'Rodriguez',
            'email' => 'pedro@pedro.com',
            'sex' => 'Masculino',
            'phone' => 677844958,
            'password' => bcrypt('zubiri'),
            'verified' => true,
            'suscripcion_id' => 4,
            'oficina_id' =>1
        ]);
    }
}
