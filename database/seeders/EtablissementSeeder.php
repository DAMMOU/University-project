<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtablissementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etablissements')->insert([
            ['universite_id'=>1,'nom'=>'Faculté des Sciences et Technique','ville_id'=>1, 'type_etablissement_id'=>1,'categorie_etablissement_id'=>1],
            ['universite_id'=>1,'nom'=>'Faculté des Sciences Juridiques, Economiques et Sociales','ville_id'=>1, 'type_etablissement_id'=>1,'categorie_etablissement_id'=>1],
            ['universite_id'=>1,'nom'=>'Faculté des Sciences ','ville_id'=>3 , 'type_etablissement_id'=>1,'categorie_etablissement_id'=>1],
            ['universite_id'=>1,'nom'=>'Faculté Polydisciplinaire','ville_id'=>4 , 'type_etablissement_id'=>1,'categorie_etablissement_id'=>1],
            ['universite_id'=>1,'nom'=>'Ecole Supérieure de Technologie','ville_id'=>5 , 'type_etablissement_id'=>1,'categorie_etablissement_id'=>2],
            ['universite_id'=>1,'nom'=>'Ecole Normale Supérieure','ville_id'=>6 , 'type_etablissement_id'=>1,'categorie_etablissement_id'=>2],
            ['universite_id'=>1,'nom'=>'Ecole Nationale de Commerce et de Gestion','ville_id'=>7 , 'type_etablissement_id'=>1,'categorie_etablissement_id'=>2],
            ['universite_id'=>1,'nom'=>"Ecole Nationale Supérieure d'Arts et Métiers",'ville_id'=>8 , 'type_etablissement_id'=>1,'categorie_etablissement_id'=>1],
          

            ['ville_id'=>2,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>2,'nom'=>"École Supérieure de Technologie"],
            ['ville_id'=>2,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>2,'nom'=>"École Nationale des Sciences Appliquées"],
            ['ville_id'=>2,'categorie_etablissement_id'=>1,'type_etablissement_id'=>3,'universite_id'=>2,'nom'=>"École Nationale de Commerce et de Gestion"],
            ['ville_id'=>2,'categorie_etablissement_id'=>2,'type_etablissement_id'=>2,'universite_id'=>2,'nom'=>"Faculté de Médecine et de Pharmacie"],
            ['ville_id'=>2,'categorie_etablissement_id'=>2,'type_etablissement_id'=>3,'universite_id'=>2,'nom'=>"Faculté des Sciences"],
            ['ville_id'=>2,'categorie_etablissement_id'=>2,'type_etablissement_id'=>2,'universite_id'=>2,'nom'=>"Faculté des Lettres et Sciences Humaines"],
            ['ville_id'=>2,'categorie_etablissement_id'=>3,'type_etablissement_id'=>2,'universite_id'=>2,'nom'=>"Faculté des Sciences Juridiques, Économiques et Sociales"],
            ['ville_id'=>2,'categorie_etablissement_id'=>3,'type_etablissement_id'=>1,'universite_id'=>2,'nom'=>"Faculté Pluridisciplinaire de Nador"],
            ['ville_id'=>2,'categorie_etablissement_id'=>3,'type_etablissement_id'=>2,'universite_id'=>2,'nom'=>"École Supérieure de l'Éducation et de la Formation"],

           
            ['ville_id'=>3,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>3,'nom'=>"Faculté des Lettres et des Sciences Humaines"],
            ['ville_id'=>3,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>3,'nom'=>"Faculté des Sciences et Techniques"],
            ['ville_id'=>3,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>3,'nom'=>"Faculté Polydisciplinaire"],
            ['ville_id'=>3,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>3,'nom'=>"Faculté Polydisciplinaire"],
            ['ville_id'=>3,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>3,'nom'=>"Faculté d'Économie et de Gestion"],
            ['ville_id'=>3,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>3,'nom'=>"École Nationale de Commerce et de Gestion"],
            ['ville_id'=>3,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>3,'nom'=>"École Nationale des Sciences Appliquées"],
            ['ville_id'=>3,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>3,'nom'=>"École Nationale des Sciences Appliquées"],
            ['ville_id'=>3,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>3,'nom'=>"École Supérieure de l'Éducation et de la Formation"],
            ['ville_id'=>3,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>3,'nom'=>"École Supérieure de Technologie "],
            ['ville_id'=>3,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>3,'nom'=>"École Supérieure de Technologie"],
            ['ville_id'=>3,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>3,'nom'=>"École Supérieure de Technologie"],
            ['ville_id'=>3,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>3,'nom'=>"Noyau universitaire"],


            ['ville_id'=>4,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>4,'nom'=>"Faculté des Sciences"],
            ['ville_id'=>4,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>4,'nom'=>"Faculté des Lettres et des Sciences Humaines"],
            ['ville_id'=>4,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>4,'nom'=>"Faculté des Sciences Juridiques Economique et Sociales"],
            ['ville_id'=>4,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>4,'nom'=>"Faculté des Sciences et Techniques"],
            ['ville_id'=>4,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>4,'nom'=>"Faculté des Lettres et des Sciences Humaines"],
            ['ville_id'=>4,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>4,'nom'=>"Ecole Supérieure de Technologie"],
            ['ville_id'=>4,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>4,'nom'=>"Faculté de Médecine et de Pharmacie"],
            ['ville_id'=>4,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>4,'nom'=>"Ecole Nationale de Commerce et de Gestion"],
            ['ville_id'=>4,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>4,'nom'=>"Cité d'innovation et transfert technologique"],
            ['ville_id'=>4,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>4,'nom'=>"Ecole Normale Supérieure"],
            ['ville_id'=>4,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>4,'nom'=>"كلية الشريعة"],
            ['ville_id'=>4,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>4,'nom'=>"Centre de la Formation Continue (CFCC)"],
            ['ville_id'=>4,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>4,'nom'=>"Faculté Polydisciplinaire de Taza"],


            ['ville_id'=>5,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>5,'nom'=>"Faculté des Sciences"],
            ['ville_id'=>5,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>5,'nom'=>"Faculté des Lettres et des Sciences Humaines"],
            ['ville_id'=>5,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>5,'nom'=>"Faculté des Sciences Juridiques, Economiques et Sociales"],
            ['ville_id'=>5,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>5,'nom'=>"Ecole Supérieure de Technologie"],
            ['ville_id'=>5,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>5,'nom'=>"Faculté des Sciences et Techniques"],
            ['ville_id'=>5,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>5,'nom'=>"Faculté Polydisciplinaire"],
            ['ville_id'=>5,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>5,'nom'=>"Ecole Nationale Supérieure d'Arts et Métiers"],
            ['ville_id'=>5,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>5,'nom'=>"Ecole Normale Supérieure"],
            ['ville_id'=>5,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>5,'nom'=>"Ecole Nationale de Commerce et de Gestion"],

            ['ville_id'=>6,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>6,'nom'=>"Faculté des Langues des Lettres et des Arts"],
            ['ville_id'=>6,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>6,'nom'=>"Faculté des Sciences Humaines et Sociales"],
            ['ville_id'=>6,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>6,'nom'=>"Faculté des Sciences"],
            ['ville_id'=>6,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>6,'nom'=>"Faculté d'Economie et de Gestion"],
            ['ville_id'=>6,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>6,'nom'=>"Faculté des Sciences Juridiques et Politiques"],
            ['ville_id'=>6,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>6,'nom'=>"Ecole Nationale de Commerce et de Gestion"],
            ['ville_id'=>6,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>6,'nom'=>"Ecole Supérieure de Technologie"],
            ['ville_id'=>6,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>6,'nom'=>"Ecole Nationale des Sciences Appliquées"],
            ['ville_id'=>6,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>6,'nom'=>"Ecole Nationale Supérieure de Chimie"],
            ['ville_id'=>6,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>6,'nom'=>"Ecole Supérieure d’Education et de Formation"],
            ['ville_id'=>6,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>6,'nom'=>"Institut des Métiers de Sport"],


            ['ville_id'=>7,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>7,'nom'=>"Faculté des Sciences Semlalia"],
            ['ville_id'=>7,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>7,'nom'=>"Faculté des Sciences Juridiques, Economiques et Sociales"],
            ['ville_id'=>7,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>7,'nom'=>"Ecole Nationale de Commerce et de Gestion"],
            ['ville_id'=>7,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>7,'nom'=>"Faculté de Médecine et de Pharmacie "],
            ['ville_id'=>7,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>7,'nom'=>"Faculté des Lettres et des Sciences Humaines"],
            ['ville_id'=>7,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>7,'nom'=>"Faculte des Sciences et Techniques Gueliz"],
            ['ville_id'=>7,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>7,'nom'=>"Ecole Nationale des Sciences Appliquées"],
            ['ville_id'=>7,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>7,'nom'=>"Ecole Normale Supérieure de Marrakech"],
            ['ville_id'=>7,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>7,'nom'=>"Faculté Polydisciplinaire"],
            ['ville_id'=>7,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>7,'nom'=>"Ecole Nationale des Sciences Appliquées "],
            ['ville_id'=>7,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>7,'nom'=>"Ecole Supérieure de Technologie"],
            ['ville_id'=>7,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>7,'nom'=>"École Supérieure de Technologie"],
            ['ville_id'=>7,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>7,'nom'=>"Faculté des Sciences Juridiques, Economiques et Sociales"],
            ['ville_id'=>7,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>7,'nom'=>"Faculté de Langue Arabe"],
            ['ville_id'=>7,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>7,'nom'=>"Ecole Supérieure de Technologie "],
          
            ['ville_id'=>8,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>8,'nom'=>"Faculté des Sciences"],
            ['ville_id'=>8,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>8,'nom'=>"Faculté faculté des sciences juridiques économiques et sociales"],
            ['ville_id'=>8,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>8,'nom'=>"Ecole nationale de commerce et de gestion"],
            ['ville_id'=>8,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>8,'nom'=>"Ecole Nationale des Sciences Appliquées"],
            ['ville_id'=>8,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>8,'nom'=>"Ecole Supérieure de Technologie"],



            ['ville_id'=>9,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>9,'nom'=>"Faculté des Sciences"],
            ['ville_id'=>9,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>9,'nom'=>"Faculté faculté des sciences juridiques économiques et sociales"],
            ['ville_id'=>9,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>9,'nom'=>"Ecole nationale de commerce et de gestion"],
            ['ville_id'=>9,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>9,'nom'=>"Ecole Nationale des Sciences Appliquées"],
            ['ville_id'=>9,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>9,'nom'=>"Ecole Supérieure de Technologie"],

            ['ville_id'=>10,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>10,'nom'=>"Faculté des Sciences"],
            ['ville_id'=>10,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>10,'nom'=>"Faculté faculté des sciences juridiques économiques et sociales"],
            ['ville_id'=>10,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>10,'nom'=>"Ecole nationale de commerce et de gestion"],
            ['ville_id'=>10,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>10,'nom'=>"Ecole Nationale des Sciences Appliquées"],
            ['ville_id'=>10,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>10,'nom'=>"Ecole Supérieure de Technologie"],

            ['ville_id'=>11,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>11,'nom'=>"Faculté des Sciences"],
            ['ville_id'=>11,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>11,'nom'=>"Faculté faculté des sciences juridiques économiques et sociales"],
            ['ville_id'=>11,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>11,'nom'=>"Ecole nationale de commerce et de gestion"],
            ['ville_id'=>11,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>11,'nom'=>"Ecole Nationale des Sciences Appliquées"],
            ['ville_id'=>11,'categorie_etablissement_id'=>1,'type_etablissement_id'=>2,'universite_id'=>11,'nom'=>"Ecole Supérieure de Technologie"],

        ]);
    }
}
