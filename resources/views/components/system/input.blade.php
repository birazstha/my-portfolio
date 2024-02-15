<div>

    <div class="form-group row">
        <label for="inputName"
            class="{{ isset($input['isModal']) ? 'col-sm-4' : 'col-sm-2' }} col-form-label {{ $input['label-class'] ?? '' }}">{{ $input['label'] ?? '' }}
            <span class="text text-danger">
                {{ isset($input['required']) ? '*' : '' }}
            </span>
        </label>

        <div class="{{ isset($input['isModal']) ? 'col-sm-8' : 'col-sm-10' }}  ">
            <input type="{{ $input['type'] ?? 'text' }}" class="form-control {{ $input['class'] ?? '' }}"
                name="{{ $input['name'] }}" id="{{ $input['id'] ?? $input['name'] }}"
                {{ isset($input['required']) ? 'required' : '' }} value="{{ $input['value'] ?? '' }}"
                placeholder="{{ $input['label'] ?? '' }}" {{ isset($input['readonly']) ? 'readonly' : '' }}>

            @error($input['name'])
                <span class="text text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
