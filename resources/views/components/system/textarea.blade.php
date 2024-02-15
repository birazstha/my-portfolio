<div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">{{ $input['label'] }} <span class="text text-danger">
                {{ isset($input['required']) ? '*' : '' }}
            </span>
        </label>
        <div class="col-sm-10">
            <textarea name="{{ $input['name'] }}" class="form-control" id="" cols="30" rows="4"
                placeholder="{{ $input['label'] }}" {{ isset($input['required']) ? 'required' : '' }}></textarea>

            @error($input['name'])
                <span class="text text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
