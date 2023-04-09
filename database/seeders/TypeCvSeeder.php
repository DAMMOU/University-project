<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeCvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_cvs')->insert([
            ['initiale' => 'PDF'],
            ['initiale' => 'Word'],
            ['initiale' => 'PowerPoint'],
            ['initiale' => 'texte'],
        ]);
    }
}
