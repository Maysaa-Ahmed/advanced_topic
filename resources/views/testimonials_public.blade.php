<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Topic Listing Contact Page</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="../../assests/css/bootstrap.min.css" rel="stylesheet">

        <link href="../../assests/css/bootstrap-icons.css" rel="stylesheet">

        <link href="../../assests/css/templatemo-topic-listing.css" rel="stylesheet">
<!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
    </head>
    
    <body class="topics-listing-page" id="top">

        <main>

            @include('layouts.includes.short_menu')


            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5 col-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Homepage</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Testimonials</h2>
                        </div>

                    </div>
                </div>
            </header>

            <section class="section-padding ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h2 class="mb-4">What Our clients Says?</h2>
                        </div>
                    </div>
                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                           @foreach($testimonials as $testimonial)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <div class="row mx-md-5">
                                        <div class="col-md-4 testimonials">
                                            <img class="d-block rounded-3"
                                                src="{{ asset('assets/images/' . $testimonial->image) }}"
                                                alt="Testimonial image">
                                        </div>
                                        <div class="col-md-8 px-md-5 d-flex flex-column justify-content-center">
                                            <h3>{{ $testimonial->name }}<br>
                                                <strong class="date">{{ \Carbon\Carbon::parse($testimonial->created_time)->format('d/m/Y') }}</strong>
                                            </h3>
                                            <p class="text-muted">{{ $testimonial->content }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                    </div>
                </div>
            </section>

           
        </main>

       @include('layouts.includes.footer')
       @include('layouts.includes.jsFiles')

    </body>
</html>