<div class="container text-center">
    <h6 class="subtitle">Portfolio</h6>
    <h6 class="section-title mb-4">Check My Wonderful Works</h6>
    <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br>
        rerum commodi corrupti, temporibus non quam.</p>

    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-4">
                        <div class="img-wrapper">
                            <img src="{{ asset('uploads/projects/' . $project->files()->value('title')) }}" alt="">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5>{{ $project->title }}</h5>
                                    <a href="javascript:void(0)" target="_blank"><i class="ti-zoom-in"></i></a>
                                    <a href="{{ $project->link }}" target="_blank"><i class="ti-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
