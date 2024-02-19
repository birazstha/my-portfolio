<?php

namespace App\Services\System\Project;

use App\Http\Traits\FileTrait;
use App\Models\Project;
use App\Services\Service;
use Illuminate\Support\Facades\DB;

class ProjectService extends Service
{
    use FileTrait;
    protected $project;
    public function __construct(Project $model)
    {
        parent::__construct($model);
    }

    public function store($request)
    {
        DB::transaction(function () use ($request) {
            $data = $request->except('_token');
            $project = $this->model->create($data);
            $this->storeImage($request->image, 'uploads/projects',  $project);
        });
    }

    public function update($request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $data = $request->except('_token');
            $update = $this->getItemById($id);
            if ($request->file('image')) {
                $this->updateImage($request->image, 'uploads/projects', $update);
            }
            $update->update($data);
        });
    }
}
