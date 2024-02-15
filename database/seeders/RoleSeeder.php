<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'Admin',
                'slug' => 'admin'
            ],
            [
                'name' => 'Staff',
                'slug' => 'staff'
            ],

        ];

        foreach ($roles as $role) {
            Role::updateOrInsert(
                ['slug' => $role['slug']],
                [
                    'name' => $role['name'],
                ]
            );
        }
    }
}
