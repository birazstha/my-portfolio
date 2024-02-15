<?php

namespace App\Http\Controllers\System\User;

use App\Http\Controllers\BaseController;
use App\Http\Requests\System\changePasswordRequest;
use App\Services\System\UserService;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        parent::__construct($userService);
    }

    public function storeValidationRequest()
    {
        return 'App\Http\Requests\System\UserRequest';
    }

    public function moduleName()
    {
        return 'users';
    }

    public function folderName()
    {
        return 'user';
    }

    public function changePassword(changePasswordRequest $request)
    {
        $this->service->changePassword($request);
        return redirect()->route($this->indexUrl() . '.index')->with(['success' => 'Password has been changed successfully']);
    }
}
