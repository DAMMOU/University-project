<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cour;
use App\Models\Module;


class CoursModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Obtenir tous les cours et tous les modules
        $cours = Cour::all();
        $modules = Module::all();

        // Associer aléatoirement un ou plusieurs modules à chaque cours
        foreach ($cours as $c) {
            $randomModules = $modules->random(rand(1, 5)); // choisir entre 1 et 5 modules aléatoires
            $c->modules()->sync($randomModules, [
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

