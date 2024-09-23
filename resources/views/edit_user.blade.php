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
      <h2 class="fw-bold fs-2 mb-5 pb-2">Edit USER</h2>
      <form action="{{route('users.update', $user->id)}}" method="POST" class="px-md-5" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
          <div class="col-md-5">
            <input name="first_name" type="text" placeholder="First Name" class="form-control py-2" value="{{$user->first_name}}" />
          </div>
          <div class="col-md-5">
            <input name="last_name" type="text" placeholder="Last Name" class="form-control py-2" value="{{$user->last_name}}" />
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">UserName:</label>
          <div class="col-md-10">
            <input name="user_name" type="text" placeholder="e.g. Jhon33" class="form-control py-2" value="{{$user->user_name}}" />
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Email:</label>
          <div class="col-md-10">
            <input name="email" type="email" placeholder="e.g. Jhon@example.com" class="form-control py-2" value="{{$user->email}}" />
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Password:</label>
          <div class="col-md-10">
            <input name="password" type="password" placeholder="Password" class="form-control py-2"  />
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Active:</label>
          <div class="col-md-10">
            <input name="active" type="checkbox" class="form-check-input" style="padding: 0.7rem;"  @checked($user->active) />
          </div>
        </div>
        <div class="text-md-end">
          <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Edit User
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