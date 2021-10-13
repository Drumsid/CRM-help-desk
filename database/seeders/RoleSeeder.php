<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Admin'],
            ['name' => 'Client'],
            ['name' => 'Manager'],
            ['name' => 'Main-Manager'],
        ];
        DB::table('roles')->insert($data);
    }
}
