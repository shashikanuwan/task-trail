<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        collect(range(1, 2))->each(function ($id) {
            User::factory()->create([
                'name' => "admin {$id}",
                'email' => "admin_{$id}@tasktrail.com",
            ])
                ->assignRole(Role::ADMIN->value);
        });

        collect(range(1, 5))->each(function ($id) {
            User::factory()->create([
                'name' => "user {$id}",
                'email' => "user_{$id}@tasktrail.com",
            ])
                ->assignRole(Role::USER->value);
        });
    }
}
