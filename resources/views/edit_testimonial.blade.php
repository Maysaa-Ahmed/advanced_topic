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
      <h2 class="fw-bold fs-2 mb-5 pb-2">Edit Testimonial</h2>
      <form action="{{route('testimonials.update', $testimonial->id)}}" method="POST" class="px-md-5" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
          <div class="col-md-10">
            <input name="name" type="text" placeholder="e.g. Jhon Doe" class="form-control py-2" value="{{$testimonial->name}}" />
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Content:</label>
          <div class="col-md-10">
            <textarea name="content" id="" rows="5" class="form-control"> {{$testimonial->content}}</textarea>
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Published:</label>
          <div class="col-md-10">
            <input name="published" type="checkbox" class="form-check-input" style="padding: 0.7rem;"  @checked($testimonial->published) />
          </div>
        </div>
        <hr>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Image:</label>
          <div class="col-md-10">
            <input name="image" type="file" class="form-control" style="padding: 0.7rem; margin-bottom: 10px;"  value="{{$testimonial->image}}" />
            <img src="{{asset('assets/images/' . $testimonial->image) }}" alt="" style="width: 10rem;">
          </div>
        </div>
        <div class="text-md-end">
          <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Edit Testimonial
          </button>
        </div>
      </form>
    </div>
  </div>
  </main>
  <script src="../../assests/js/jquery.min.js"></script>
  <script src="../../assests/js/bootstrap.bundle.min.js"></script>
  <script src="../../assests/js/dataTables.min.js"></script>
  <script src="../../assests/js/tables.js"></script>
</body>

</html>