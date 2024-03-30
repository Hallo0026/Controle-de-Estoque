<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['role' => 'admin', 'create_permission' => '1', 'read_permission' => '1', 'update_permission' => '1', 'delete_permission' => '1', 'restricted_pages_access' => '1'],

            ['role' => 'diretor', 'create_permission' => '1', 'read_permission' => '1', 'update_permission' => '1', 'delete_permission' => '1', 'restricted_pages_access' => '1'],

            ['role' => 'gerente', 'create_permission' => '1', 'read_permission' => '1', 'update_permission' => '1', 'delete_permission' => '0', 'restricted_pages_access' => '1'],

            ['role' => 'controlador', 'create_permission' => '1', 'read_permission' => '1', 'update_permission' => '1', 'delete_permission' => '0', 'restricted_pages_access' => '0'],

            ['role' => 'supervisor', 'create_permission' => '1', 'read_permission' => '1', 'update_permission' => '0', 'delete_permission' => '0', 'restricted_pages_access' => '0'],

            ['role' => 'auxiliar', 'create_permission' => '0', 'read_permission' => '1', 'update_permission' => '0', 'delete_permission' => '0', 'restricted_pages_access' => '0'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
