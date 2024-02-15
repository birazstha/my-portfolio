<?php

namespace App\Http\Controllers\System\Config;

use App\Http\Controllers\BaseController;
use App\Services\System\config\ConfigService;

class ConfigController extends BaseController
{

    protected $categoryService;

    public function __construct(ConfigService $configService)
    {
        parent::__construct($configService);
    }

    public function moduleName()
    {
        return 'configs';
    }

    public function folderName()
    {
        return 'config';
    }
}
