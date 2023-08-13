<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DomaineFormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Domaine_formations')->insert([
            ['Intitule' =>"Santé"],
            ['Intitule' =>"Informatique"],
            ['Intitule' =>"Mathématiques"],
            ['Intitule' =>"Mathématiques Appliquées"],
            ['Intitule' =>"Chimie"],
            ['Intitule' =>"Physique"],
            ['Intitule' =>"Gestion"],
            ['Intitule' =>"Economie"],
            ['Intitule' =>"Langues, Sc.Humaines"],
            ['Intitule' =>"Marketing, Communication"],
            ['Intitule' =>"Sport, Social, Animation"],
            ['Intitule' =>"Finance, Comptabilité"],
            ['Intitule' =>"Droit, Sciences Politiques"],
            ['Intitule' =>"Commerce, Management"],
            ['Intitule' =>"Agriculture, Environnement"],
            ['Intitule' =>"Art, Culture, Design, Mode"],
            ['Intitule' =>"Hôtellerie, Tourisme"],
            ['Intitule' =>"Ingénierie"],
            ['Intitule' =>"Sport, Social, Animation"],
        ]);
    }
}
