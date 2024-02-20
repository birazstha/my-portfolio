<?php

namespace App\Services\System\Enquiry;


use App\Models\Enquiry;
use App\Services\Service;

class EnquiryService extends Service
{
    public function __construct(Enquiry $model)
    {
        parent::__construct($model);
    }
}
