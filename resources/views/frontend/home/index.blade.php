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
{{-- <section class="section">
    @include('frontend.includes.skills')
</section> --}}
<!-- End of Skills sections -->

<!-- Portfolio section -->
<section id="portfolio" class="section">
    @include('frontend.includes.portfolio')
</section>
<!-- End of portfolio section -->

<!-- Testmonial Section -->
<section id="testmonial" class="section">
    @include('frontend.includes.testimonial')
</section>
<!-- End of testmonial section -->

<!-- Contact Section -->
<section id="contact" class="position-relative section">
    @include('frontend.includes.contacts')
</section>
<!-- End of Contact Section -->

@include('frontend.includes.footer')
