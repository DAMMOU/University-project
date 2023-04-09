<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieCvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie_cvs')->insert([
            ['initiale' => 'CV_stage'],
            ['initiale' => 'CV_master'],
            ['initiale' => 'CV_travail'],
        ]);
    }
}
