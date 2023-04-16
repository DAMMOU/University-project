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

        // Générer 50 cours aléatoires
        for ($i = 1; $i <= 50; $i++) {
            Cour::create([
                'label' => $faker->sentence(3),
                'path' => $faker->url,
                'domain' => $faker->word,
            ]);
        }
      // DB::table('cours')->insert([
      //     [
      //         'path' => 'math/algebra',
      //         'domain' => 'mathematics',
      //         'created_at' => now(),
      //         'updated_at' => now(),
      //     ],
      //     [
      //         'path' => 'math/geometry',
      //         'domain' => 'mathematics',
      //         'created_at' => now(),
      //         'updated_at' => now(),
      //     ],
      //     [
      //         'path' => 'science/physics',
      //         'domain' => 'science',
      //         'created_at' => now(),
      //         'updated_at' => now(),
      //     ],
      // ]);
    }
}
