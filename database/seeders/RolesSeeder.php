<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::firstOrCreate([
            'id' => 1,
            'role_name' => 'User',
            'access_level' => 1,
        ]);

        Role::firstOrCreate([
            'id' => 2,
            'role_name' => 'Mod',
            'access_level' => 2,
        ]);

        Role::firstOrCreate([
            'id' => 3,
            'role_name' => 'Admin',
            'access_level' => 3,
        ]);
    }
}
