<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use App\Models\Sensor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('pt_BR');
        $ambientes = Ambiente::all();

        for($i=1; $i<=40; $i++){
            Sensor::create([
                'codigo' => 'S' . $i,
                'tipo' => $faker->randomElement([
                    'luminosidade',
                    'cfid',
                    'infravermelho',
                    'temperatura',
                    'umidade'
                ]),
                'descricao' => $faker->sentence(),
                'status' => $faker->boolean(90),
                'ambiente_id' => $ambientes->random()->id
            ]);
        }
    }
}
