<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title of the Tournament</title>
    <link rel="stylesheet" href="{{ asset('css/cp.css') }}">
    @extends('extentions.bootstrap_links')
    @section('bootstrap_links')
    @endsection
    <style>
        .wrapper {
            height: 100px;
            width: 100px;
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
    <div class="container my-4">
        <div class="col d-flex justify-content-end">
            <a href="{{ route('displayTourna') }}"><button class="btn btn-secondary " type="button">Back</button></a>
        </div>
        <h1 class="fw-bolder mt-3 text-center">{{ $tournament->tournament_title }}</h1>
        <div class="col my-5">
            <div class="row">
                <div class="col-4 ">
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="{{ asset('storage/' . $tournament->tournament_logo) }}" class="img-fluid" height="150px" width="150px">
                    </div>
                </div>
                <div class="col-8">
                    <div class="col mt-4">
                        <h6 class="fw-bold text-center my-2">ID: {{ $tournament->id }}</h6>
                    </div>
                    <div class="col my-2">
                        <h6 class="fw-bold ">Registration Dates</h6>
                        <p>
                            Open: {{ $tournament->start_date_of_registration }}
                            <br>
                            Close: {{ $tournament->end_date_of_registration }}
                        </p>
                        <h6 class="fw-bold ">Tournament Date</h6>
                        <p>
                            Actual Date of Tournament: {{ $tournament->date_of_the_tournament }}
                        </p>
                        <h6 class="fw-bold ">Held At</h6>
                        <p>{{ $tournament->address }} {{ $tournament->city }} {{ $tournament->province }}</p>
                        <h6 class="fw-bold ">Category: {{ $tournament->category }}</h6>
                        <h6 class="fw-bold ">Age Range: {{ $tournament->age_range }}</h6>
                        <h6 class="fw-bold ">Sponsored by: {{ $tournament->sponsor }}</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <ul class="nav nav-tabs mt-3" role="tablist">
                <li class="nav-item active">
                    <a class="nav-link fw-bold" data-toggle="tab" href="#regDone" role="tabpanel">Players Registered</a>
                </li>

                @if (Auth::user()->id == $tournament->user_id)
                <li class="nav-item">
                    <a class="nav-link fw-bold" data-toggle="tab" href="#reqReg" role="tabpanel">Request Registration</a>
                </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link fw-bold" data-toggle="tab" href="#standings" role="tabpanel">Standings</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="regDone">
                    <h1 class="fw-bolder mt-3">Players Registered</h1>
                    <div class="row mt-3">
                        <div class="col">
                            <p class="fw-bold">1 PLAYER/S</p>
                        </div>
                        <div class="col d-flex">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>City</option>
                                <option value="1">Davao City</option>
                                <option value="2">Tagum City</option>
                                <option value="3">Quezon City</option>
                            </select>
                            <input class="form-control mx-3" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn bg-success" type="submit">Search</button>

                        </div>
                    </div>
                    <div class="table-scroll mt-4">
                        <table class="table ">
                            <thead class="text-center bg-dark sticky-top" style="color:white;">
                                <tr>
                                    <th>
                                        Photo
                                    </th>
                                    <th>
                                        Personal Information
                                    </th>
                                    <th>
                                        Social Media
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle text-center"><img src="/image/pro_icon.png" class="img-bot" style="height: 110px; width:105px;"></td>
                                    <td class="align-middle">
                                        <p class="text-decoration-underline fw-bold">SAMANTHA ELECHICON</p>
                                        <p class="mt-1"><span>CITY:</span> Davao City <br>
                                            <span>AGE:</span> 21 <br>
                                            <span> PLAYER TYPE:</span> Singles OR Doubles
                                        </p>
                                    </td>
                                    <td class="align-middle">
                                        <p class="text-center">SEND MESSAGE</p>
                                        <div class="row text-center">
                                            <div class="col">
                                                <a href="" type="btn"><img src="/image/insta.png" class="img-bot" style="height: 50px; width: 60px;"></a>
                                            </div>
                                            <div class="col">
                                                <a href="" type="btn"><img src="/image/facebook.png" class="img-bot" style="height: 50px; width: 60px;"></a>
                                            </div>
                                            <div class="col">
                                                <a href="" type="btn"><img src="/image/twitter.png" class="img-bot" style="height: 50px; width: 60px;"></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="tab-pane" id="reqReg">
                    <h1 class=" fw-bolder mt-3">Request Registration</h1>
                    <div class="table-scroll mt-4">
                        <table class="table ">
                            <thead class="text-center bg-dark sticky-top" style="color:white;">
                                <tr>
                                    <th>
                                        User ID
                                    </th>
                                    <th>
                                        Photo
                                    </th>
                                    <th>
                                        Player's Name
                                    </th>
                                    <th>
                                        Proof of Payment
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle text-center">
                                        <h6 class="user_id"></h6>
                                    </td>
                                    <td class="align-middle text-center"><img src="/image/pro_icon.png" class="img-bot" style="height: 50px; width:60px;"></td>
                                    <td class="align-middle text-center">
                                        <p class=" fw-bold">CARLO CASTRO</p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <img src="" alt="avatar" class="rounded-circle photo" name="player_proof_of_payment" id="player_proof_of_payment">
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary w-25 fw-bold ms-2">Accept</button>
                                        <button type="button" class="btn btn-primary w-25 fw-bold ms-2">Decline</button>
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="standings">
                    <h1 class=" fw-bolder mt-3">Standings</h1>
                    <div class="table-scroll mt-4">
                        <table class="table ">
                            <thead class="text-center bg-dark sticky-top" style="color:white;">
                                <tr>
                                    <th>
                                        Ranking
                                    </th>
                                    <th>
                                        Photo
                                    </th>
                                    <th>
                                        Player's Name
                                    </th>
                                    <th>
                                        Wins
                                    </th>
                                    <th>
                                        Loss
                                    </th>
                                    <th>
                                        Games
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="playerTableBody"></tbody>
                        </table>
                    </div>
                    <div class="col my-5 text-center">
                        <div class="row">
                            <div class="col-6">
                                <a href="/tourna_content"><button type="button" class="btn btn-primary w-50 fw-bold">Back</button></a>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-primary w-50 fw-bold" data-bs-toggle="modal" data-bs-target="#regform">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

</body>

</html>