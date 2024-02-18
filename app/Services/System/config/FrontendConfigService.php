<?php

namespace App\Services\System\config;

use App\Models\FrontendConfig;
use App\Services\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FrontendConfigService extends Service
{
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
                    // Delete old resume file
                    File::delete('uploads/files/' . $oldResume->value);
                    // Update key-value pair for resume
                    $oldResume->update(['value' => $this->storeFile($request->file('resume'))]);
                } else {
                    // If there is no old resume, store the new one
                    $this->model->create([
                        'key' => 'resume',
                        'value' => $this->storeFile($request->file('resume')),
                    ]);
                }
            }

            // Handle hero image file
            if ($request->hasFile('hero_image')) {
                $oldHeroImage = $this->model->where('key', 'hero_image')->first();
                if ($oldHeroImage) {
                    // Delete old hero image file
                    File::delete('uploads/files/' . $oldHeroImage->value);
                    // Update key-value pair for hero image
                    $oldHeroImage->update(['value' => $this->storeFile($request->file('hero_image'))]);
                } else {
                    // If there is no old hero image, store the new one
                    $this->model->create([
                        'key' => 'hero_image',
                        'value' => $this->storeFile($request->file('hero_image')),
                    ]);
                }
            }

            // Handle small image file
            if ($request->hasFile('small_image')) {
                $oldSmallImage = $this->model->where('key', 'small_image')->first();
                if ($oldSmallImage) {
                    // Delete old small image file
                    File::delete('uploads/files/' . $oldSmallImage->value);
                    // Update key-value pair for small image
                    $oldSmallImage->update(['value' => $this->storeFile($request->file('small_image'))]);
                } else {
                    // If there is no old small image, store the new one
                    $this->model->create([
                        'key' => 'small_image',
                        'value' => $this->storeFile($request->file('small_image')),
                    ]);
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
    private function storeFile($file)
    {
        $filePath = time() . '.' . $file->extension();
        $file->move(public_path('uploads/files'), $filePath);
        return $filePath;
    }




    public function indexPageData(Request $request)
    {
        $data = $this->model->pluck('value', 'key');
        return  [
            'item' => $data
        ];
    }
}
