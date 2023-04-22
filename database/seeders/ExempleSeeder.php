<?php

namespace Database\Seeders;

use App\Models\CategorieExemple;
use App\Models\Exemple;
use App\Models\TypeExemple;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

class ExempleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('exemples')->insert([
        //    ['type_exemple_id' =>'1','categorie_exemple_id' =>'1','chemin'=>''  ],
        //    ['type_exemple_id' =>'1','categorie_exemple_id' =>'1','chemin'=>''  ],
        //    ['type_exemple_id' =>'1','categorie_exemple_id' =>'1','chemin'=>''  ],
        //    ['type_exemple_id' =>'2','categorie_exemple_id' =>'2','chemin'=>''  ],
        //    ['type_exemple_id' =>'2','categorie_exemple_id' =>'2','chemin'=>''  ],
        //    ['type_exemple_id' =>'2','categorie_exemple_id' =>'2','chemin'=>''  ],
        //    ['type_exemple_id' =>'2','categorie_exemple_id' =>'2','chemin'=>''  ],
//
        //    
        //]);

        $CategorieExempleTds = CategorieExemple::pluck('id');
        $typeExempleIds = TypeExemple::pluck('id');

        for ($i = 1; $i <= 100; $i++) {
            $exemple = new Exemple();
            $exemple->chemin = "https://docs.google.com/viewer?url=https://lafac.net/CV_DAMMOU_Youssef.pdf";
            $exemple->type_exemple_id = $typeExempleIds->random();
            $exemple->categorie_exemple_id = $CategorieExempleTds->random();
            $exemple->desc = "Description de l'exemple " . $i;
            $exemple->save();
        }
    }
}







