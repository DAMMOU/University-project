<?php

namespace Database\Seeders;

use App\Models\Cour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class CourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $faker = Faker::create();
//
        // Générer 50 cours aléatoires
        for ($i = 1; $i <= 200; $i++) {
            Cour::create([
                'label' => $faker->sentence(3),
                'path' => "https://docs.google.com/viewer?url=https://lafac.net/love_laravel.pdf",
                'domain' => $faker->word,
            ]);
        }
      
    }
}
