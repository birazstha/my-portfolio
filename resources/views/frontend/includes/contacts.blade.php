<div class="container text-center">
    <h6 class="subtitle">Contact</h6>
    <h6 class="section-title mb-4">Get In Touch With Me</h6>
    <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br>
        rerum commodi corrupti, temporibus non quam.</p>

    <div class="contact text-left">
        <div class="form">
            <h6 class="subtitle">Available 24/7</h6>
            <h6 class="section-title mb-4">Get In Touch</h6>
            <form method="post" action="{{ route('frontend.enquiries.store') }}">
                @csrf
                {{-- Name --}}
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="fname"
                        value="{{ old('name') }}" aria-describedby="emailHelp" placeholder="Name" required>
                    @error('name')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                        value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Email" required>
                    @error('email')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Contact --}}
                <div class="form-group">
                    <input type="number" class="form-control" id="exampleInputEmail1" name="contact"
                        value="{{ old('contact') }}" aria-describedby="emailHelp" placeholder="Contact" required>
                    @error('contact')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Message --}}
                <div class="form-group">
                    <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Message">
                        {{ old('message') }}
                    </textarea>
                    @error('message')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block rounded w-lg">Send Message</button>
            </form>
        </div>
        <div class="contact-infos">
            <div class="item">
                <i class="ti-location-pin"></i>
                <div class="">
                    <h5>Location</h5>
                    <p> {{ frontendConfig('location') }}</p>
                </div>
            </div>
            <div class="item">
                <i class="ti-mobile"></i>
                <div>
                    <h5>Phone Number</h5>
                    <p>{{ frontendConfig('contact') }}</p>
                </div>
            </div>
            <div class="item">
                <i class="ti-email"></i>
                <div class="mb-0">
                    <h5>Email Address</h5>
                    <p>{{ frontendConfig('location') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="map">
    <iframe src="https://snazzymaps.com/embed/61257"></iframe>
</div>
