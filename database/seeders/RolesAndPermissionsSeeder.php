<?php

namespace Database\Seeders;

use App\Enums\Role as EnumsRole;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $adminPermissions = [
            'project create',      // Create projects
            'project update',      // Update project details
            'project delete',      // Delete projects
            'project view all',    // View all projects and their details

            'task create',         // Create tasks within a project
            'task assign',         // Assign tasks to users
            'task update',         // Update task details
            'task change status',  // Change task status for any task
            'task delete',         // Delete tasks

            'task priority define', // Define task priority levels
            'task priority update', // Update task priorities

            'dashboard view all tasks', // View all tasks in the task status dashboard

            'task completed notification receive', // Receive notifications when tasks are completed
        ];

        $userPermissions = [
            'task view',           // View tasks assigned to them
            'task update status',  // Update task status (Pending, In Progress, Completed)
            'task comment',        // Add comments/notes on tasks (if applicable)

            'dashboard view assigned tasks', // View tasks assigned to them in the task status dashboard

            'notification receive', // Receive notifications when tasks are assigned or updated

            'task assign notification receive', // Receive notifications when tasks are assigned to them
        ];

        $permissions = array_merge($adminPermissions, $userPermissions);

        collect($permissions)->each(function ($permission) {
            Permission::create([
                'name' => $permission,
            ]);
        });

        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Role::create(['name' => EnumsRole::ADMIN])
            ->givePermissionTo($adminPermissions);

        Role::create(['name' => EnumsRole::USER])
            ->givePermissionTo($userPermissions);
    }
}
