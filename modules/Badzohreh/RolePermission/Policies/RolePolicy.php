<?php
/**
 * Created by PhpStorm.
 * User: Mohammad
 * Date: 02/11/2020
 * Time: 08:40 AM
 */

namespace Badzohreh\RolePermission\Policies;


use Badzohreh\RolePermission\Models\Permission;
use Badzohreh\User\Model\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        if ($user->hasPermissionTo(Permission::MANAGE_PERMISSIONS)) return true;
        return null;
    }

    public function create(User $user)
    {
        if ($user->hasPermissionTo(Permission::MANAGE_PERMISSIONS)) return true;
        return null;
    }
    public function edit(User $user)
    {
        if ($user->hasPermissionTo(Permission::MANAGE_PERMISSIONS)) return true;
        return null;
    }
    public function delete(User $user)
    {
        if ($user->hasPermissionTo(Permission::MANAGE_PERMISSIONS)) return true;
        return null;
    }
}