<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_permissions')->insert([
            ['user_id'=> '1', 'permission_id'=> '1'],
            ['user_id'=> '1', 'permission_id'=> '2'],
            ['user_id'=> '1', 'permission_id'=> '3'],
            ['user_id'=> '1', 'permission_id'=> '4'],
            ['user_id'=> '1', 'permission_id'=> '5'],
            ['user_id'=> '1', 'permission_id'=> '6'],
            ['user_id'=> '1', 'permission_id'=> '7'],
            ['user_id'=> '1', 'permission_id'=> '8'],
            ['user_id'=> '1', 'permission_id'=> '9'],
            ['user_id'=> '2', 'permission_id'=> '6'],
            ['user_id'=> '2', 'permission_id'=> '7'],
            ['user_id'=> '2', 'permission_id'=> '8'],
            ['user_id'=> '2', 'permission_id'=> '9'],
            ['user_id'=> '3', 'permission_id'=> '9'],
            ['user_id'=> '3', 'permission_id'=> '6'],
            ['user_id'=> '3', 'permission_id'=> '7'],
            ['user_id'=> '3', 'permission_id'=> '8'],
            ['user_id'=> '3', 'permission_id'=> '9'],
        ]);
    }
}
