<?php

namespace Database\Seeders;
use App\Models\Module;
use App\Models\Pfe;
use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulePfeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = Module::whereHas('section', function($query){
                        $query->whereIn('intitule', ['S6', 'S8']);
                    })->get();

        $pfes = Pfe::all();

        foreach ($modules as $module) {
            $randomPfes = $pfes->random(3);

            foreach ($randomPfes as $pfe) {
                DB::table('module_pfe')->insert([
                    'pfe_id' => $pfe->id,
                    'module_id' => $module->id,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
    }

}

  