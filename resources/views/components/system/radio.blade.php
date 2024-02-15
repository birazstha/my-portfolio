<div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">{{ $input['label'] }} <span class="text text-danger">
                {{ isset($input['required']) ? '*' : '' }}
            </span>
        </label>
        <div class="col-sm-10">
            @foreach ($input['options'] as $option)
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" value="{{ $option['value'] }}"
                        name="{{ $input['name'] }}" id="{{ $input['name'] }}"
                        {{ $option['value'] == $input['value'] ? 'checked' : '' }}>
                    <label class="form-check-label" for="{{ $input['name'] }}">
                        {{ $option['label'] }}
                    </label>
                </div>
            @endforeach
        </div>
    </div>
</div>
