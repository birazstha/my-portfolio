{{-- Resume --}}
<x-system.file :input="[
    'name' => 'resume',
    'fileTypes' => 'application/pdf',
    'value' => fileName('resume') ?? old('resume'),
    'path' => 'uploads/files',
]" />


{{-- Hero Image --}}
<x-system.file :input="[
    'name' => 'hero_image',
    'label' => 'Hero Image',
    'fileTypes' => 'image/jpg,image/jpeg,image/png',
    'value' => fileName('hero_image') ?? old('hero_image'),
    'path' => 'uploads/files',
    'uploadClass' => 'hero-upload',
    'previewClass' => 'hero-preview',
]" />

{{-- Small Image --}}
<x-system.file :input="[
    'name' => 'small_image',
    'label' => 'Small Image',
    'fileTypes' => 'image/jpg,image/jpeg,image/png',
    'value' => fileName('small_image') ?? old('small_image'),
    'path' => 'uploads/files',
    'uploadClass' => 'small-upload',
    'previewClass' => 'small-preview',
]" />
