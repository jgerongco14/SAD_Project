<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournaments</title>
    @extends('extentions.bootstrap_links')
    @section('bootstrap_links')
    @endsection
</head>

<body>
    @extends('partials.navbar')
    @section('content')
    <br><br>
    <div class="container mt-4">
        <div class="col">
            <div class="row d-flex text-center">
                <div class="col d-flex justify-content-end">
                    <a href="{{ route('create_tournamentPage') }}"><button class="btn btn-danger mx-2" type="button">Create Tournament</button></a>
                    <a href="{{ route('tournamentPage') }}"><button class="btn btn-secondary " type="button">Back</button></a>
                </div>
            </div>
        </div>
        <div class="col my-2">
            <h2 class="fw-bold bg-warning my-4 text-center">Upcoming Tournaments</h2>
            <div class="col overflow-auto mt-3 " style="height: 105vh;">
                <div class="row d-flex justify-content-center">
                    @foreach($tournament as $data)
                    <div class="col-3">
                        <div class="card my-3">
                            <div class="card-body">
                                <div class="col m-2">
                                    <div class="col rounded d-flex align-items-center justify-content-center">
                                        <img src="/image/logo1.png" class="img-fluid" height="150px" width="150px">
                                    </div>
                                </div>
                                <div class="col mt-4">
                                    <h4 class="fw-bold text-center my-2">{{ $data->tournament_title }}</h4>
                                    <h6 class="fw-bold text-center my-2">ID: {{ $data->id }}</h6>
                                </div>
                                <div class="col my-2">
                                    <h6 class="fw-bold ">Registration Dates</h6>
                                    <p>
                                        Open: {{ $data->start_date_of_registration }}
                                        <br>
                                        Close: {{ $data->end_date_of_registration }}
                                    </p>
                                    <h6 class="fw-bold ">Tournament Date</h6>
                                    <p>
                                        Actual Date of Tournament: {{ $data->date_of_the_tournament }}
                                    </p>
                                    <h6 class="fw-bold ">Held At</h6>
                                    <p>{{ $data->address }} {{ $data->city }} {{ $data->province }}</p>
                                    <h6 class="fw-bold ">Category: {{ $data->category }}</h6>
                                    <h6 class="fw-bold ">Age Range: {{ $data->age_range }}</h6>
                                    <h6 class="fw-bold ">Sponsored by: {{ $data->sponsor }}</h6>
                                </div>
                                <div class="col text-center mt-4 my-3">
                                    <a href="{{ route('viewTourna', $data->id) }}"><button type="button" class="btn btn-warning w-75 fw-bold">View Tournament</button></a>
                                </div>
                                <div class="col text-center my-2">
                                    <button type="button" class="btn btn-warning w-75 fw-bold" data-bs-toggle="modal" data-bs-target="#regform">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>


<!-- Modal for Registration Form -->

<div class="container">
    <div class="row">
        <div class="col">
            <div class="modal fade" id="regform">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-body">
                            <p>Registration</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>