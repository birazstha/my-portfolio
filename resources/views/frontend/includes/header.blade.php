<header class="header" id="home">
    <div class="container">
        <div class="infos">
            <h6 class="subtitle">Hello,I'm</h6>
            <h6 class="title">{{ frontendConfig('name') }}</h6>
            <p>{{ frontendConfig('position') }}</p>

            <div class="buttons pt-3">
                {{-- <button class="btn btn-primary rounded">HIRE ME</button> --}}
                <a href="{{ asset('uploads/files/' . fileName('resume')->files()->value('title')) }}"
                    class="btn btn-dark rounded" download>DOWNLOAD CV</a>
            </div>

            <div class="socials mt-4">
                @include('frontend.home.links')
            </div>
        </div>
        <div class="img-holder">
            <img src="{{ asset('uploads/files/' . fileName('hero_image')->files()->value('title')) }}" alt="">
        </div>
    </div>

    <!-- Header-widget -->
    <div class="widget">
        <div class="widget-item">
            <h2>{{ frontendConfig('no_of_clients') }}</h2>
            <p>Happy Clients</p>
        </div>
        <div class="widget-item">
            <h2>{{ frontendConfig('no_of_projects') }}</h2>
            <p>Project Completed</p>
        </div>

    </div>
</header>
