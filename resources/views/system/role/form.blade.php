@extends('system.layouts.form')


@section('form')
    <x-system.input :input="[
        'name' => 'name',
        'required' => true,
        'label' => 'Name',
        'value' => $item->name ?? old('name'),
    ]" />


    <div class="form-group row">
        <label for="" class="col-sm-2">Permissions</label>
        <div class="col-sm-10">
            @foreach ($modules as $module)
                <h4>{{ $module->name }}</h4>
                @foreach ($module->permissions as $permission)
                    <div class="form-check">
                        <input class="form-check-input" name="permission_id[]" type="checkbox" value="{{ $permission->id }}"
                            id="{defaultCheck1}"
                            {{ isset($permissions) && in_array($permission->id, $permissions) ? 'checked' : '' }}>
                        <label class="form-check-label" for="defaultCheck1">
                            {{ $permission->name }}
                        </label>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
