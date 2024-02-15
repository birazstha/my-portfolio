<?php

namespace App\Http\Controllers\System\Category;

use App\Http\Controllers\BaseController;
use App\Services\System\Category\CategoryService;

class CategoryController extends BaseController
{

    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        parent::__construct($categoryService);
    }

    public function storeValidationRequest()
    {
        return 'App\Http\Requests\System\CategoryRequest';
    }

    public function moduleName()
    {
        return 'categories';
    }

    public function folderName()
    {
        return 'category';
    }
}
