<?php

namespace App\Http\Controllers\System\Project;

use App\Http\Controllers\BaseController;
use App\Services\System\Project\ProjectService;

class ProjectController extends BaseController
{
    protected $service;

    public function __construct(ProjectService $service)
    {
        parent::__construct($service);
    }

    public function moduleName()
    {
        return 'projects';
    }

    public function folderName()
    {
        return 'project';
    }
}
