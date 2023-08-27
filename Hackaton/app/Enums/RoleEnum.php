<?php

namespace App\Enums;

enum RoleEnum: string
{
    case CUSTOMER = 'customer';
    case SUPPLIER = 'supplier';
    case ADMIN = 'admin';

    public static function toArray(): array
    {
        return [
            self::CUSTOMER->value,
            self::SUPPLIER->value,
            self::ADMIN->value,
        ];
    }
}
