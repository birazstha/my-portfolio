<?php

namespace App\Services\System\Project;

use App\Models\Project;
use App\Services\Service;

class ProjectService extends Service
{
    protected $project;
    public function __construct(Project $model)
    {
        parent::__construct($model);
    }
}
