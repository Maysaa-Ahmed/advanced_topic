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
                <h2 class="fw-bold fs-2 col-auto">All Users</h2>
                <a href="{{ route('users.create') }}" class="btn btn-link  link-dark fw-semibold col-auto me-3">➕Add new user</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover display" id="_table">
                    <thead>
                    
                        <tr>
                            <th scope="col">Registration Date</th>
                            <th scope="col">FullName</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Active</th>
                            <th scope="col">Edit</th>
                        </tr>
                    
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ \Carbon\Carbon::parse($user['created_time'])->format('d M Y') }}</th>
                            <td>{{ $user['first_name'] . ' ' . $user['last_name'] }}</td>
                            <td>{{$user['user_name']}}</td>
                            <td>{{$user['email']}}</td>
                            <td>{{ $user['active'] ? 'Yes' : 'No' }}</td>
                            <td class="text-center"><a class="text-decoration-none text-dark" href="{{ route('users.edit', $user['id']) }}"><img src="../../assests/images/edit-svgrepo-com.svg"></a></td>
                        </tr>
                      @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="../../assests/js/jquery.min.js"></script>
    <script src="../../assests/js/bootstrap.bundle.min.js"></script>
    <script src="../../assests/js/dataTables.min.js"></script>
    <script src="../../assests/js/tables.js"></script>
</body>

</html>