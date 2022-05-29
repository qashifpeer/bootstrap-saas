<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free/css/all.min.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;0,900;1,500&display=swap"
        rel="stylesheet">

    <title>Hello, world!</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
               FOA
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Downloads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>

                <button type="button" class="rounded-pill btn-rounded">+91-990709908
                    <span>
                        <i class="fas fa-phone-alt"></i>
                    </span>
                </button>

            </div>
        </div>
    </nav>

    {{-- start the intro --}}

    <section id="home" class="intro-section">
        <div class="container">
            <div class="row align-items-center text-white">
                {{-- start content for intro --}}
                <div class="col-md-6 intros">
                    <h1 class="display-2">
                        <span class="display-2--intro">Hey!, I'm Patrick</span>
                        <span class="display-2--description lh-base">this isamulti-purpose responsive layout
                            created with bootstrap v5.(here your can
                            place your description text) </span>
                    </h1>
                    <button type="button" class="rounded-pill btn-rounded">Get In touch
                        <span>
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </button>
                </div>
                {{-- start content for video --}}
                <div class="col-md-6 intros text-end">
                    <div class="video-box">
                        <img src="{{ asset('images/arts/intro-section-illustration.png') }}" class="img-fluid"
                            alt="">
                        <a href="" class="glightbox position-absolute top-50 start-50 translate-middle">
                            <span>
                                <i class="fas fa-play-circle"></i>
                            </span>
                            <span class="border-animation border-animation--border-1"></span>
                            <span class="border-animation border-animation--border-2"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,32L48,64C96,96,192,160,288,181.3C384,203,480,181,576,154.7C672,128,768,96,864,90.7C960,85,1056,107,1152,101.3C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>

    <!-- COMPANIES SECTION STARTS -->

    <section id="companies" class="companies">
        <div class="container">
            <div class="row text-center">
                <h4 class="fw-bold mb-3 lead">Trusted by companies like</h4>
                <div class="heading-line mb-5"></div>
            </div>
        </div>
        {{-- start the companies content --}}
        {{-- .container>.row>(.col-md-4>.companies__logo-box>img[src="{{ asset('images/companies/company-$.png') }}"][alt="comapny $ logo"][title="company $ logo"].img-fluid)*6 --}}

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-2">
                    <div class="companies__logo-box shadow-sm ">
                        <img src="{{ asset('images/companies/campany-1.png') }}" alt="comapny 1 logo"
                            title="company 1 logo" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="companies__logo-box shadow-sm ">
                        <img src="{{ asset('images/companies/campany-2.png') }}" alt="comapny 2 logo"
                            title="company 2 logo" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="companies__logo-box shadow-sm ">
                        <img src="{{ asset('images/companies/campany-3.png') }}" alt="comapny 3 logo"
                            title="company 3 logo" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="companies__logo-box shadow-sm ">
                        <img src="{{ asset('images/companies/campany-4.png') }}" alt="comapny 4 logo"
                            title="company 4 logo" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="companies__logo-box shadow-sm ">
                        <img src="{{ asset('images/companies/campany-5.png') }}" alt="comapny 5 logo"
                            title="company 5 logo" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="companies__logo-box shadow-sm ">
                        <img src="{{ asset('images/companies/campany-6.png') }}" alt="comapny 6 logo"
                            title="company 6 logo" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- SERVICE SECTION STARTS -->
    <section id="services" class="services">
        <div class="container">
            <div class="row text-center">
                <h1 class="display-3 fw-bold">Our Services </h1>
                <div class="heading-line mb-1"></div>
            </div>

            {{-- start discription of content --}}

            <div class="row pt-2 pb-2 mt-0 mb-3">
                <div class="col-md-6 border-right">
                    <div class="bg-white p-3">
                        <h2 class="fw-bold text-capitalize text-center">
                            Our Services Range From Initial
                            Design To Deployment Anywhere
                            Anytime
                        </h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-white p-4 text-start">
                        <p class="fw-light">
                            Lokem ipsum dolor sit amet consectetur architecto magni,dicta maxime
                            laborum temporibus dolorem esse doloremque illo quas nisi enim
                            molestias.Tempore ducimus molestiae in dolore enim,
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- start content for services --}}
        {{-- .container>(.row>(.col-lg-6.col-md-6.col-sm-12.col-xs-12.services.mt-4>.services__content)*2)*3 --}}

        <div class="container">
            {{-- start the marketing content --}}
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                    <div class="services__content">
                        <div class="icon d-block fas fa-paper-plane"></div>
                        <h3 class="display-3--title mt-1">Marketting</h3>
                        <p class="lh-lg">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Fugiat, ab totam? Nemo iure ipsum quibusdam optio ea dolorum nesciunt omnis dolor nam
                            laboriosam,
                            suscipit asperiores nisi dolores modi.
                        </p>
                        <button type="button" class="rounded-pill btn-rounded border-primary">learn More
                            <span>
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
                    <div class="services__pic">
                        <img src="{{ asset('images/services/service-1.png') }}" alt="web illustration"
                            class="img-fluid rounded-circle">

                    </div>
                </div>
            </div>
            {{-- start the web dev content --}}
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
                    <div class="services__pic">
                        <img src="{{ asset('images/services/service-3.png') }}" alt="web illustration"
                            class="img-fluid rounded-circle">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                    <div class="services__content">
                        <div class="icon d-block fas fa-code"></div>
                        <h3 class="display-3--title mt-1">Web Development</h3>
                        <p class="lh-lg">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Fugiat, ab totam? Nemo iure ipsum quibusdam optio ea dolorum nesciunt omnis dolor nam
                            laboriosam,
                            suscipit asperiores nisi dolores modi.
                        </p>
                        <button type="button" class="rounded-pill btn-rounded border-primary">learn More
                            <span>
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            {{-- strat the wen hosting content --}}
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                    <div class="services__content">
                        <div class="icon d-block fas fa-cloud-upload-alt"></div>
                        <h3 class="display-3--title mt-1">Cloud Hosting</h3>
                        <p class="lh-lg">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Fugiat, ab totam? Nemo iure ipsum quibusdam optio ea dolorum nesciunt omnis dolor nam
                            laboriosam,
                            suscipit asperiores nisi dolores modi.
                        </p>
                        <button type="button" class="rounded-pill btn-rounded border-primary">learn More
                            <span>
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
                    <div class="services__pic">
                        <img src="{{ asset('images/services/service-2.png') }}" alt="web illustration"
                            class="img-fluid rounded-circle">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL SECTION STARTS -->
    <section id="testimonials" class="testimonials">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,128L48,117.3C96,107,192,85,288,106.7C384,128,480,192,576,224C672,256,768,256,864,229.3C960,203,1056,149,1152,117.3C1248,85,1344,75,1392,69.3L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
        <div class="container">
            <div class="row text-center text-white">
                <h1 class="display-3 fw-bold">
                    Testimonials
                </h1>
                <hr style="width: 100px; height: 3px;" class="mx-auto">
                <p class="lead pt-1">What are our clients saying?</p>
            </div>

            {{-- START THE CAROSAL --}}
            <div class="row align-items-center">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        {{-- CAROUSAL ITEM-1 --}}
                        <div class="carousel-item active">
                            {{-- testimonial card --}}
                            <div class="testimonials__card">
                                <p class="lh-lg">
                                    <i class="fas fa-quote-left"></i>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Neque impedit deleniti magni cupiditate! Enim, non sint ipsum est modi corporis
                                    quos.
                                    <i class="fas fa-quote-right"></i>
                                </p>
                                <div class="ratings">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>

                            </div>
                            {{-- client picture --}}
                            <div class="testimonials__picture">
                                <img src="{{ asset('images/testimonials/client-1.jpg') }}" alt="client-$ picture"
                                    class="img-fluid rounded-circle">

                            </div>
                            {{-- client name & role --}}
                            <div class="testimonials__name">
                                <h3>Aijaz Ayuoob</h3>
                                <p class="fw-light">Branch Manager </p>

                            </div>
                        </div>
                        {{-- CAROUSAL ITEM-2 --}}
                        <div class="carousel-item">
                            {{-- testimonial card --}}
                            <div class="testimonials__card">
                                <p class="lh-lg">
                                    <i class="fas fa-quote-left"></i>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Neque impedit deleniti magni cupiditate! Enim, non sint ipsum est modi corporis
                                    quos.
                                    <i class="fas fa-quote-right"></i>
                                </p>
                                <div class="ratings">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>

                            </div>
                            {{-- client picture --}}
                            <div class="testimonials__picture">
                                <img src="{{ asset('images/testimonials/client-2.jpg') }}" alt="client-2 picture"
                                    class="img-fluid rounded-circle">

                            </div>
                            {{-- client name & role --}}
                            <div class="testimonials__name">
                                <h3>Qashif Peer</h3>
                                <p class="fw-light">CEO & Founder </p>

                            </div>
                        </div>
                        {{-- CAROUSAL ITEM-3 --}}
                        <div class="carousel-item">
                            {{-- testimonial card --}}
                            <div class="testimonials__card">
                                <p class="lh-lg">
                                    <i class="fas fa-quote-left"></i>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Neque impedit deleniti magni cupiditate! Enim, non sint ipsum est modi corporis
                                    quos.
                                    <i class="fas fa-quote-right"></i>
                                </p>
                                <div class="ratings">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>

                            </div>
                            {{-- client picture --}}
                            <div class="testimonials__picture">
                                <img src="{{ asset('images/testimonials/client-3.jpg') }}" alt="client-3 picture"
                                    class="img-fluid rounded-circle">

                            </div>
                            {{-- client name & role --}}
                            <div class="testimonials__name">
                                <h3>Abraar Farooq</h3>
                                <p class="fw-light">Tech Lead </p>

                            </div>
                        </div>
                        {{-- CAROUSAL ITEM-4 --}}
                        <div class="carousel-item">
                            {{-- testimonial card --}}
                            <div class="testimonials__card">
                                <p class="lh-lg">
                                    <i class="fas fa-quote-left"></i>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Neque impedit deleniti magni cupiditate! Enim, non sint ipsum est modi corporis
                                    quos.
                                    <i class="fas fa-quote-right"></i>
                                </p>
                                <div class="ratings">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>

                            </div>
                            {{-- client picture --}}
                            <div class="testimonials__picture">
                                <img src="{{ asset('images/testimonials/client-4.jpg') }}" alt="client-4 picture"
                                    class="img-fluid rounded-circle">

                            </div>
                            {{-- client name & role --}}
                            <div class="testimonials__name">
                                <h3>Fahad Farooq</h3>
                                <p class="fw-light">Data Scientist </p>

                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-outline-light fas fa-long-arrow-alt-left" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">

                        </button>
                        <button class="btn btn-outline-light fas fa-long-arrow-alt-right" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="next">

                        </button>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,192L48,176C96,160,192,128,288,138.7C384,149,480,203,576,218.7C672,235,768,213,864,181.3C960,149,1056,107,1152,117.3C1248,128,1344,192,1392,224L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>

    <!--////////////////////////////////////////////////////////////////////////////////////////////////////
                             SECTION FAQ STARTS HERE
    //////////////////////////////////////////////////////////////////////////////////////////////////////-->

