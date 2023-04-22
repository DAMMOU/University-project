<?php

namespace Database\Seeders;

use App\Models\Pfe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PfeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 500; $i++) {
            $pfe = new Pfe();
            $pfe->label = "PFE " . $i;
            $pfe->path = "https://lafac.net/CV_DAMMOU_Youssef.pdf";
            $pfe->domain = "Domain " . rand(1, 10);
            $pfe->annee = rand(2015, 2022);
            $pfe->niveau = "Bac + " . rand(3, 5);
            $pfe->save();
        }
    }
}
