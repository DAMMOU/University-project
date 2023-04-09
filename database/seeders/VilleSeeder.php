<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('villes')->insert([
            ['nom'=>'Oujda-Angad'           ,'region_id' =>'1' ],
            ['nom'=>'Nador'                 ,'region_id' =>'1' ],
            ['nom'=>'Driouch'               ,'region_id' =>'1' ],
            ['nom'=>'Berkan'                ,'region_id' =>'1' ],
            ['nom'=>'Taourirt'              ,'region_id' =>'1' ],
            ['nom'=>'Guercif'               ,'region_id' =>'1' ],
            ['nom'=>'Figuig'                ,'region_id' =>'1' ],

            ['nom'=>'Marrakech'             ,'region_id' =>'2'  ],
            ['nom'=>'Chichaoua'             ,'region_id' =>'2'  ],
            ['nom'=>'Al Haouz'              ,'region_id' =>'2'  ],
            ['nom'=>'Kelâa des Sraghna'     ,'region_id' =>'2'  ],
            ['nom'=>'Essaouira'             ,'region_id' =>'2'  ],
            ['nom'=>'Rehamna'               ,'region_id' =>'2'  ],
            ['nom'=>'Youssoufia'            ,'region_id' =>'2'  ],

            ['nom'=>'Errachidia'            ,'region_id' =>'3'  ],
            ['nom'=>'Ouarzazate'            ,'region_id' =>'3'  ],
            ['nom'=>'Midelt'                ,'region_id' =>'3'  ],
            ['nom'=>'Tinghir'               ,'region_id' =>'3'  ],
            ['nom'=>'Zagora'                ,'region_id' =>'3'  ],

            ['nom'=>'Fès'                   ,'region_id' =>'4'  ],
            ['nom'=>'Meknès'                ,'region_id' =>'4'  ],
            ['nom'=>'El Hajeb'              ,'region_id' =>'4'  ],
            ['nom'=>'Ifrane'                ,'region_id' =>'4'  ],
            ['nom'=>'Moulay Yacoub'         ,'region_id' =>'4'  ],
            ['nom'=>'Boulemane'             ,'region_id' =>'4'  ],
            ['nom'=>'Taounate'              ,'region_id' =>'4'  ],
            ['nom'=>'Taza'                  ,'region_id' =>'4'  ],

            ['nom'=>'Guelmim'               ,'region_id' =>'5'  ],
            ['nom'=>'Assa-Zag'              ,'region_id' =>'5'  ],
            ['nom'=>'Tan-Tan'               ,'region_id' =>'5'  ],
            ['nom'=>'Sidi Ifni'             ,'region_id' =>'5'  ],

            ['nom'=>'Tanger'                ,'region_id' =>'6'  ],
            ['nom'=>"M'diq-Fnideq"          ,'region_id' =>'6'  ],
            ['nom'=>'Tétouan'               ,'region_id' =>'6'  ],
            ['nom'=>'Fahs-Anjra'            ,'region_id' =>'6'  ],
            ['nom'=>'Larache'               ,'region_id' =>'6'  ],
            ['nom'=>'Al Hoceima'            ,'region_id' =>'6'  ],
            ['nom'=>'Chefchaouen'           ,'region_id' =>'6'  ],
            ['nom'=>'Ouazzane'              ,'region_id' =>'6'  ],

            ['nom'=>'Agadir'                ,'region_id' =>'7'  ],
            ['nom'=>'Inezgane-Aït Melloul'  ,'region_id' =>'7'  ],
            ['nom'=>'Chtouka-Aït Baha'      ,'region_id' =>'7'  ],
            ['nom'=>'Taroudannt'            ,'region_id' =>'7'  ],
            ['nom'=>'Tiznit'                ,'region_id' =>'7'  ],
            ['nom'=>'Tata'                  ,'region_id' =>'7'  ],

            ['nom'=>'Casablanca'            ,'region_id' =>'8'  ],
            ['nom'=>'Mohammadia'            ,'region_id' =>'8'  ],
            ['nom'=>'El Jadida'             ,'region_id' =>'8'  ],
            ['nom'=>'Médiouna'              ,'region_id' =>'8'  ],
            ['nom'=>'Benslimane'            ,'region_id' =>'8'  ],
            ['nom'=>'Berrechid'             ,'region_id' =>'8'  ],
            ['nom'=>'Sidi Bennour'          ,'region_id' =>'8'  ],

            ['nom'=>'Oued Ed-Dahab'         ,'region_id' =>'9'  ],
            ['nom'=>'Aousserd'              ,'region_id' =>'9'  ],


            ['nom'=>'Béni Mellal'           ,'region_id' =>'10'  ],
            ['nom'=>'Azilal'                ,'region_id' =>'10'  ],
            ['nom'=>'Fquih Ben Salah'       ,'region_id' =>'10'  ],
            ['nom'=>'Khénifra'              ,'region_id' =>'10'  ],
            ['nom'=>'Khouribga'             ,'region_id' =>'10'  ],


            ['nom'=>'Rabat'                 ,'region_id' =>'11'  ],
            ['nom'=>'Salé'                  ,'region_id' =>'11'  ],
            ['nom'=>'Skhirate-Témara'       ,'region_id' =>'11'  ],
            ['nom'=>'Kénitra'               ,'region_id' =>'11'  ],
            ['nom'=>'Khémisset'             ,'region_id' =>'11'  ],
            ['nom'=>'Sidi Kacem'            ,'region_id' =>'11'  ],
            ['nom'=>'Sidi Slimane'          ,'region_id' =>'11'  ],

            ['nom'=>'Laâyoune'              ,'region_id' =>'12'  ],
            ['nom'=>'Boujdour'              ,'region_id' =>'12'  ],
            ['nom'=>'Tarfaya'               ,'region_id' =>'12'  ],
            ['nom'=>'Es-Semara​'             ,'region_id' =>'12'  ],
        ]);
    }
}
