<div class="container text-center">
    <h6 class="subtitle">Testmonial</h6>
    <h6 class="section-title mb-4">What People Say About Me</h6>
    <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br>
        rerum commodi corrupti, temporibus non quam.</p>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            @foreach ($testimonials as $testimonial)
                <div class="carousel-item active">
                    <div class="card testmonial-card border">
                        <div class="card-body">
                            <img src="{{ asset('uploads/testimonials/' . $testimonial->files()->value('title')) }}"
                                alt="">
                            <p>{{ $testimonial->words }}</p>
                            <h1 class="title">{{ $testimonial->name }}</h1>
                            <h1 class="subtitle">{{ $testimonial->post }}</h1>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
