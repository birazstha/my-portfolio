@include('frontend.includes.layoutHeader')
@include('frontend.includes.nav')

<!-- Page Header -->
@include('frontend.includes.header')
<!-- End of Page Header -->

<!-- About section -->
<section id="about" class="section mt-3">
    @include('frontend.includes.about')
</section>

<!-- Service section -->
<section id="service" class="section">
    @include('frontend.includes.service')
</section>
<!-- End of Sectoin -->

<!-- Skills section -->
<section class="section">
    @include('frontend.includes.skills')
</section>
<!-- End of Skills sections -->

<!-- Portfolio section -->
<section id="portfolio" class="section">
    @include('frontend.includes.portfolio')
</section>
<!-- End of portfolio section -->

<!-- Testmonial Section -->
<section id="testmonial" class="section">
    @include('frontend.includes.testmonial')
</section>
<!-- End of testmonial section -->

<!-- Hire me section -->
<section class="bg-gray p-0 section">
    <div class="container">
        <div class="card bg-primary">
            <div class="card-body text-light">
                <div class="row align-items-center">
                    <div class="col-sm-9 text-center text-sm-left">
                        <h5 class="mt-3">Hire Me For Your Project</h5>
                        <p class="mb-3">Accusantium labore nostrum similique quisquam.</p>
                    </div>
                    <div class="col-sm-3 text-center text-sm-right">
                        <button class="btn btn-light rounded">Hire Me!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End od Hire me section. -->

<!-- Contact Section -->
<section id="contact" class="position-relative section">
   @include('frontend.includes.contacts')
</section>
<!-- End of Contact Section -->

@include('frontend.includes.footer')


