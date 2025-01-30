<?php

use App\Enums\Role;

it('can get the correct label for ADMIN role', function () {
    $role = Role::ADMIN;
    expect($role->label())->toBe('Admin');
});

it('can get the correct value for ADMIN role', function () {
    $role = Role::ADMIN;
    expect($role->value)->toBe('admin');
});

it('can get the correct label for USER role', function () {
    $role = Role::USER;
    expect($role->label())->toBe('User');
});

it('can get the correct value for USER role', function () {
    $role = Role::USER;
    expect($role->value)->toBe('user');
});
