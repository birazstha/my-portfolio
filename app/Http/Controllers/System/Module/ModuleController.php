<?php

namespace App\Http\Controllers\System\Module;

use App\Http\Controllers\BaseController;
use App\Services\System\Module\ModuleService;

class ModuleController extends BaseController
{
    public function __construct(ModuleService $service)
    {
        parent::__construct($service);
    }

    public function moduleName()
    {
        return 'modules';
    }

    public function folderName()
    {
        return 'module';
    }
}
