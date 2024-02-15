@extends('system.layouts.form')

@section('form')
    @if ($item->label === 'cms logo')
        <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Value <span class="text text-danger">
                </span>
            </label>
            <div class="col-sm-10">
                <input type="file" class="form-control mb-2" name="value" onchange="previewImage(event)" id="imageInput"
                    accept="image/jpg,image/jpeg,image/png">
                <img id="preview" src="{{ asset('uploads/config/' . getCmsConfig('cms logo')) }}" width="200px"
                    class="img-thumbnail" alt="...">
            </div>
        </div>
    @else
        <x-system.input :input="[
            'name' => 'value',
            'label' => 'Value',
            'value' => $item->value ?? old('value'),
        ]" />
    @endif
@endsection

@section('js')
    <script>
        function previewImage(event) {
            var input = event.target;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var previewImg = document.getElementById('preview');
                    previewImg.setAttribute('src', e.target.result);
                    previewImg.style.display = 'block';
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
