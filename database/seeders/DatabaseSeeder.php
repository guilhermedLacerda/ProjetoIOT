<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
           AmbienteSeeder::class,
           SensorSeeder::class,
           

        ]);

            User::factory()->create([
            'name' => 'gui',
            'email' => 'gui@example.com',
            'password' => Hash::make('123456')
        ]);
    }
}
