<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filieres')->insert([
            ['intitule' =>"Mathématiques, Informatiques, Physiques", 'formation_id' =>'1', 'etablissement_id' =>'1',],
            ['intitule' =>"Biologie, Chimie, Géologie (BCG)", 'formation_id' =>'1', 'etablissement_id' =>'1', ],
            ['intitule' =>"Génie Electrique & Génie Mécanique (GEGM) ", 'formation_id' =>'1', 'etablissement_id' =>'1',],
            //['intitule' =>"LST : AGROCHIMIE", 'formation' =>'1', 'etablissement_id' =>'1',],
            //['intitule' =>" BIOCHIMIE-GENETIQUE-MICROBIOLOGIE", 'formation_id' =>'1', 'etablissement_id' =>'1',],
         
        ]);
    }
}
