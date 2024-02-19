@extends('system.layouts.form')

@section('form')
    <x-system.input :input="[
        'name' => 'title',
        'required' => true,
        'value' => $item->title ?? old('title'),
    ]" />

    <x-system.textarea :input="[
        'name' => 'description',
        'value' => $item->description ?? old('description'),
    ]" />

    <x-system.input :input="[
        'name' => 'link',
        'required' => true,
        'value' => $item->link ?? old('link'),
    ]" />

    <x-system.input :input="[
        'type' => 'number',
        'name' => 'rank',
        'required' => true,
        'value' => $item->rank ?? old('rank'),
    ]" />

    {{-- Image --}}
    <x-system.file :input="[
        'name' => 'image',
        'required' => true,
        'fileTypes' => 'image/jpeg, image/jpg,image/png',
        'value' => $item ?? old('image'),
        'path' => 'uploads/projects',
    ]" />

    <x-system.radio :input="[
        'name' => 'status',
        'options' => $status,
        'value' => $item->status ?? true,
    ]" />
@endsection
