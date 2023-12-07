<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Luis Felipe',
            'lastname' => 'Ardiles Castillo',
            'age' => 21,
            'city' => 'Antofagasta',
            'country'  => 'Chile',
            'email' => 'luis.ardiles@alumnos.ucn.cl',
            'facebook' => 'https://web.facebook.com/luis.ardiles.142/',
            'instagram' => 'https://www.instagram.com/luiis_elimbecil/',
            'summary' => 'Joven universitario de rápido aprendizaje, quien se desenvuelve bien en su área, dispuesto a tomar nuevos desafíos, disponibilidad casi inmediata',
            'summary2' => 'trabaja bien en equipo, sigue las instrucciones dadas y se preocupa tanto por su seguridad como las de sus compañeros'
        ]);
    }
}
