 <div class="container text-center">

     <div class="heading-wrapper">
         <div class="portfolio__title">
             <p>Portfolio</p>
             <div class="animate-bar"></div>
         </div>

     </div>


     <div class="gallery-wrapper">
         {{-- <div class="gallery-nav">
            <div class="gallery-filter">
                <span class="filter-item active" data-filter="all">All</span>
                @foreach ($projectTypes as $projectType)
                    <span class="filter-item" data-filter="{{ $projectType->slug }}">{{ $projectType->title }}</span>
                @endforeach
            </div>
        </div> --}}
         <div class="content-wrapper">
             @forelse ($projects as $project)
                 <div class="gallery-item" data-aos="fade-right" data-aos-duration="1200">
                     <div class="gallery-item-inner">
                         <div class="gallery-item-innerimage">
                             <img src="{{ asset('uploads/projects/' . $project->files()->value('title')) }}"
                                 alt="mobile">
                         </div>
                         <div class="content">
                             <div class="path"></div>
                             <h3>{{ $project->title ?? '' }}</h3>
                             <p>{{ $project->description ?? '' }}</p>
                         </div>

                     </div>
                 </div>
             @empty
                 No data found
             @endforelse



         </div>


     </div>


 </div>
