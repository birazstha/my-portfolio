@extends('system.layouts.form')



@section('form')
    <input type="hidden" name="id" value="{{ $item->id ?? '' }}">

    <x-system.input :input="[
        'name' => 'name',
        'label' => 'Name',
        'required' => true,
        'value' => $item->name ?? old('name'),
    ]" />

    <x-system.input :input="[
        'name' => 'username',
        'required' => true,
        'label' => 'Username',
        'value' => $item->username ?? old('username'),
    ]" />

    <x-system.select :input="[
        'name' => 'role_id',
        'required' => true,
        'label' => 'Select Role',
        'options' => $roles,
        'value' => $item->role_id ?? old('role_id'),
    ]" />

    <x-system.input :input="[
        'name' => 'email',
        'required' => true,
        'label' => 'Email',
        'value' => $item->email ?? old('email'),
    ]" />


    @if (!isset($item))
        <x-system.input :input="[
            'name' => 'password',
            'required' => true,
            'label' => 'Password',
            'type' => 'password',
            'value' => $item->password ?? old('password'),
        ]" />

        <x-system.input :input="[
            'name' => 'confirm_password',
            'required' => true,
            'label' => 'Confirm Password',
            'type' => 'password',
            'value' => $item->confirm_password ?? old('confirm_password'),
        ]" />
    @endif
@endsection
