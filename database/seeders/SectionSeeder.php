<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            ['intitule' => 'S1'],
            ['intitule' => 'S2'],
            ['intitule' => 'S3'],
            ['intitule' => 'S4'],
            ['intitule' => 'S5'],
            ['intitule' => 'S6'],
            ['intitule' => 'S7'],
            ['intitule' => 'S8'],
            ['intitule' => 'autre'],
        ]);
    }
}
