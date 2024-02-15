<select name="{{ $input['name'] }}" class="form-control mr-2" id="{{ $input['id'] ?? $input['name'] }}"
    {{ isset($input['required']) ? 'required' : '' }} class="form-control">
    @if (!isset($input['hidePlacholder']))
        <option value="">
            {{ isset($input['placeholder']) ? $input['placeholder'] : '--Select ' . $input['label'] . '--' }}
        </option>
    @endif

    @foreach ($input['options'] as $key => $value)
        <option value="{{ $key }}" {{ $key === (int) $input['value'] ? 'selected' : '' }}>
            {{ $value }}</option>
    @endforeach
</select>
@error($input['name'])
    <span class="text text-danger">{{ $message }}</span>
@enderror
