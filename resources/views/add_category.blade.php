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
      <h2 class="fw-bold fs-2 mb-5 pb-2">Add Category</h2>
      <form action="{{route('categories.store')}}" method="POST" class="px-md-5">
      @csrf 
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Category Name:</label>
          <div class="col-md-10">
            <input name="category_name" type="text" placeholder="e.g. Computer Science" class="form-control py-2" />
          </div>
        </div>
        <div class="text-md-end">
          <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Add Category
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