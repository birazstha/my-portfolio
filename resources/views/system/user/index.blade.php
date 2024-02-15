@extends('system.layouts.index')

@section('headings')
    <th>S.N</th>
    <th>Name</th>
    <th>Role</th>
    <th>Action</th>
@endsection

@section('data')
    @foreach ($items as $key => $item)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $item->name }}</td>
            <td>

                @if ($item->role->slug === 'admin')
                    <p class="badge badge-success">{{ Str::ucfirst($item->role->name) }}</p>
                @else
                    <p class="badge badge-info">{{ Str::ucfirst($item->role->name) }}</p>
                @endif
            </td>
            <td>
                @include('system.partials.editButton')

                @if ($item->role->slug != 'admin')
                    @include('system.partials.deleteButton')
                @endif


                <x-system.modal :input="[
                    'title' => 'Reset Password of ' . $item->name,
                    'btn-title' => 'Reset Password',
                    'btnColor' => 'primary',
                    'route' => 'changePassword',
                    'id' => 'passwordReset' . $item->id,
                ]">
                    <x-slot name="body">
                        <input type="hidden" value="{{ $item->id }}" name="id">
                        {{-- Password --}}
                        <x-system.input :input="[
                            'name' => 'password',
                            'label' => 'Password',
                            'type' => 'password',
                            'isModal' => true,
                            'value' => old('password'),
                        ]" />

                        {{-- Confirm Password --}}
                        <x-system.input :input="[
                            'name' => 'confirm_password',
                            'label' => 'Confirm Password',
                            'type' => 'password',
                            'isModal' => true,
                            'value' => old('confirm_password'),
                        ]" />



                    </x-slot>
                </x-system.modal>
            </td>
        </tr>
    @endforeach
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
        let error = `{{ $errors->first('password') || $errors->first('confirm_password') }}`
        let oldId = `{{ old('id') }}`
        if (error !== "") {
            $('#passwordReset' + oldId).modal('show');
        }
    </script>
@endsection
