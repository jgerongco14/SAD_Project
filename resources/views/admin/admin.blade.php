<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" \>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @extends('extentions.bootstrap_links')
    @section('bootstrap_links')
    @endsection
</head>

<body>
    @extends('partials.navbar')
    @section('content')

    <div class="container-fluid mb-5 mt-5">
        <div class="row bg align-items-center" style="height: 90vh; padding-bottom: 50px;">
            <div class="col text-center">
                <h1 style="color: white; font-size: 50;"> <span>Pickleball</span> </h1>
                <p style="color: white;">Davao Dinkers Club | Pickleball Partners<br></p>
                <a class="btn btn-warning w-25 my-2" href="{{route('unapprovedTournament')}}" role="button">Manage Tournaments</a>
                <!-- <a class="btn btn-warning w-25 my-2" href="" role="button">Manage Clubs</a> -->
            </div>
        </div>
    </div>
    @endsection
</body>

</html>