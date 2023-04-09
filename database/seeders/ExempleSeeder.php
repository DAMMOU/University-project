<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExempleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exemples')->insert([
            ['type_exemple_id' =>'1','categorie_exemple_id' =>'1','chemin'=>''  ],
            ['type_exemple_id' =>'1','categorie_exemple_id' =>'1','chemin'=>''  ],
            ['type_exemple_id' =>'1','categorie_exemple_id' =>'1','chemin'=>''  ],
            ['type_exemple_id' =>'2','categorie_exemple_id' =>'2','chemin'=>''  ],
            ['type_exemple_id' =>'2','categorie_exemple_id' =>'2','chemin'=>''  ],
            ['type_exemple_id' =>'2','categorie_exemple_id' =>'2','chemin'=>''  ],
            ['type_exemple_id' =>'2','categorie_exemple_id' =>'2','chemin'=>''  ],

            
        ]);
    }
}
