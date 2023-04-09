<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieEtablissementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie_etablissements')->insert([
            ['label' =>"FST"],
            ['label' =>"EST"],
            ['label' =>"FP"],
            ['label' =>"ENSA"],
            ['label' =>"ENCG"],
        ]);
    }
}
