<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeEtablissementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_etablissements')->insert([
            ['label' =>"Ecole"],
            ['label' =>"Faculté"],
            ['label' =>"Institut"],
            ['label' =>"Ecole ING"],
            ['label' =>"CP"],
        ]);
    }
}
