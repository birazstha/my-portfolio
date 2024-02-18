@extends('system.layouts.config')

@section('create')
@endsection

@section('data')
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
                    role="tab" aria-controls="nav-home" aria-selected="true">General</button>
                <button class="nav-link" id="nav-social-media-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                    type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Social Media</button>
                <button class="nav-link" id="nav-file-tab" data-bs-toggle="tab" data-bs-target="#nav-file" type="button"
                    role="tab" aria-controls="nav-file" aria-selected="false">Files</button>

            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                tabindex="0">
                <div class="card">
                    <div class="card-body">
                        @include('system.frontend-config.general')
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-social-media-tab"
                tabindex="0">
                <div class="card">
                    <div class="card-body">
                        @include('system.frontend-config.social-media')
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="nav-file" role="tabpanel" aria-labelledby="nav-file-tab" tabindex="0">
                <div class="card">
                    <div class="card-body">
                        {{-- Resume --}}
                        <x-system.file :input="[
                            'name' => 'resume',
                            'fileTypes' => 'application/pdf',
                            'value' => $item ?? old('image'),
                            'path' => 'uploads/testimonials',
                        ]" />

                        {{-- Hero Image --}}
                        <x-system.file :input="[
                            'name' => 'hero_image',
                            'label' => 'Hero Image',
                            'fileTypes' => 'image/jpeg, image/jpg,image/png',
                            'value' => $item ?? old('hero_image'),
                            'path' => 'uploads/testimonials',
                        ]" />

                        {{-- Small Image --}}
                        <x-system.file :input="[
                            'name' => 'small_image',
                            'label' => 'Small Image',
                            'fileTypes' => 'image/jpeg, image/jpg,image/png',
                            'value' => $item ?? old('image'),
                            'path' => 'uploads/testimonials',
                        ]" />
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>

        </div>
    </form>
@endsection
