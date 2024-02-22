<?php

namespace App\Services\System\Dashboard;

use App\Models\Visitor;
use App\Services\Service;
use Illuminate\Http\Request;

class DashboardService extends Service
{
    protected $applicant, $vacancy, $enquiry, $visitor;
    public function __construct(
        Visitor $visitor
    ) {
        parent::__construct($visitor);
        $this->visitor = $visitor;
    }

    public function indexPageData(Request $request)
    {
        return  [
            'visitors' => $this->visitor->count(),
        ];
    }
}
