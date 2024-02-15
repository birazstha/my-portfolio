<?php

namespace App\Services\System;

use App\Models\Role;
use App\Models\User;
use App\Services\Service;
use Illuminate\Support\Facades\Hash;

class UserService extends Service
{
    protected $role;
    public function __construct(User $user, Role $role)
    {
        parent::__construct($user);
        $this->role = $role;
    }

    public function getAllData($request)
    {
        $query = $this->query();
        if (isset($request->keyword)) {
            $query->where('name', 'ILIKE',  '%' . $request->keyword . '%');
        }
        return $query->with('role')->orderBy('created_at', 'DESC')->get();
    }

    public function createPageData($request)
    {
        return [
            'status' => $this->status(),
            'roles' => $this->role->pluck('name', 'id')
        ];
    }

    public function editPageData($id)
    {
        return [
            'item' => $this->getItemById($id),
            'roles' => $this->role->pluck('name', 'id'),
            'status' => $this->status()
        ];
    }

    public function store($request)
    {
        try {
            $data = $request->except('_token');
            $data['password'] = Hash::make($request->password);
            $user = $this->model->create($data);
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function changePassword($request)
    {
        $data =  $this->getItemById($request->id);
        $data->update([
            'password' => Hash::make($request->password)
        ]);
    }
}
