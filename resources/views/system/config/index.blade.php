@extends('system.layouts.index')



@section('create')
@endsection

@section('headings')
    <th>S.N</th>
    <th>Label</th>
    <th>Value</th>
    <th>Action</th>
@endsection

@section('data')
    @foreach ($items as $key => $item)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $item->label }}</td>
            <td>
                @if ($item->label === 'cms logo')
                    <img src="{{ asset('uploads/config/' . getCmsConfig('cms logo')) }}" width="60px" class="img-thumbnail"
                        alt="...">
                @else
                    {{ $item->value }}
                @endif
            </td>
            <td>
                @include('system.partials.editButton')
            </td>
        </tr>
    @endforeach
@endsection
