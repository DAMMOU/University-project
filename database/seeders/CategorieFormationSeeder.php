<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieFormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie_formations')->insert([
            ['initiale' =>"DEUST"],
            ['initiale' =>"LST"],
            ['initiale' =>"DUG"],
            ['initiale' =>"LF"],
            ['initiale' =>"LP"],
            ['initiale' =>"DUT"],
            ['initiale' =>"Master"],
            ['initiale' =>"Autre"],
        ]);
    }
}
