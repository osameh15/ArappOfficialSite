<?php


namespace Badzohreh\RolePermission\Models;


class Permission extends \Spatie\Permission\Models\Permission
{
//    TODO ADD SOME PERMISSIONS
    const MANAGE_USERS = "manage users";
    const MANAGE_PERMISSIONS = "manage permissions";
    const MANAGE_SERVICES = "manage services";
    const SUPER_ADMIN = "super admin";
    const MANAGE_CATEGORIES = "manage categories";
    static $PERMISSIONS = [self::MANAGE_USERS,
        self::MANAGE_PERMISSIONS,
        self::MANAGE_SERVICES,
        self::MANAGE_CATEGORIES,
        self::SUPER_ADMIN
    ];
}