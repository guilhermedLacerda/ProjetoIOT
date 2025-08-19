<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AmbienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create('pt_BR');

        for($i=1; $i<=10; $i++){
            Ambiente::create([
                'nome' => 'Ambiente' . $i,
                'descricao' => $faker->sentence(),
                'status' => $faker->boolean(80)
            ]);
        }
    }
}
