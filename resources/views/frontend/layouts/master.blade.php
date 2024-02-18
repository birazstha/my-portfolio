<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Steller landing page.">
    <meta name="author" content="Devcrud">
    <title>{{ frontendConfig('name') }} - Portfolio</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/themify-icons/css/themify-icons.css') }}">
    <!-- Bootstrap + Steller main styles -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/steller.css') }}">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" data-spy="affix" data-offset-top="0">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('frontend/assets/imgs/logo.svg') }}"
                    alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testmonial">Testmonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="- btn btn-primary rounded ml-4" href="components.html">Copmonents</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of page navibation -->

    <!-- Page Header -->
    <header class="header" id="home">
        <div class="container">
            <div class="infos">
                <h6 class="subtitle">Hello,I'm</h6>
                <h6 class="title">{{ frontendConfig('name') }}</h6>
                <p>{{ frontendConfig('position') }}</p>

                <div class="buttons pt-3">
                    {{-- <button class="btn btn-primary rounded">HIRE ME</button> --}}
                    <a href="{{ asset('uploads/files/' . frontendConfig('resume')) }}" class="btn btn-dark rounded"
                        download>DOWNLOAD CV</a>
                </div>

                <div class="socials mt-4">
                    @include('frontend.home.links')
                </div>
            </div>
            <div class="img-holder">
                <img src="{{ asset('uploads/files/' . frontendConfig('hero_image')) }}" alt="">
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
    <!-- End of Page Header -->

    <!-- About section -->
    <section id="about" class="section mt-3">
        <div class="container mt-5">
            <div class="row text-center text-md-left">
                <div class="col-md-3">
                    <img src="{{ asset('uploads/files/' . frontendConfig('small_image')) }}" alt=""
                        class="img-thumbnail mb-4">
                </div>
                <div class="pl-md-4 col-md-9">
                    <h6 class="title">James Smith</h6>
                    <p class="subtitle">UI/UX Designer</p>
                    <p>
                        {{ frontendConfig('about') }}
                    </p>
                    <a href="{{ asset('uploads/files/' . frontendConfig('resume')) }}"
                        class="btn btn-primary rounded mt-3" download>DOWNLOAD CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Service section -->
    <section id="service" class="section">
        <div class="container text-center">
            <h6 class="subtitle">Service</h6>
            <h6 class="section-title mb-4">What I Do</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br>
                rerum commodi corrupti, temporibus non quam.</p>

            <div class="row">
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-crown"></i>
                            <h5>UI/UX Design</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-desktop"></i>
                            <h5>Web Design</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-mobile"></i>
                            <h5>App Design</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-bar-chart"></i>
                            <h5>SEO</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Sectoin -->

    <!-- Skills section -->
    <section class="section">
        <div class="container text-center">
            <h6 class="subtitle">Skills</h6>
            <h6 class="section-title mb-4">Why Choose me</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br>
                rerum commodi corrupti, temporibus non quam.</p>

            <div class="row text-left">
                <div class="col-sm-6">
                    <h6 class="mb-3">Photoshop</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>89%</span></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h6 class="mb-3">Web Design</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 83%;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>83%</span></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h6 class="mb-3">App Design</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 95%;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>95%</span></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h6 class="mb-3">SEO</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Skills sections -->

    <!-- Portfolio section -->
    <section id="portfolio" class="section">
        <div class="container text-center">
            <h6 class="subtitle">Portfolio</h6>
            <h6 class="section-title mb-4">Check My Wonderful Works</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br>
                rerum commodi corrupti, temporibus non quam.</p>

            <div class="row">
                <div class="col-sm-4">
                    <div class="img-wrapper">
                        <img src="{{ asset('frontend/assets/imgs/folio-1.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="img-wrapper">
                        <img src="{{ asset('frontend/assets/imgs/folio-2.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="img-wrapper">
                        <img src="{{ asset('frontend/assets/imgs/folio-3.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="img-wrapper">
                        <img src="{{ asset('frontend/assets/imgs/folio-4.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="img-wrapper">
                        <img src="{{ asset('frontend/assets/imgs/folio-5.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="img-wrapper">
                        <img src="{{ asset('frontend/assets/imgs/folio-6.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End of portfolio section -->

    <!-- Testmonial Section -->
    <section id="testmonial" class="section">
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
                    <div class="carousel-item active">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="{{ asset('frontend/assets/imgs/avatar-1.jpg') }}" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates
                                    in enim vel amet?</p>
                                <h1 class="title">Emma Re</h1>
                                <h1 class="subtitle">Graphic Designer</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="{{ asset('frontend/assets/imgs/avatar-2.jpg') }}" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates
                                    in enim vel amet?</p>
                                <h1 class="title">James Bert</h1>
                                <h1 class="subtitle">Web Designer</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="{{ asset('frontend/assets/imgs/avatar-3.jpg') }}" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates
                                    in enim vel amet?</p>
                                <h1 class="title">Michael Abra</h1>
                                <h1 class="subtitle">Web Developer</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <div class="container text-center">
            <h6 class="subtitle">Contact</h6>
            <h6 class="section-title mb-4">Get In Touch With Me</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br>
                rerum commodi corrupti, temporibus non quam.</p>

            <div class="contact text-left">
                <div class="form">
                    <h6 class="subtitle">Available 24/7</h6>
                    <h6 class="section-title mb-4">Get In Touch</h6>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <textarea name="contact-message" id="" cols="30" rows="5" class="form-control"
                                placeholder="Message"></textarea>
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
    </section>
    <!-- End of Contact Section -->

    <!-- Page Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <p>Copyright
                        {{ now()->year }}
                        &copy; <a href="" target="_blank">{{ frontendConfig('name') }}</a>
                    </p>
                </div>
                <div class="col-sm-6">
                    <div class="socials">
                        @include('frontend.home.links')
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End of page footer -->

    <!-- core  -->
    <script src="{{ asset('frontend/assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/bootstrap/bootstrap.bundle.js') }}"></script>
    <!-- bootstrap 3 affix -->
    <script src="{{ asset('frontend/assets/vendors/bootstrap/bootstrap.affix.js') }}"></script>

    <!-- steller js -->
    <script src="{{ asset('frontend/assets/js/steller.js') }}"></script>

</body>

</html>
