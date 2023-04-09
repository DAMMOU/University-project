<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeExempleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_exemples')->insert([
            ['initiale'=>"PDF"],
            ['initiale'=>"Image"],
            ['initiale'=>"Word"],
            ['initiale'=>"PowerPoint"],
            ['initiale'=>"Autre"],
        ]);
    }
}
