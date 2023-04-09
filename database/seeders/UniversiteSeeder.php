<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universites')->insert([
            ['initiale' => 'uh2','nom'=>'Université Hassan II','ville_id'=>1],
            ['initiale' => 'um1','nom'=>'Université Mohammed Premier','ville_id'=>2],
            ['initiale' => 'usms','nom'=>'Université Sultan Moulay Slimane','ville_id'=>3 ],
            ['initiale' => 'usmba','nom'=>'Université Sidi Mohammed Ben Abdellah','ville_id'=>4 ],
            ['initiale' => 'umi','nom'=>'Université Moulay Ismaïl','ville_id'=>5 ],
            ['initiale' => 'uit','nom'=>'Université Ibn Tofail','ville_id'=>6 ],
            ['initiale' => 'uca','nom'=>'Université Cadi Ayyad','ville_id'=>7 ],
            ['initiale' => 'ucd','nom'=>'Université Chouaïb Doukkali','ville_id'=>8 ],
            ['initiale' => 'uh1','nom'=>'Université Hassan I','ville_id'=>9 ],
            ['initiale' => 'uiz','nom'=>'Université Ibn Zohr','ville_id'=>10 ],
            ['initiale' => 'um5','nom'=>'Université Mohammed V','ville_id'=>11 ],
            ['initiale' => 'uaa','nom'=>'Al Akhawayn University','ville_id'=>12 ],

        ]);
    }
}
