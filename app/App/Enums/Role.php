<?php

namespace App\Enums;

enum Role: string
{
    case ADMIN = 'admin';

    case USER = 'user';

    public function label(): string
    {
        return match ($this) {
            Role::ADMIN => 'Admin',
            Role::USER => 'User',
        };
    }
}
