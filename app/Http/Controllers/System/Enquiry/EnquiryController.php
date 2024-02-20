<?php

namespace App\Http\Controllers\System\Enquiry;

use App\Http\Controllers\BaseController;
use App\Services\System\Enquiry\EnquiryService;

class EnquiryController extends BaseController
{
    protected $service;

    public function __construct(EnquiryService $service)
    {
        $this->service = $service;
    }


    public function moduleName()
    {
        return 'enquiries';
    }

    public function folderName()
    {
        return 'enquiry';
    }
}
