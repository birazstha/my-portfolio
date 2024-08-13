<div class="container mt-5">
    <div class="row text-center text-md-left">
        <div class="col-md-3">
            <img src="{{ !is_null(fileName('small_image')) ? asset('uploads/files/' . fileName('small_image')->files()->value('title')) : '' }}"
                alt="" class="img-thumbnail mb-4">
        </div>
        <div class="pl-md-4 col-md-9">
            <h6 class="title">{{ frontendConfig('name') }}</h6>
            <p class="subtitle">{{ frontendConfig('position') }}</p>
            <p>
                {{ frontendConfig('about') }}
            </p>
            <a href="{{ !is_null(fileName('resume')) ? asset('uploads/files/' . fileName('resume')->files()->value('title')) : '' }}"
                class="btn btn-primary rounded mt-3" download>DOWNLOAD CV</a>
        </div>
    </div>
</div>
