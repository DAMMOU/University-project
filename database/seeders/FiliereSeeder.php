<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Formation;
use App\Models\Etablissement;
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
            //['intitule' =>"LST : AGROCHIMIE", 'formation_id' =>'1', 'etablissement_id' =>'1',],
            //['intitule' =>" BIOCHIMIE-GENETIQUE-MICROBIOLOGIE", 'formation_id' =>'1', 'etablissement_id' =>'1',],

        ]);
        
        $formations = Formation::all();
        foreach ($formations as $formation) {
            for ($i = 0; $i < 3; $i++) {
                DB::table('filieres')->insert([
                    'intitule' => "Filiere " . ($i + 1),
                    'formation_id' => $formation->id,
                    'etablissement_id' => $formation->etablissement_id,
                ]);
            }
        }

    }
}
