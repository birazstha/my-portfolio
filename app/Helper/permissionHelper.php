<?php

use App\Models\Role;

function checkPermission($route)
{
    $permissionArray = [];
    $roleId = auth()->user()->role_id;
    $role = Role::find($roleId);
    foreach ($role->permissions as $permission) {
        array_push($permissionArray, $permission->route);
    }

    if ($roleId != 1) {
        if (in_array($route, $permissionArray)) {
            return true;
        }
        return false;
    }
    return true;
}

function permissions()
{
    return [
        'index' => 'List',
        'create' => 'Create',
        'show' => 'View',
        'edit' => 'Edit',
        'destroy' => 'Delete',
    ];
}
