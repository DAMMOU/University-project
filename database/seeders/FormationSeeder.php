<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            ['categorie_formation_id'=>1,'type_formation_id'=>1,'intitule' =>"Diplôme d'Etudes Universitaire en Sciences et Techniques", 'universite_id' =>'1', 'etablissement_id' =>'1',],
            ['categorie_formation_id'=>2,'type_formation_id'=>1,'intitule' =>"Licence en Sciences et Techniques", 'universite_id' =>'1', 'etablissement_id' =>'1', ],
            ['categorie_formation_id'=>1,'type_formation_id'=>1,'intitule' =>"Diplôme de Master en Sciences et Techniques", 'universite_id' =>'1', 'etablissement_id' =>'1',],
            ['categorie_formation_id'=>1,'type_formation_id'=>1,'intitule' =>"Diplôme d'Ingénieur d'Etat", 'universite_id' =>'1', 'etablissement_id' =>'1',],
            ['categorie_formation_id'=>1,'type_formation_id'=>1,'intitule' =>"Doctorat en Sciences et Techniques", 'universite_id' =>'1', 'etablissement_id' =>'1',],
         
        ]);
    }
}
