<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Frameworks;

class FrameworksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Frameworks::create([
            'user_id' => User::where('name','Luis Felipe')->first()->id,
            'name' => 'Python',
            'level' => '70',
            'year' => '2020'
            
        ]);
        \App\Models\Frameworks::create([
            'user_id' => User::where('name','Luis Felipe')->first()->id,
            'name' => 'Java',
            'level' => '55',
            'year' => '2021'
        ]);
        \App\Models\Frameworks::create([
            'user_id' => User::where('name','Luis Felipe')->first()->id,
            'name' => 'C++',
            'level' => '50',
            'year' => '2021'
        ]);
        \App\Models\Frameworks::create([
            'user_id' => User::where('name','Luis Felipe')->first()->id,
            'name' => 'SQL',
            'level' => '40',
            'year' => '2022'
        ]);
    }

}