<section id="faq" class="faq">
    <div class="container">
        <div class="row text-center">
            <h1 class="display-3 fw-bold text-uppercase">Faq  </h1>
            <div class="heading-line"></div>
            <p class="lead">frequently asked questions,get knowledge before hand</p>

        </div>
        <!-- ACCORDIAN CONTENT -->
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="accordion" id="accordionExample">
                    <!-- Accordian Item-1 -->
                    <div class="accordion-item mb-3 shadow">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          What are the main features?
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <!-- Accordian Item-2 -->
                    <div class="accordion-item mb-3 shadow">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                         Do I have to pay again?
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <!-- Accordian Item-3 -->
                    <div class="accordion-item mb-3 shadow">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                         How can I get started?
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <!-- Accordian Item-4 -->
                    <div class="accordion-item mb-3 shadow">
                        <h2 class="accordion-header" id="headinFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                           Can I be egt refunded?
                          </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION PORTFOLIO STARTS -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row text-center mt-5">
            <div class="display-3 fw-bold text-capitalize">LAtest Work</div>
            <div class="heading-line"></div>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae iure nostrum at!  </p>
        </div>
        <!-- FILTER BUTTONS -->
        <div class="row mt-5 mb-3 g-3 text-center">
            <div class="col-md-12">
                <button class="btn btn-outline-primary" type="button">All</button>
                <button class="btn btn-outline-primary" type="button">Websites</button>
                <button class="btn btn-outline-primary" type="button">Design</button>
                <button class="btn btn-outline-primary" type="button">Mockup</button>
            </div>
        </div>

        <!-- START PORTFOLIO ITEMS -->
        <!-- .row>(.col-lg-4.collg-6>.portfolio-box.shadow>(img[src="{{ asset('images/portfolios/portfolio-$.jpg') }}"][alt="portfolio $ image"][title="portfolio $ picture"].img-fluid)>.portfolio-info>div.caption>h4{project name goes $}p{category project})*9 -->

        <div class="row">
            <div class="col-lg-4 collg-6">
                <div class="portfolio-box shadow">
                    <img src="{{ asset('images/portfolios/portfolio-1.jpg') }}" alt="portfolio 1 image" title="portfolio 1 picture" class="img-fluid">
                    <div class="portfolio-info">
                        <div class="caption">
                            <h4>project name goes 1</h4>
                            <p>category project</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 collg-6">
                <div class="portfolio-box shadow">
                    <img src="{{ asset('images/portfolios/portfolio-2.jpg') }}" alt="portfolio 2 image" title="portfolio 2 picture" class="img-fluid">
                    <div class="portfolio-info">
                        <div class="caption">
                            <h4>project name goes 2</h4>
                            <p>category project</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 collg-6">
                <div class="portfolio-box shadow">
                    <img src="{{ asset('images/portfolios/portfolio-3.jpg') }}" alt="portfolio 3 image" title="portfolio 3 picture" class="img-fluid">
                    <div class="portfolio-info">
                        <div class="caption">
                            <h4>project name goes 3</h4>
                            <p>category project</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 collg-6">
                <div class="portfolio-box shadow">
                    <img src="{{ asset('images/portfolios/portfolio-4.jpg') }}" alt="portfolio 4 image" title="portfolio 4 picture" class="img-fluid">
                    <div class="portfolio-info">
                        <div class="caption">
                            <h4>project name goes 4</h4>
                            <p>category project</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 collg-6">
                <div class="portfolio-box shadow">
                    <img src="{{ asset('images/portfolios/portfolio-5.jpg') }}" alt="portfolio 5 image" title="portfolio 5 picture" class="img-fluid">
                    <div class="portfolio-info">
                        <div class="caption">
                            <h4>project name goes 5</h4>
                            <p>category project</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 collg-6">
                <div class="portfolio-box shadow">
                    <img src="{{ asset('images/portfolios/portfolio-6.jpg') }}" alt="portfolio 6 image" title="portfolio 6 picture" class="img-fluid">
                    <div class="portfolio-info">
                        <div class="caption">
                            <h4>project name goes 6</h4>
                            <p>category project</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 collg-6">
                <div class="portfolio-box shadow">
                    <img src="{{ asset('images/portfolios/portfolio-7.jpg') }}" alt="portfolio 7 image" title="portfolio 7 picture" class="img-fluid">
                    <div class="portfolio-info">
                        <div class="caption">
                            <h4>project name goes 7</h4>
                            <p>category project</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 collg-6">
                <div class="portfolio-box shadow">
                    <img src="{{ asset('images/portfolios/portfolio-8.jpg') }}" alt="portfolio 8 image" title="portfolio 8 picture" class="img-fluid">
                    <div class="portfolio-info">
                        <div class="caption">
                            <h4>project name goes 8</h4>
                            <p>category project</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 collg-6">
                <div class="portfolio-box shadow">
                    <img src="{{ asset('images/portfolios/portfolio-9.jpg') }}" alt="portfolio 9 image" title="portfolio 9 picture" class="img-fluid">
                    <div class="portfolio-info">
                        <div class="caption">
                            <h4>project name goes 9</h4>
                            <p>category project</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- GET STARTED SECTION -->

