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

    public function getAllData($request)
    {
        $query = $this->query()->rank();
        if (isset($request->keyword)) {
            $query->where('title', 'ILIKE',  '%' . $request->keyword . '%');
        }
        return $query->orderBy('updated_at', 'DESC')->get();
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
