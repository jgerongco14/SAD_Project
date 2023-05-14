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
    <style>
        .wrapper {
            height: 150px;
            width: 150px;
            border: 1px solid black;
            overflow: hidden;
            border-radius: 50%;

        }

        .photo {
            height: 100%;
            width: 100%;
        }


        .hidden {
            display: none;
        }
    </style>
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
            <h2 class="fw-bold bg-warning my-4 text-center">Tournaments</h2>
            <div class="col overflow-auto mt-3 " style="height: 105vh;">
                <div class="row d-flex justify-content-center">
                    @foreach($tournament as $data)
                    <div class="col-3">
                        <div class="card my-3 h-100">
                            <div class="card-body">
                                <div class="col m-2">
                                    <div class="col rounded d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('storage/' . $data->tournament_logo) }}" class="img-fluid" style="height: 150px; width: 150px;">
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
                                    <a href="{{ route('viewTourna', $data->id) }}"><button type="button" class="btn btn-warning w-75 fw-bold">More Info</button></a>
                                </div>
                                <div class="col text-center my-2">
                                    <button class="btn bg-warning fw-bold w-75" data-bs-toggle="modal" data-bs-target="#registration" onclick="checkRegistrationDates('{{ $data->start_date_of_registration }}', '{{ $data->end_date_of_registration }}', '{{$data->id}}')">
                                        Register
                                    </button>
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

    <!-- Modal for Registration Form -->
    <div class="modal" id="registration">
        <form action="{{route('getPlayersRegistration')}}" enctype="multipart/form-data" method="POST">
            @csrf
            @if (Session::has('success'))
            <script>
                window.onload = function() {
                    alert("{{ Session::get('success') }}");
                };
            </script>
            @endif
            @if (Session::has('fail'))
            <script>
                window.onload = function() {
                    alert("{{ Session::get('fail') }}");
                };
            </script>
            @endif
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="col d-flex justify-content-center">
                            <h2 class="fw-bold tournament_title"></h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="col d-flex justify-content-center">
                            <div id="remaining_time"></div>
                        </div>
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <div class="form-group mt-4">
                                    <h4>Registration Fee: <span class="registration_fee"></span></h4>
                                    <img src="" class="form-control" alt="Tournament Logo" id="admin_gcash" name="admin_gcash" width="200px" height="300px">
                                </div>
                            </div>
                            <div class="col">
                                <div class="col d-flex justify-content-center my-4">
                                    <div class="form-group wrapper d-flex justify-content-center">
                                        <img src="" alt="avatar" class="rounded-circle img-fluid photo" name="photo" id="photo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control user_id" name="user_id" id="user_id" value="" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="tournament_id" id="tournament_id" value="" readonly>
                                </div>
                                <div class="col my-2">
                                    <span class="fw-bold">Name: </span>
                                    <span class="firstName"></span>
                                    <span class="middleInitial"></span>
                                    <span class="alias"></span>
                                    <span class="lastName"></span>
                                    <span class="suffix"></span>
                                </div>
                                <div class="col my-2">
                                    <span class="fw-bold">Sex: </span>
                                    <span class="sex"></span>
                                </div>
                                <div class="col my-2">
                                    <span class="fw-bold">Birthdate: </span>
                                    <span class="birthdate"></span>
                                </div>
                                <div class="col my-2">
                                    <span class="fw-bold">Nationality: </span>
                                    <span class="nationality"></span>
                                </div>
                                <div class="col my-2">
                                    <span class="fw-bold">Email: </span>
                                    <span class="email"></span>
                                </div>
                                <h5 class="fw-bold my-4">IV. Payment</h5>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="col my-2" style="text-align: justify;">
                                            <div class="col my-2 mx-2">
                                                <div class="form-group">
                                                    <label for="player_proof_of_payment">Proof of Payment</label>
                                                    <input type="file" name="player_proof_of_payment" id="player_proof_of_payment" class="form-control" value="{{old('player_proof_of_payment')}}" required>
                                                    @error('player_proof_of_payment')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col form-group text-center mx-4">
                            <button class="btn btn-primary w-75" type="submit">Register</button>
                        </div>
                        <div class="col form-group text-center mx-4">
                            <button type="button" class="btn btn-secondary w-75" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        function checkRegistrationDates(startDate, endDate, tournamentId) {

            var today = new Date();
            var start = new Date(startDate);
            var end = new Date(endDate);

            if (today < start) {
                alert("Tournament registration is not yet open.");
                $('#registration').modal('hide');
            } else if (today > end) {
                alert("Tournament registration is closed.");
                $('#registration').modal('hide');
            } else {
                // The registration form is accessible when the date is between start and end dates.
                $('#registration').modal('show');
                // Calculate remaining time
                var remainingTime = end - today;
                var days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
                var hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

                // Display remaining time on the page
                document.getElementById("remaining_time").innerHTML = "Registration closes in " + days + "d " + hours + "h " + minutes + "m " + seconds + "s";

                // Update remaining time every second
                setInterval(function() {
                    var remainingTime = end - new Date();
                    var days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);
                    document.getElementById("remaining_time").innerHTML = "Registration closes in " + days + "d " + hours + "h " + minutes + "m " + seconds + "s";
                }, 1000);
            }
            document.getElementById("tournament_id").value = tournamentId;
            $(document).ready(function() {
                $.get('/tournamentModal', function(data) {
                    $('.user_id').val(data.id);
                    $('.firstName').text(data.firstName);
                    $('.middleInitial').text(data.middleInitial);
                    $('.alias').text(data.alias);
                    $('.lastName').text(data.lastName);
                    $('.suffix').text(data.suffix);
                    $('.sex').text(data.sex);
                    $('.birthdate').text(data.birthdate);
                    $('.email').text(data.email);
                    $('.nationality').text(data.nationality);
                    $('#photo').attr('src', data.photo);
                });
            });
            $(document).ready(function() {
                var tournamentId = document.getElementById("tournament_id").value;
                $.get('/tournamentModal/' + tournamentId, function(data) {
                    $('#title').html(data.tournament_title);
                    $('.tournament_title').text(data.tournament_title);
                    $('.registration_fee').text(data.registration_fee);
                    $('#admin_gcash').attr('src', data.admin_gcash);
                });
            });
        }
    </script>
</body>

</html>