<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CheckRoleAndPermission
{

    protected $role;
    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function handle(Request $request, Closure $next)
    {
        $roleId = auth()->user()->role_id;
        if ($roleId != 1) {
            $role = $this->role->find($roleId);
            $currentRoute = Route::current()->getName();
            $access = false;
            foreach ($role->permissions as $permission) {
                if ($currentRoute == $permission->route) {
                    return $next($request);
                }
            }
            if ($access == false) {
                return response()->view('error.403');
            }
        }
        return $next($request);
    }
}
