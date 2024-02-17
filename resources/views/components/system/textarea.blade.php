<div>
    <div class="form-group row">
        <label for="inputName"
            class="col-sm-2 col-form-label">{{ isset($input['label']) ? $input['label'] : Str::ucfirst($input['name']) }}
            <span class="text text-danger">
                {{ isset($input['required']) ? '*' : '' }}
            </span>
        </label>
        <div class="col-sm-10">
            <textarea name="{{ $input['name'] }}" class="form-control {{ isset($input['class']) ? $input['class'] : '' }} "
                cols="80" rows="5"
                placeholder="{{ isset($input['label']) ? $input['label'] : Str::ucfirst($input['name']) }}"
                {{ isset($input['required']) ? 'required' : '' }}>{{ isset($input['value']) ? $input['value'] : '' }}</textarea>

            @error($input['name'])
                <span class="text text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
