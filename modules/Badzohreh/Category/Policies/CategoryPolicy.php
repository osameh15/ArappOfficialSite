<?php

namespace Badzohreh\Category\Policies;

use Badzohreh\RolePermission\Models\Permission;
use Badzohreh\User\Model\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        if ($user->hasPermissionTo(Permission::MANAGE_CATEGORIES)) return true;
        return null;
    }

    public function create(User $user)
    {
        if ($user->hasPermissionTo(Permission::MANAGE_CATEGORIES)) return true;
        return null;
    }

    public function delete(User $user)
    {
        if ($user->hasPermissionTo(Permission::MANAGE_CATEGORIES)) return true;
        return null;
    }

    public function edit(User $user)
    {
        if ($user->hasPermissionTo(Permission::MANAGE_CATEGORIES)) return true;
        return null;
    }

}