<section id="contact" class="get-started">
    <div class="container">
        <div class="row text-center">
            <h1 class="display-3 fw-bold text-capitalize">Get started</h1>
            <div class="heading-line"></div>
            <p class="lh-lg">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum nulla beatae saepe.
            </p>
        </div>
        <!-- start cta info -->
        <div class=" row text-white">
            <div class="col-12 col-lg-6 gradient shadow p-3">
                <div class="cta-info w-100">
                    <h4 class="display-4 fw-bold"> 100% satisfaction guarenteed</h4>
                    <p class="lh-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus alias,
                         nisi aspernatur nulla fuga suscipit distinctio quibusdam? Ipsam nostrum numquam eos?
                    </p>
                    <h3 class="display-3--brief">
                        What will be the next ext
                    </h3>
                    <ul class="cta-info__list">
                        <li>Somw text here</li>
                        <li>lorem ipsum</li>
                        <li>lorem ipsum</li>
                    </ul>

                </div>
            </div>
            <div class="col-12 col-lg-6 bg-white shadow p-3">
                <div class="form w-100 pb-2">
                    <h4 class="display-3--title mb-5">start your project</h4>
                    <form action="#" class="row">
                        <div class="mb-3 col-md-6 col-lg-6">
                            <input type="text" placeholder="first Name" id="inputFirstName" class="form-control shadow form-control-lg">
                        </div>
                        <div class="mb-3 col-md-6 col-lg-6">
                            <input type="text" placeholder="Last Name" id="inputLastName" class="form-control shadow form-control-lg  ">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <input type="email" placeholder="abc@abc.com" id="inputEmail" class="form-control shadow form-control-lg  ">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <textarea name="message" id="message" placeholder="Message" rows="8" class="form-control shadow form-control-lg "></textarea>
                        </div>
                        <div class="text-center col-lg-12  mt-1 d-grid">
                            <button type="button" class="btn btn-primary rounded-pill text-white pt-3 pb-3">
                                Submit
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION FOOTER STARTS HERE -->

