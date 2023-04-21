<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cour;
use App\Models\Module;
use Illuminate\Support\Facades\DB;

class CoursModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $moduleIds = Module::pluck('id');
        $coursIds = Cour::pluck('id');

        foreach ($moduleIds as $moduleId) {
            $randomCoursIds = $coursIds->random(3);

            foreach ($randomCoursIds as $coursId) {
                DB::table('cours_modules')->insert([
                    'cour_id' => $coursId,
                    'module_id' => $moduleId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }


    
}

