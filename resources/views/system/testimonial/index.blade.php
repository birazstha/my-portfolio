@extends('system.layouts.index')


@section('search')
    <x-system.form :action="$indexUrl">
        <x-slot name="inputs">
            <x-system.search :input="[
                'name' => 'keyword',
                'value' => Request::input('keyword') ?? old('keyword'),
                'placeholder' => 'Enter Keyword',
            ]" />
        </x-slot>
    </x-system.form>
@endsection

@section('headings')
    <th> S.N</th>
    <th> Words</th>
    <th> Name</th>
    <th> Post</th>
    <th> Company</th>
    <th> Rank</th>
    <th> Image</th>
    <th> Status</th>
    @if (checkPermission($indexUrl . '/*' . '/edit', 'PUT') || checkPermission($indexUrl . '/*', 'DELETE'))
        <th> Action</th>
    @endif
@endsection

@section('data')
    @foreach ($items as $key => $item)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td style="max-width: 400px; overflow: hidden; text-overflow: ellipsis;">
                {{ $item->words ?? 'N/A' }}
            </td>
            <td>{!! $item->name ?? 'N/A' !!}</td>
            <td>{{ $item->post ?? 'N/A' }}</td>
            <td>{{ $item->company ?? 'N/A' }}</td>
            <td>{{ $item->rank ?? 'N/A' }}</td>
            <td>
                <img id="previewImage" src="{{ asset('uploads/testimonials/' . $item->files()->value('title')) }}"
                    width="150px" class="img-thumbnail" alt="...">
            </td>
            <td>{!! statusBadge($item, $indexUrl) !!}</td>
            @if (checkPermission($indexUrl . '/*' . '/edit', 'PUT') || checkPermission($indexUrl . '/*', 'DELETE'))
                <td>
                    @include('system.partials.editButton')
                    @include('system.partials.deleteButton')
                </td>
            @endif
        </tr>
    @endforeach
@endsection
