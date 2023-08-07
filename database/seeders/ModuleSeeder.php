<?php

namespace Database\Seeders;

use App\Models\Filiere;
use App\Models\Module;
use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            ['intitule'=>'TEC 1','filiere_id'=>2,'section_id'=>1],
            ['intitule'=>'Optique et Radioactivité','filiere_id'=>2,'section_id'=>1],
            ['intitule'=>'Biologie Cellulaire','filiere_id'=>2,'section_id'=>1],
            ['intitule'=>'Algèbre','filiere_id'=>2,'section_id'=>1],
            ['intitule'=>'Cosmologie et Géodynamique interne','filiere_id'=>2,'section_id'=>1],
            ['intitule'=>'Analyse','filiere_id'=>2,'section_id'=>1],


            ['intitule'=>'TEC 2','filiere_id'=>2,'section_id'=>2],
            ['intitule'=>'Thermodynamique / Mécanique des fluides','filiere_id'=>2,'section_id'=>2],
            ['intitule'=>'Réactivité Chimique','filiere_id'=>2,'section_id'=>2],
            ['intitule'=>'Structures et Etats de la matière','filiere_id'=>2,'section_id'=>2],
            ['intitule'=>'Electricité','filiere_id'=>2,'section_id'=>2],
            ['intitule'=>'Bases de données','filiere_id'=>2,'section_id'=>2],
            
            ['intitule'=>'TEC 3','filiere_id'=>2,'section_id'=>3],
            ['intitule'=>'Biologie animale','filiere_id'=>2,'section_id'=>3],
            ['intitule'=>'Géodynamique Externe','filiere_id'=>2,'section_id'=>3],
            ['intitule'=>'Statistique descriptive et Probabilités','filiere_id'=>2,'section_id'=>3],
            ['intitule'=>'Biologie Végétale','filiere_id'=>2,'section_id'=>3],
            ['intitule'=>'Stratigraphie, Paléontologie et Paléoécologie','filiere_id'=>2,'section_id'=>3],

            ['intitule'=>'Biochimie Structurale','filiere_id'=>2,'section_id'=>4],
            ['intitule'=>'Chimie Organique 1','filiere_id'=>2,'section_id'=>4],
            ['intitule'=>'Microbiologie Générale','filiere_id'=>2,'section_id'=>4],
            ['intitule'=>'Chimie Minérale 1','filiere_id'=>2,'section_id'=>4],
            ['intitule'=>'Chimie Org 2 / Chimie Min 2','filiere_id'=>2,'section_id'=>4],
            ['intitule'=>'Tectonique','filiere_id'=>2,'section_id'=>4],




            ['intitule'=>'Langue 1','filiere_id'=>3,'section_id'=>1],
            ['intitule'=>'Mécanique du point et optique géométrique','filiere_id'=>3,'section_id'=>1],
            ['intitule'=>'Analyse 1','filiere_id'=>3,'section_id'=>1],
            ['intitule'=>'Thermodynamique','filiere_id'=>3,'section_id'=>1],
            ['intitule'=>'Analyse 2','filiere_id'=>3,'section_id'=>1],
            ['intitule'=>'Métrologie et Instrumentation','filiere_id'=>3,'section_id'=>1],

            ['intitule'=>'Langue 2','filiere_id'=>3,'section_id'=>2],
            ['intitule'=>'Algèbre 1','filiere_id'=>3,'section_id'=>2],
            ['intitule'=>'Circuits électriques et électroniques','filiere_id'=>3,'section_id'=>2],
            ['intitule'=>'Algèbre 2','filiere_id'=>3,'section_id'=>2],
            ['intitule'=>'Algorithmique et programmation 1','filiere_id'=>3,'section_id'=>2],
            ['intitule'=>'Électromagnétique dans le vide','filiere_id'=>3,'section_id'=>2],


            ['intitule'=>'Mécanique des solides','filiere_id'=>3,'section_id'=>3],
            ['intitule'=>'Electronique','filiere_id'=>3,'section_id'=>3],
            ['intitule'=>'Gestion','filiere_id'=>3,'section_id'=>3],
            ['intitule'=>'Structure de la matière','filiere_id'=>3,'section_id'=>3],
            ['intitule'=>'Probabilités et Statistiques','filiere_id'=>3,'section_id'=>3],
            ['intitule'=>'Informatique 2','filiere_id'=>3,'section_id'=>3],

            ['intitule'=>'Électrotechnique','filiere_id'=>3,'section_id'=>4],
            ['intitule'=>'Automatique','filiere_id'=>3,'section_id'=>4],
            ['intitule'=>'Hydraulique pneumatique','filiere_id'=>3,'section_id'=>4],
            ['intitule'=>'Automatismes industriels','filiere_id'=>3,'section_id'=>4],
            ['intitule'=>'Informatique 3','filiere_id'=>3,'section_id'=>4],
            ['intitule'=>'Analyse numérique','filiere_id'=>3,'section_id'=>4],

            



            ['intitule'=>'Langue 1','filiere_id'=>1,'section_id'=>1],
            ['intitule'=>'Mécanique du point et optique géométrique','filiere_id'=>1,'section_id'=>1],
            ['intitule'=>'Analyse 1','filiere_id'=>1,'section_id'=>1],
            ['intitule'=>'Thermodynamique','filiere_id'=>1,'section_id'=>1],
            ['intitule'=>'Analyse 2','filiere_id'=>1,'section_id'=>1],
            ['intitule'=>'Métrologie et Instrumentation','filiere_id'=>1,'section_id'=>1],

            ['intitule'=>'Langue 2','filiere_id'=>1,'section_id'=>2],
            ['intitule'=>'Algèbre 1','filiere_id'=>1,'section_id'=>2],
            ['intitule'=>'Circuits électriques et électroniques','filiere_id'=>1,'section_id'=>2],
            ['intitule'=>'Algèbre 2','filiere_id'=>1,'section_id'=>2],
            ['intitule'=>'Algorithmique et programmation 1','filiere_id'=>1,'section_id'=>2],
            ['intitule'=>'Électromagnétique dans le vide','filiere_id'=>1,'section_id'=>2],


            ['intitule'=>'Mécanique des solides','filiere_id'=>1,'section_id'=>3],
            ['intitule'=>'Electronique','filiere_id'=>1,'section_id'=>3],
            ['intitule'=>'Gestion','filiere_id'=>1,'section_id'=>3],
            ['intitule'=>'Structure de la matière','filiere_id'=>1,'section_id'=>3],
            ['intitule'=>'Probabilités et Statistiques','filiere_id'=>1,'section_id'=>3],
            ['intitule'=>'Informatique 2','filiere_id'=>1,'section_id'=>3],

            ['intitule'=>'Électrotechnique','filiere_id'=>1,'section_id'=>4],
            ['intitule'=>'Automatique','filiere_id'=>1,'section_id'=>4],
            ['intitule'=>'Hydraulique pneumatique','filiere_id'=>1,'section_id'=>4],
            ['intitule'=>'Automatismes industriels','filiere_id'=>1,'section_id'=>4],
            ['intitule'=>'Informatique 3','filiere_id'=>1,'section_id'=>4],
            ['intitule'=>'Analyse numérique','filiere_id'=>1,'section_id'=>4],

        ]);
        $filiereIds = Filiere::pluck('id');
        $sectionIds = Section::pluck('id');

        foreach ($filiereIds as $filiereId) {
            foreach ($sectionIds as $sectionId) {
                for ($i = 1; $i <= 8; $i++) {
                    Module::create([
                        'filiere_id' => $filiereId,
                        'section_id' => $sectionId,
                        'intitule' => "Module " . $i,
                        'code' => "CODE" . $i,
                        'prof' => "Professeur " . $i,
                        'desc' => "Description du module " . $i,
                    ]);
                }
            }
        }

    }

}






        

  
