<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adm = Role::create(['name' => 'Administrador']);
        $mec = Role::create(['name' => 'Mecánico']);
        $cli = Role::create(['name' => 'Cliente']);
    }
}
