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
            'phone' => 654987654,
            'password' => bcrypt('zubiri'),
            'verified' => true,
            'suscripcion_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Iker',
            'surname' => 'Ruzo',
            'email' => 'iker@iker.com',
            'phone' => 654567894,
            'password' => bcrypt('zubiri'),
            'verified' => true,
            'suscripcion_id' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'Tibi',
            'surname' => 'Bencea',
            'email' => 'tibi@tibi.com',
            'phone' => 652104233,
            'password' => bcrypt('zubiri'),
            'verified' => true,
            'suscripcion_id' => 3,
        ]);

        DB::table('users')->insert([
            'name' => 'Pedro',
            'surname' => 'Rodriguez',
            'email' => 'pedro@pedro.com',
            'phone' => 677844958,
            'password' => bcrypt('zubiri'),
            'verified' => true,
            'suscripcion_id' => 4,
        ]);
    }
}
