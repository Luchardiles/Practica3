<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hobbies;

class HobbiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Hobbies::create([
            'user_id' => User::where('name','Luis Felipe')->first()->id,
            'name' => 'Crear ',
            'description' =>'Crear de partidas de D&D',
            
        ]);
        \App\Models\Hobbies::create([
            'user_id' => User::where('name','Luis Felipe')->first()->id,
            'name' => 'Leer',
            'description' => 'Leer novelas de terror',
        ]);
        \App\Models\Hobbies::create([
            'user_id' => User::where('name','Luis Felipe')->first()->id,
            'name' => 'Pasear',
            'description' => 'Dar paseos por la playa'
        ]);
        \App\Models\Hobbies::create([
            'user_id' => User::where('name','Luis Felipe')->first()->id,
            'name' => 'Aprender',
            'description' => 'Aprender como programar un videojuego',
        ]);
    }

}
