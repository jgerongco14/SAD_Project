<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    @extends('extentions.bootstrap_links')
    @section('bootstrap_links')
    @endsection
    <style>
        .poster {
            object-fit: contain;
        }
    </style>
</head>

<body>
    @extends('partials.navbar')
    @section('content')
    <br><br><br>
    <div class="container">
        <div class="col d-flex justify-content-end">
            <a href="{{ route('home') }}"><button class="btn btn-secondary " type="button">Back</button></a>
        </div>
        <h1 class="fw-bolder text-center my-4">EVENTS</h1>
        <div class="row">
            @foreach ($tournament as $data)
            <div class="col-6 my-4">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="fw-bold text-center">{{ $data->poster_title}}</h4>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('storage/' . $data->poster) }}" class="card-img-top w-100 poster" style="height: 500px;" />
                        <span class="fw-bold"> Description:</span>
                        <p class="card-text">
                            {{ $data->poster_title}}
                        </p>
                    </div>
                    <div class="card-footer text-center d-flex justify-content-evenly">
                        <a href="{{ route('viewTourna', $data->id) }}"><button class="btn btn-primary " type="button">View Tournament</button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @endsection
</body>

</html>