@extends('system.layouts.form')


@section('form')
    <x-system.input :input="[
        'name' => 'title',
        'label' => 'Name',
        'value' => $item->title ?? old('title'),
    ]" />

    <x-system.radio :input="[
        'name' => 'status',
        'label' => 'Status',
        'options' => $status,
        'value' => $item->status ?? true,
    ]" />
@endsection
