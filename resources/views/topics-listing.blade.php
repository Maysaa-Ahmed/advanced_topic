<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Topic Listing Page</title>

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

                                    <li class="breadcrumb-item active" aria-current="page">Topics Listing</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Topics Listing</h2>
                        </div>

                    </div>
                </div>
            </header>


            <section class="section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h3 class="mb-4">Popular Topics</h3>
                        </div>

                        <div class="col-lg-8 col-12 mt-3 mx-auto">


                            @foreach($topics as $topic)
                                <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                    <div class="d-flex">
                                        <img src="{{asset('assets/images/' . $topic->image) }}" class="custom-block-image img-fluid" alt="{{ $topic->topic_name }}">

                                        <div class="custom-block-topics-listing-info d-flex">
                                            <div>
                                                <h5 class="mb-2">{{ $topic->topic_name }}</h5>

                                                <p class="mb-0">{{ \Illuminate\Support\Str::limit($topic->topic_content, 50, '...') }}</p>

                                                <a href="{{route('topicdetail.viewTopicDetail', $topic['id'])}}" class="btn custom-btn mt-3 mt-lg-4">Learn More</a>
                                            </div>

                                            <span class="badge bg-design rounded-pill ms-auto">{{ $topic->trending }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="col-lg-12 col-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">Prev</span>
                                        </a>
                                    </li>

                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">5</a>
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </section>


            <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h3 class="mb-4">Trending Topics</h3>
                        </div>

                    @foreach($topics2 as $topic2)
                        <div class="col-lg-6 col-md-6 col-12 mt-3 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="{{route('topicdetail.viewTopicDetail', $topic2['id'])}}">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">{{ $topic2->topic_name }}</h5>

                                            <p class="mb-0">{{ \Illuminate\Support\Str::limit($topic2->topic_content, 50, '...') }}</p>
                                        </div>

                                        <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                    </div>

                                    <img src="{{asset('assets/images/' . $topic2->image) }}" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    @endforeach
                       

                    </div>
                </div>
            </section>
        </main>

		@include('layouts.includes.footer')
        @include('layouts.includes.jsFiles')

    </body>
</html>