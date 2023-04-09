<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            ['nom'=>"L'Oriental"],
            ['nom'=>'Marrakech-Safi	'],
            ['nom'=>'Drâa-Tafilalet'],
            ['nom'=>'Fès-Meknès'],
            ['nom'=>'Guelmim-oued Noun'],
            ['nom'=>'Tanger-Tétouan-Al Hoceima'],
            ['nom'=>'Souss-Massa'],
            ['nom'=>'Casablanca-Settat'],
            ['nom'=>'Dakhla-Oued Eddahab'],
            ['nom'=>'Beni Mellal-Khénifra'],
            ['nom'=>'Rabat-Salé-Kénitra	'],
            ['nom'=>'Laâyoune-Sakia Al Hamra'],
          
        ]);
    }
}
