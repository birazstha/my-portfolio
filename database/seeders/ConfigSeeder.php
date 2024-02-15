<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Config;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ConfigSeeder extends Seeder
{

    public function run()
    {

        Config::truncate();


        Config::create(
            [
                'label' => 'cms title',
                'type' => 'text',
                'value' => 'Base Cms',
            ],

        );

        $directory = public_path() . '/uploads/config';
        if (is_dir($directory) != true) {
            File::makeDirectory($directory, $mode = 0755, true);
        }
        File::copy(public_path('images/logo.png'), public_path('uploads/config/cms_logo.png'));
        Config::create([

            'label' => 'cms logo',
            'type' => 'file',
            'value' => 'cms_logo.png',

        ]);
    }
}
