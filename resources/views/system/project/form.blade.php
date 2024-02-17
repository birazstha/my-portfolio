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

    <x-system.radio :input="[
        'name' => 'status',
        'options' => $status,
        'value' => $item->status ?? true,
    ]" />
@endsection
