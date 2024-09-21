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
    <link rel="stylesheet" href="assests/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="assests/css/main.min.css">
    <link rel="stylesheet" href="assests/css/styles.css">
</head>

<body>
    <header>
        @include('layouts.includes.header')
        @include('layouts.includes.nav')
      </header>
    <div class="container my-5">
        <div class="mx-2">
            <div class="row justify-content-between mb-2 pb-2">
                <h2 class="fw-bold fs-2 col-auto">All Messages</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-borderless display" id="_table">
                    <thead>
                        <tr>
                            <th scope="col">Created At</th>
                            <th scope="col">Message</th>
                            <th scope="col">Sender</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($messages as $message)
                        <tr>
                        <th scope="row">{{ \Carbon\Carbon::parse($message['created_time'])->format('d M Y') }}</th>
                        <td>
                            <a href="{{ route('messages.detail', $message['id']) }}" class="text-decoration-none text-dark">
                                {{ Str::limit($message['message'], 20, '...') }}
                            </a>
                        </td>
                            <td>{{$message['sender']}}</td>
                            <td class="text-center"><a class="text-decoration-none text-dark" href="{{route('messages.destroy', $message['id'])}}" onclick="confirm('Are you sure you want to delete?')"><img src="assests/images/trash-can-svgrepo-com.svg"></a></td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        
    </div>
    <script src="assests/js/jquery.min.js"></script>
    <script src="assests/js/bootstrap.bundle.min.js"></script>
    <script src="assests/js/dataTables.min.js"></script>
    <script src="assests/js/tables.js"></script>
</body>

</html>