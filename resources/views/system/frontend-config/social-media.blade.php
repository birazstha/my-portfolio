{{-- Facebook --}}
<x-system.input :input="[
    'name' => 'facebook',
    'value' => $item['facebook'] ?? old('facebook'),
]" />

{{-- Instagram --}}
<x-system.input :input="[
    'name' => 'instagram',
    'value' => $item['instagram'] ?? old('instagram'),
]" />

{{-- Twitter --}}
<x-system.input :input="[
    'name' => 'twitter',
    'value' => $item['twitter'] ?? old('twitter'),
]" />

{{-- Github --}}
<x-system.input :input="[
    'name' => 'github',
    'value' => $item['github'] ?? old('github'),
]" />
