<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Seed the three roles the app expects (Customer / Operations Staff /
     * Admin). Idempotent, so it's safe to run alongside the roles already
     * inserted by the create_roles_table migration.
     */
    public function run(): void
    {
        $roles = [
            ['name' => Role::CUSTOMER, 'display_name' => 'Customer'],
            ['name' => Role::OPERATIONS_STAFF, 'display_name' => 'Operations Staff'],
            ['name' => Role::ADMIN, 'display_name' => 'Admin'],
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate(['name' => $role['name']], $role);
        }
    }
}
