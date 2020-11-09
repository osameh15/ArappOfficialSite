<?php

namespace Badzohreh\RolePermission\Respositories;


use Badzohreh\RolePermission\Models\Permission;
use Badzohreh\RolePermission\Models\Role;

class RolePermissionRepo
{
    public function getRoles()
    {
        return Role::all();
    }

    public function getPermissions()
    {
        return Permission::all();
    }

    public function createRole($values)
    {
        $role = Role::create([
            "name" => $values->name,
        ]);
        $role->syncPermissions($values->permissions);
        return $role;
    }

    public function getRoleById($roleId)
    {
        return Role::query()->find($roleId);
    }

    public function deleteRole($roleId)
    {
        $this->getRoleById($roleId)->delete();
    }

    public function updateRole($roleId, $values)
    {
        $role = $this->getRoleById($roleId);
        $role->update([
            "name" => $values->name,
        ]);
        $role->syncPermissions($values->permissions);
        return $role;
    }
}