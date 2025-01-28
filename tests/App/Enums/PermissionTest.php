<?php

use App\Enums\Permission;

it('can get the correct label for PROJECT_CREATE permission', function () {
    $permission = Permission::PROJECT_CREATE;
    expect($permission->label())->toBe('Project Create');
});

it('can get the correct label for PROJECT_UPDATE permission', function () {
    $permission = Permission::PROJECT_UPDATE;
    expect($permission->label())->toBe('Project Update');
});

it('can get the correct label for PROJECT_DELETE permission', function () {
    $permission = Permission::PROJECT_DELETE;
    expect($permission->label())->toBe('Project Delete');
});

it('can get the correct label for PROJECT_VIEW_ALL permission', function () {
    $permission = Permission::PROJECT_VIEW_ALL;
    expect($permission->label())->toBe('Project View All');
});

it('can get the correct label for TASK_CREATE permission', function () {
    $permission = Permission::TASK_CREATE;
    expect($permission->label())->toBe('Task Create');
});

it('can get the correct label for TASK_ASSIGN permission', function () {
    $permission = Permission::TASK_ASSIGN;
    expect($permission->label())->toBe('Task Assign');
});

it('can get the correct label for TASK_UPDATE permission', function () {
    $permission = Permission::TASK_UPDATE;
    expect($permission->label())->toBe('Task Update');
});

it('can get the correct label for TASK_DELETE permission', function () {
    $permission = Permission::TASK_DELETE;
    expect($permission->label())->toBe('Task Delete');
});

it('can get the correct label for TASK_CHANGE_STATUS permission', function () {
    $permission = Permission::TASK_CHANGE_STATUS;
    expect($permission->label())->toBe('Task Change Status');
});

it('can get the correct label for TASK_PRIORITY_DEFINE permission', function () {
    $permission = Permission::TASK_PRIORITY_DEFINE;
    expect($permission->label())->toBe('Task Priority Define');
});

it('can get the correct label for TASK_PRIORITY_UPDATE permission', function () {
    $permission = Permission::TASK_PRIORITY_UPDATE;
    expect($permission->label())->toBe('Task Priority Update');
});

it('can get the correct label for TASK_COMPLETED_NOTIFICATION_RECEIVE permission', function () {
    $permission = Permission::TASK_COMPLETED_NOTIFICATION_RECEIVE;
    expect($permission->label())->toBe('Task Completed Notification Receive');
});

it('can get the correct label for TASK_COMMENT permission', function () {
    $permission = Permission::TASK_COMMENT;
    expect($permission->label())->toBe('Task Comment');
});

it('can get the correct label for TASK_VIEW permission', function () {
    $permission = Permission::TASK_VIEW;
    expect($permission->label())->toBe('Task View');
});

it('can get the correct label for DASHBOARD_VIEW_ASSIGNED_TASKS permission', function () {
    $permission = Permission::DASHBOARD_VIEW_ASSIGNED_TASKS;
    expect($permission->label())->toBe('Dashboard View Assigned Tasks');
});

it('can get the correct label for TASK_ASSIGN_NOTIFICATION_RECEIVE permission', function () {
    $permission = Permission::TASK_ASSIGN_NOTIFICATION_RECEIVE;
    expect($permission->label())->toBe('Task Assign Notification Receive');
});

it('can get the correct value for PROJECT_CREATE permission', function () {
    $permission = Permission::PROJECT_CREATE;
    expect($permission->value)->toBe('project create');
});

it('can get the correct value for PROJECT_UPDATE permission', function () {
    $permission = Permission::PROJECT_UPDATE;
    expect($permission->value)->toBe('project update');
});

it('can get the correct value for PROJECT_DELETE permission', function () {
    $permission = Permission::PROJECT_DELETE;
    expect($permission->value)->toBe('project delete');
});

it('can get the correct value for PROJECT_VIEW_ALL permission', function () {
    $permission = Permission::PROJECT_VIEW_ALL;
    expect($permission->value)->toBe('project view all');
});

it('can get the correct value for TASK_CREATE permission', function () {
    $permission = Permission::TASK_CREATE;
    expect($permission->value)->toBe('task create');
});

it('can get the correct value for TASK_ASSIGN permission', function () {
    $permission = Permission::TASK_ASSIGN;
    expect($permission->value)->toBe('task assign');
});

it('can get the correct value for TASK_UPDATE permission', function () {
    $permission = Permission::TASK_UPDATE;
    expect($permission->value)->toBe('task update');
});

it('can get the correct value for TASK_DELETE permission', function () {
    $permission = Permission::TASK_DELETE;
    expect($permission->value)->toBe('task delete');
});

it('can get the correct value for TASK_CHANGE_STATUS permission', function () {
    $permission = Permission::TASK_CHANGE_STATUS;
    expect($permission->value)->toBe('task change status');
});

it('can get the correct value for TASK_PRIORITY_DEFINE permission', function () {
    $permission = Permission::TASK_PRIORITY_DEFINE;
    expect($permission->value)->toBe('task priority define');
});

it('can get the correct value for TASK_PRIORITY_UPDATE permission', function () {
    $permission = Permission::TASK_PRIORITY_UPDATE;
    expect($permission->value)->toBe('task priority update');
});

it('can get the correct value for TASK_COMPLETED_NOTIFICATION_RECEIVE permission', function () {
    $permission = Permission::TASK_COMPLETED_NOTIFICATION_RECEIVE;
    expect($permission->value)->toBe('task completed notification receive');
});

it('can get the correct value for TASK_COMMENT permission', function () {
    $permission = Permission::TASK_COMMENT;
    expect($permission->value)->toBe('task comment');
});

it('can get the correct value for TASK_VIEW permission', function () {
    $permission = Permission::TASK_VIEW;
    expect($permission->value)->toBe('task view');
});

it('can get the correct value for DASHBOARD_VIEW_ASSIGNED_TASKS permission', function () {
    $permission = Permission::DASHBOARD_VIEW_ASSIGNED_TASKS;
    expect($permission->value)->toBe('dashboard view assigned tasks');
});

it('can get the correct value for TASK_ASSIGN_NOTIFICATION_RECEIVE permission', function () {
    $permission = Permission::TASK_ASSIGN_NOTIFICATION_RECEIVE;
    expect($permission->value)->toBe('task assign notification receive');
});
