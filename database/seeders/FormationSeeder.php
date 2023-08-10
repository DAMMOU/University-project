<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Formation;
use App\Models\Universite;
use App\Models\Etablissement;
use App\Models\TypeFormation;
use App\Models\CategorieFormation;
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
            ['categorie_formation_id'=>1,'type_formation_id'=>1,'intitule' =>"Diplôme d'Etudes Universitaire en Sciences et Techniques", 'universite_id' =>'1', 'etablissement_id' =>'1', 'ville_id' =>'1'],
            ['categorie_formation_id'=>2,'type_formation_id'=>1,'intitule' =>"Licence en Sciences et Techniques", 'universite_id' =>'1', 'etablissement_id' =>'1', 'ville_id' =>'1'],
            ['categorie_formation_id'=>1,'type_formation_id'=>1,'intitule' =>"Diplôme de Master en Sciences et Techniques", 'universite_id' =>'1', 'etablissement_id' =>'1', 'ville_id' =>'1'],
            ['categorie_formation_id'=>1,'type_formation_id'=>1,'intitule' =>"Diplôme d'Ingénieur d'Etat", 'universite_id' =>'1', 'etablissement_id' =>'1', 'ville_id' =>'1'],
            ['categorie_formation_id'=>1,'type_formation_id'=>1,'intitule' =>"Doctorat en Sciences et Techniques", 'universite_id' =>'1', 'etablissement_id' =>'1', 'ville_id' =>'1'],
         
        ]);
        $universiteIds = Universite::pluck('id');
        $etablissementIds = Etablissement::pluck('id');
        $typeFormationIds = TypeFormation::pluck('id');
        $categorieFormationIds = CategorieFormation::pluck('id');
        $villeFormationIds = CategorieFormation::pluck('id');

        foreach ($etablissementIds as $etablissementId) {
            for ($i = 0; $i < 4; $i++) {
                $universiteId = $universiteIds->random();
                $typeFormationId = $typeFormationIds->random();
                $categorieFormationId = $categorieFormationIds->random();
                $villeFormationId = $villeFormationIds->random();
                Formation::create([
                    'universite_id' => $universiteId,
                    'etablissement_id' => $etablissementId,
                    'type_formation_id' => $typeFormationId,
                    'categorie_formation_id' => $categorieFormationId,
                    'ville_id' => $villeFormationId,
                    'niveau' => rand(1, 10),
                    'intitule' => "Formation " . ($i + 1),
                    'initiale' => substr("Formation " . ($i + 1), 0, 3),
                    'duree' => rand(1, 6) * 6,
                    'domaine' => "Domaine" . rand(1, 10),
                    'desc' => "Description de la formation " . ($i + 1),
                    'etat' => rand(0, 1) ? "active" : "inactive"
                ]);
            }
        }

    }
}