<footer class="footer">
    <div class="container">
        <!-- .row>(.col-md-4.col-lg-4.contact-box.pt-1>.contact-box__icon+.contact-box__inf0>a.contact-box__info--title{title goes here}p.contact-box__info--sub-title{sub title goes here})*3 -->

        <div class="row">
            <!-- for phone contact -->
            <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex">
                <div class="contact-box__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call"  viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                        <path d="M15 7a2 2 0 0 1 2 2" />
                        <path d="M15 3a6 6 0 0 1 6 6" />
                      </svg>
                </div>
                <div class="contact-box__info">
                    <a href="" class="contact-box__info--title">+91 9906611111</a>
                    <p class="contact-box__info--subtitle">Mon-Sat 10:00 am to 4:OO pm</p>
                </div>
            </div>
            <!-- for email contact -->
            <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex">
                <div class="contact-box__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-opened"  viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <polyline points="3 9 12 15 21 9 12 3 3 9" />
                        <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                        <line x1="3" y1="19" x2="9" y2="13" />
                        <line x1="15" y1="13" x2="21" y2="19" />
                      </svg>
                </div>
                <div class="contact-box__info">
                    <a href="" class="contact-box__info--title">info@compsoft.com</a>
                    <p class="contact-box__info--subtitle">Online Support</p>
                </div>
            </div>
            <!-- for address location     -->
            <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex">
                <div class="contact-box__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-location"  viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" />
                      </svg>
                </div>
                <div class="contact-box__info">
                    <a href="" class="contact-box__info--title">Sopore</a>
                    <p class="contact-box__info--subtitle">Model Town-A</p>
                </div>
            </div>
        </div>
    </div>
    <!-- social media content -->
    <div class="footer-sm" style="background-color: #212121;">
        <div class="container">
            <div class="row py-4 text-center text-white">
                <div class="col-lg-5 col-md-6 mb-4">
                    connect with on social media

                </div>
                <div class="col-lg-7 col-md-6">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

    </div>
    <!-- company info -->
    <div class="container mt-5">
        <div class="row text-white justify-content-center pb-3 mt-3">
            <div class="col-12 col-sm-6 col-lg-6">
                <h5 class="text-capitalize fw-bold">Company Name</h5>
                <hr class="bg-white d-inline-block-mb-4" style="width:60px; height: 2px;">
                <p class="lh-lg">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Ullam aperiam quae maiores cum fugiat natus labore laboriosam.
                </p>
            </div>
            <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                 <h5 class="text-capitalize fw-bold">Products</h5>
                <hr class="bg-white d-inline-block-mb-4" style="width:60px; height: 2px;">
                <ul class="list-inline company-list">
                    <li><a href="#">lorem Ipsum</a></li>
                    <li><a href="#">lorem Ipsum</a></li>
                    <li><a href="#">lorem Ipsum</a></li>
                </ul>

            </div>
            <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                 <h5 class="text-capitalize fw-bold">Useful Links</h5>
                <hr class="bg-white d-inline-block-mb-4" style="width:60px; height: 2px;">
                <ul class="list-inline company-list">
                    <li><a href="#">lorem Ipsum</a></li>
                    <li><a href="#">lorem Ipsum</a></li>
                    <li><a href="#">lorem Ipsum</a></li>
                </ul>

            </div>
            <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                 <h5 class="text-capitalize fw-bold">Contact</h5>
                <hr class="bg-white d-inline-block-mb-4" style="width:60px; height: 2px;">
                <ul class="list-inline company-list">
                    <li><a href="#">lorem Ipsum</a></li>
                    <li><a href="#">lorem Ipsum</a></li>
                    <li><a href="#">lorem Ipsum</a></li>
                </ul>

            </div>
        </div>
    </div>
    <!-- copyright info -->
    <div class="footer-bottom pt-5 pb-5">
        <div class="container">
            <div class="row text-center text-white">
                <div class="col-12">
                    <div class="footer-bottom__copyright">
                        &COPY;copyright 2021 <a href="#">compsoft solutions </a> | designed and developed by <a href="#">Qashif Peer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Back to top button -->
<a href="#" class="shadow btn-primary rounded-circle back-to-top">
<i class="fas fa-chevron-up"></i> </a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('vendors/js/glightbox.min.js') }}"></script>
    <script type="text/javascript">
        const lightbox = GLightbox({
            'href': 'https://www.youtube.com/watch?v=iJKCj8uAHz8',
            'type': 'video',
            'source': 'youtube', // vimeo,youtube or local
            'width': 900,
            'autoPlayVideos': 'true',

        });
    </script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> --}}

</body>

</html>
