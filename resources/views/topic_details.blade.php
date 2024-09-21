<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../../assests/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="../../assests/css/main.min.css">
    <link rel="stylesheet" href="../../assests/css/styles.css">
</head>

<body>
    <header>
        @include('layouts.includes.header')
        @include('layouts.includes.nav')
      </header>
    <div class="container my-5">
        <div class="mx-2">
            <div class="row justify-content-between mb-2 pb-2">
                <h2 class="fw-bold fs-2 col-auto">Topic Details</h2>
                <a href="{{ route('topics.create') }}" class="btn btn-link  link-dark fw-semibold col-auto me-3">➕Add new topic</a>
            </div>
            <div class="p-5">
                <div class="container-fluid g-0 pt-3 pb-5 px-lg-5 px-md-3 px-1">
                    <div
                      class="img-wrapper"
                    >
                       <!-- Display the topic image -->
                       <img src="{{asset('assets/images/' . $topic->image) }}" alt="{{ $topic->topic_name }}" class="img-fluid mb-3" />
     
                    </div>
                    <!-- article -->
                    <div class="mx-auto pt-4" style="max-width: 1225px">
                        <article class="mx-md-4">
                            <!-- Display the topic name dynamically -->
                            <h2 class="fs-1 py-4">{{ $topic->topic_name }}</h2>
                            
                           
                            <!-- Display the topic content -->
                            <p>{!! nl2br(e($topic->topic_content)) !!}</p>
                            
                            <div class="text-md-end">
                                <a class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5" href="{{ route('topics.index') }}">
                                    Back to All Topics
                                </a>
                            </div>
                        </article>
                    </div>
              </div>
        </div>
    </div>
    <script src="../../assests/js/jquery.min.js"></script>
    <script src="../../assests/js/bootstrap.bundle.min.js"></script>
    <script src="../../assests/js/dataTables.min.js"></script>
    <script src="../../assests/js/tables.js"></script>
</body>

</html>