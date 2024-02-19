<?php

namespace App\Services\System\config;

use App\Http\Traits\FileTrait;
use App\Models\FrontendConfig;
use App\Services\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendConfigService extends Service
{
    use FileTrait;
    public function __construct(FrontendConfig $config)
    {
        parent::__construct($config);
    }

    public function store($request)
    {
        DB::transaction(function () use ($request) {


            // Handle resume file
            if ($request->hasFile('resume')) {
                $oldResume = $this->model->where('key', 'resume')->first();

                if ($oldResume) {
                    $this->updateImage($request->resume, 'uploads/files', $oldResume);
                } else {
                    $data  = $this->model->create([
                        'key' => 'resume',
                    ]);
                    $this->storeImage($request->resume, 'uploads/files', $data);
                }
            }

            // Handle hero image file
            if ($request->hasFile('hero_image')) {
                $oldHeroImage = $this->model->where('key', 'hero_image')->first();
                if ($oldHeroImage) {
                  
                    $this->updateImage($request->hero_image, 'uploads/files', $oldHeroImage);
                } else {
                    $data  = $this->model->create([
                        'key' => 'hero_image',
                    ]);
                    $this->storeImage($request->hero_image, 'uploads/files', $data);
                }
            }


            // Handle small image file
            if ($request->hasFile('small_image')) {
                $oldSmallImage = $this->model->where('key', 'small_image')->first();
                if ($oldSmallImage) {
                    $this->updateImage($request->small_image, 'uploads/files', $oldSmallImage);
                } else {
                    $data  = $this->model->create([
                        'key' => 'small_image',
                    ]);
                    $this->storeImage($request->small_image, 'uploads/files', $data);
                }
            }


            // Store or update other key-value pairs
            foreach ($request->except('_token', 'resume', 'hero_image', 'small_image') as $key => $value) {
                $this->model->updateOrCreate(
                    ['key' => $key],
                    ['value' => $value]
                );
            }
        });
    }

    // Helper function to store a file and return its path
    // private function storeFile($file)
    // {
    //     $filePath = time() . '.' . $file->extension();
    //     $file->move(public_path('uploads/files'), $filePath);
    //     return $filePath;
    // }




    public function indexPageData(Request $request)
    {
        $data = $this->model->pluck('value', 'key');
        return  [
            'item' => $data
        ];
    }
}
