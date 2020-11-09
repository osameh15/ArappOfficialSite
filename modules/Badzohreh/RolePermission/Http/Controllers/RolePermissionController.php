<?php

namespace Badzohreh\RolePermission\Http\Controllers;

use App\Http\Controllers\Controller;
use Badzohreh\Common\Responses\AjaxResponse;
use Badzohreh\RolePermission\Http\Requests\RoleRequest;
use Badzohreh\RolePermission\Models\Role;
use Badzohreh\RolePermission\Respositories\RolePermissionRepo;

class RolePermissionController extends Controller
{
    public $rolePermissionRepo;

    public function __construct(RolePermissionRepo $rolePermissionRepo)
    {

        $this->rolePermissionRepo = $rolePermissionRepo;
    }

    public function index()
    {
        $this->authorize("index",Role::class);
        $roles = $this->rolePermissionRepo->getRoles();
        $permissions = $this->rolePermissionRepo->getPermissions();
        return view("Permission::index", compact('roles', "permissions"));
    }

    public function createRole(RoleRequest $request)
    {
        $this->authorize("create",Role::class);
        $role = $this->rolePermissionRepo->createRole($request);
        return back();
    }

    public function edit($roleId)
    {
        $this->authorize("edit",Role::class);
        $role = $this->rolePermissionRepo->getRoleById($roleId);
        $permissions = $this->rolePermissionRepo->getPermissions();
        return view("Permission::edit", compact('role', 'permissions'));
    }

    public function update($roleId, RoleRequest $request)
    {
        $this->authorize("edit",Role::class);
        $this->rolePermissionRepo->updateRole($roleId, $request);
        newFeedBacks();
        return redirect()->route("permission.index");
    }


    public function delete($roleId)
    {
        $this->authorize("delete",Role::class);
        $this->rolePermissionRepo->deleteRole($roleId);
        return AjaxResponse::Success();
    }
}