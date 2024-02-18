<?php

namespace App\Http\Controllers\System\Config;

use App\Http\Controllers\BaseController;
use App\Services\System\config\FrontendConfigService;

class FrontendConfigController extends BaseController
{

    protected $categoryService;

    public function __construct(FrontendConfigService $configService)
    {
        parent::__construct($configService);
    }

    public function moduleName()
    {
        return 'frontend-configs';
    }

    public function folderName()
    {
        return 'frontend-config';
    }
}
