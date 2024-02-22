<?php

namespace App\Http\Controllers\System\Dashboard;

use App\Http\Controllers\BaseController;
use App\Services\System\Dashboard\DashboardService;

class DashboardController extends BaseController
{
    protected $dashboardService;

    public function __construct(DashboardService $dashboardService)
    {
        $this->service = $dashboardService;
    }

    public function moduleName()
    {
        return 'dashboards';
    }

    public function folderName()
    {
        return 'dashboard';
    }
}
