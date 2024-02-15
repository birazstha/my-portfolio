<?php

namespace App\Http\Controllers\System\Permission;

use App\Http\Controllers\BaseController;
use App\Services\System\permission\PermissionService;

class PermissionController extends BaseController
{
    protected $userService;

    public function __construct(PermissionService $userService)
    {
        parent::__construct($userService);
    }

    // public function storeValidationRequest()
    // {
    //     return 'App\Http\Requests\System\UserRequest';
    // }

    public function moduleName()
    {
        return 'permissions';
    }

    public function folderName()
    {
        return 'permission';
    }
}
