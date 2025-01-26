<?php

namespace Database\Seeders;

use App\Enums\Permission as EnumsPermission;
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
            EnumsPermission::PROJECT_CREATE,
            EnumsPermission::PROJECT_UPDATE,
            EnumsPermission::PROJECT_DELETE,
            EnumsPermission::PROJECT_VIEW_ALL,
            EnumsPermission::TASK_CREATE,
            EnumsPermission::TASK_ASSIGN,
            EnumsPermission::TASK_UPDATE,
            EnumsPermission::TASK_DELETE,
            EnumsPermission::TASK_PRIORITY_DEFINE,
            EnumsPermission::TASK_PRIORITY_UPDATE,
            EnumsPermission::TASK_COMPLETED_NOTIFICATION_RECEIVE,
        ];

        $userPermissions = [
            EnumsPermission::TASK_VIEW,
            EnumsPermission::TASK_CHANGE_STATUS,
            EnumsPermission::TASK_COMMENT,
            EnumsPermission::DASHBOARD_VIEW_ASSIGNED_TASKS,
            EnumsPermission::TASK_ASSIGN_NOTIFICATION_RECEIVE,
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
