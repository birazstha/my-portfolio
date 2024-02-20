<div class="container text-center">
    <h6 class="subtitle">Testmonial</h6>
    <h6 class="section-title mb-4">What People Say About Me</h6>
    <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br>
        rerum commodi corrupti, temporibus non quam.</p>


    <section id="testimonial">

        <div class="testimonial-container">
            <div class="owl-carousel">


                @foreach ($testimonials as $testimonial)
                    <div class="testimonial-box">
                        <div class="box-image">
                            <div class="testimonial-image">
                                <img src="{{ asset('uploads/testimonials/' . $testimonial->files()->value('title')) }}"
                                    alt="Profile Image">
                            </div>
                        </div>
                        <div class="client-detail">
                            <span class="testimonial-author">{{ $testimonial->name }}</span>
                            <span
                                class="testimonial-author">{{ $testimonial->post . ', ' . $testimonial->company }}</span>

                            <div class="testimonial-content">
                                <p class="review">"{{ $testimonial->words }}"
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach




            </div>
        </div>
    </section>
</div>
