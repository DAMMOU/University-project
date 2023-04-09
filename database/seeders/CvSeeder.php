<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cvs')->insert([
            ['chemin' => 'pdf/lettre_motivation','type_cv_id'=>1, 'categorie_cv_id'=>1],
            ['chemin' => 'pdf/lettre_motivation','type_cv_id'=>2, 'categorie_cv_id'=>1],   
            ['chemin' => 'pdf/lettre_motivation','type_cv_id'=>2, 'categorie_cv_id'=>1],   
            ['chemin' => 'pdf/lettre_motivation','type_cv_id'=>2, 'categorie_cv_id'=>1],   
            ['chemin' => 'pdf/lettre_motivation','type_cv_id'=>2, 'categorie_cv_id'=>1],   
            ['chemin' => 'pdf/lettre_motivation','type_cv_id'=>2, 'categorie_cv_id'=>1],   
        ]);
    }
   
}
