<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubs</title>
    <style>
        .clublogo {
            object-fit: contain;
        }
    </style>
    @extends('extentions.bootstrap_links')
    @section('bootstrap_links')
    @endsection
</head>

<body>
    @extends('partials.navbar')
    @section('content')

    <div class="container my-5 ">
        <br>
        <h1 class="text-center fw-bolder mt-2">CLUB LIST</h1>
        <div class="row justify-content-end">
            <div class="col my-3 d-flex justify-content-end">
                <a><button class="btn bg-success mx-2" data-bs-toggle="modal" data-bs-target="#club_reg">Create Club</button></a>
                <a href="{{ route('home') }}"><button class="btn btn-secondary mx-2" type="button">Back</button></a>
            </div>
        </div>
        <div class="row">
            @foreach($clubs as $data)
            <div class="col-4">
                <div class="card h-100">
                    <div class="card-body">
                        <img src="{{ asset('storage/' . $data->clubLogo) }}" class="card-img-top w-100 clublogo" style="height: 250px;" />
                        <h5 class="card-title my-3">{{ $data->clubName }}</h5>
                        <p class="card-text">
                            {{ $data->clubName }} - {{ $data->originCity }}
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <form action="{{ route('join.club') }}" method="post">
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
                            <input type="hidden" name="club_id" value="{{ $data->id }}" />

                            <button class="btn btn-primary w-75 my-2 fw-bold" onclick="return confirm('Are you sure you want to join the club?')">Join</button>
                        </form>
                        <a href="{{ route('viewClub', ['id' => $data->id]) }}"><button class="btn btn-primary w-75 my-2 fw-bold" type="button">View Club</button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection
</body>

</html>

<!-- modal for club registration -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="modal fade" id="club_reg">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center">
                            <h4> Create Account</h4>
                        </div>
                        <div class="modal-body d-grid gap-3">
                            <form action="{{ route('createClub') }}" enctype="multipart/form-data" method="POST">
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
                                <div class="row justify-content-center my-2">
                                    <div class="col-9">
                                        <h6 class="fw-bold">Club Name</h6>
                                        <input class="form-control" id="clubName" name="clubName" type="text" value="{{ old('clubName') }}" required>
                                    </div>
                                </div>
                                <div class="row justify-content-center my-2">
                                    <div class="col-9">
                                        <h6 class="fw-bold">Club Logo</h6>
                                        <input type="file" class="form-control" id="clubLogo" name="clubLogo" required>
                                    </div>
                                </div>
                                <div class="row justify-content-center my-2">
                                    <div class="col-9">
                                        <h6 class="fw-bold">Club President</h6>
                                        <input class="form-control" type="text" id="clubPresident" name="clubPresident" value="{{ old('clubPresident') }}" required>
                                    </div>
                                </div>
                                <div class="row justify-content-center my-2">
                                    <div class="col-9">
                                        <h6 class="fw-bold">City</h6>
                                        <input class="form-control" type="text" id="originCity" name="originCity" value="{{ old('originCity') }}" required>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-evenly my-4">
                                    <button class="btn btn-warning w-25 fw-bold" type="submit">Register</button>
                                    <button class="btn btn-warning w-25 fw-bold" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

