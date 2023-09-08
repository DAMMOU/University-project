<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CategorieExemple;
use App\Models\TypeExemple;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // \App\Models\Utilisateur::factory(20)->create();
       // \App\Models\User::factory(20)->create();
       // $this->call(RoleSeeder::class);
       // $this->call(UserRoleSeeder::class);
       // $this->call(PermissionSeeder::class);
       // $this->call(UserPermissionSeeder::class);
//
       // $this->call(RegionSeeder::class);
       // $this->call(VilleSeeder::class);
//
       // $this->call(CategorieEtablissementSeeder::class);
       // $this->call(TypeEtablissementSeeder::class);
       // 
//
       // $this->call(UniversiteSeeder::class);
//
//
       // $this->call(EtablissementSeeder::class);
       // $this->call(TypeFormationSeeder::class);
       // $this->call(CategorieFormationSeeder::class);
       // $this->call(DomaineFormationSeeder::class);
       // $this->call(FormationSeeder::class);
       // $this->call(FiliereSeeder::class);
       // $this->call(SectionSeeder::class);
       // $this->call(ModuleSeeder::class);
//
       // $this->call(CategorieExempleSeeder::class);
       // $this->call(TypeExempleSeeder::class);
       // $this->call(ExempleSeeder::class);
//
       // $this->call(CategorieCvSeeder::class);
       // $this->call(TypeCvSeeder::class);
       // $this->call(CvSeeder::class);
       // $this->call(CourSeeder::class);
       // $this->call(CoursModulesSeeder::class);

        /* LafacStore */
        \App\Models\Product::factory(20)->create();
        \App\Models\Customer::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
