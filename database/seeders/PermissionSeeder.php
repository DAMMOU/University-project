<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            ['desc'=>'description de permission','label'=> 'Gestion des utilisateurs'],
            ['desc'=>'description de permission','label'=> 'Gestion des clients'],
            ['desc'=>'description de permission','label'=> 'Gestion des etablissements'],
            ['desc'=>'description de permission','label'=> 'Gestion des villes'],
            ['desc'=>'description de permission','label'=> 'Gestion des modules'],
            ['desc'=>'description de permission','label'=> 'Gestion des BTS'],     
            ['desc'=>'description de permission','label'=> 'Gestion des BTS'],     
            ['desc'=>'description de permission','label'=> 'Gestion des documents'],     
            ['desc'=>'description de permission','label'=> 'Gestion articles'],     
        ]);
        
    }
}
