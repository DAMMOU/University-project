<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieExempleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie_exemples')->insert([
            ['intitule' =>"Lettre de motivation"],
            ['intitule' =>"Cv"],
            ['intitule' =>"Demande"],
        ]);
    }
}
