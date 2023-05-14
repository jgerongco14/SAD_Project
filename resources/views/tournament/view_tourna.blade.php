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
                    <div class="col my-4">
                        <h6 class="fw-bold text-center my-2">Tournament ID: {{ $tournament->id }}</h6>
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="{{ asset('storage/' . $tournament->tournament_logo) }}" class="img-fluid" height="150px" width="150px">
                    </div>
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="col">
                            <h6 class="fw-bold ">Tournament Date</h6>
                            <p>
                                Actual Date of Tournament: {{ $tournament->date_of_the_tournament }}
                            </p>
                            <h6 class="fw-bold ">Registration Dates</h6>
                            <p>
                                Open: {{ $tournament->start_date_of_registration }}
                                <br>
                                Close: {{ $tournament->end_date_of_registration }}
                            </p>
                            <h6 class="fw-bold ">Held At</h6>
                            <p>{{ $tournament->address }} {{ $tournament->city }} {{ $tournament->province }}</p>
                        </div>
                        <div class="col">
                            <h6 class="fw-bold ">Category: </h6>
                            <p>{{ $tournament->category }}</p>
                            <h6 class="fw-bold ">Age Range: {{ $tournament->age_range }}</h6>
                            <p>{{ $tournament->age_range }}</p>
                            <h6 class="fw-bold ">Sponsored by: {{ $tournament->sponsor }}</h6>
                            <p>{{ $tournament->sponsor }}</p>
                        </div>
                    </div>
                    <div class="col my-2">
                        <h6 class="fw-bold ">Description</h6>
                        <p>{{ $tournament->tournament_description }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col my-5">
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
                    <!-- <div class="row mt-3">
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
                    </div> -->
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
                                        Personal Information
                                    </th>
                                    <th>
                                        Social Media
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="registedplayer" class="registedplayer">
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
                            <tbody id="requestregister" class="requestregister">
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
                            </tbody>
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
                                        Games
                                    </th>
                                    <th>
                                        Wins
                                    </th>
                                    <th>
                                        Loss
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="playerStanding" id="playerStanding"></tbody>
                        </table>
                    </div>
                    <!-- <div class="col my-5 text-center">
                        <div class="row">
                            <div class="col-6">
                                <a href="/tourna_content"><button type="button" class="btn btn-primary w-50 fw-bold">Back</button></a>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-primary w-50 fw-bold" data-bs-toggle="modal" data-bs-target="#regform">Register</button>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img id="modalImage" src="" class="img-fluid" alt="Modal Image">
                </div>
            </div>
        </div>
    </div>

    @endsection
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function loadRegisteredPlayers() {
            var tournamentId = "{{ $tournament->id }}";
            var url = "{{ route('approvedPlayers', ['tournamentId' => ':tournamentId']) }}";
            url = url.replace(':tournamentId', tournamentId);
            // Make the AJAX request to retrieve the data
            $.get(url, function(data) {
                // Clear the table body
                $('.registedplayer').empty();

                // Iterate over the data and populate the table rows
                data.forEach(function(item) {
                    var row = $('<tr>');

                    // Add user_id cell
                    var registedIdCell = $('<td>').addClass('align-middle text-center');
                    registedIdCell.append($('<h6>').addClass('user_id').text(item.user_id));
                    row.append(registedIdCell);

                    // Add photo cell
                    var registeredphotoCell = $('<td>').addClass('align-middle text-center');
                    var photo = $('<img>')
                        .attr('src', item.photo)
                        .addClass('rounded-circle')
                        .css({
                            'height': '100px',
                            'width': '100px'
                        })
                        .click(function() {
                            // Show the modal
                            $('#myModal').modal('show');

                            // Set the modal image source
                            $('#modalImage').attr('src', $(this).attr('src'));
                        });

                    registeredphotoCell.append(photo);
                    row.append(registeredphotoCell);

                    var userCell = $('<td>').addClass('align-middle');
                    var firstName = item.users.firstName ? item.users.firstName : '';
                    var middleInitial = item.users.middleInitial ? item.users.middleInitial : '';
                    var alias = item.users.alias ? item.users.alias : '';
                    var lastName = item.users.lastName ? item.users.lastName : '';
                    var suffix = item.users.suffix ? item.users.suffix : '';
                    var userInfo = firstName + ' ' + middleInitial + ' ' + alias + ' ' + lastName + ' ' + suffix;
                    var sex = item.users.sex ? item.users.sex : '';
                    var nationality = item.users.nationality ? item.users.nationality : '';
                    var email = item.users.email ? item.users.email : '';
                    userCell.append($('<h6>').addClass('userInfo').text('Name: ' + userInfo));
                    userCell.append($('<h6>').addClass('sex').text('Sex: ' + sex));
                    userCell.append($('<h6>').addClass('nationality').text('Nationality: ' + nationality));
                    userCell.append($('<h6>').addClass('email').text('Email: ' + email));
                    row.append(userCell);


                    var socialLinkCell = $('<td>').addClass('align-middle text-center');
                    var instagramLink = item.users.instagramLink;
                    var facebookLink = item.users.facebookLink;
                    var twitterLink = item.users.twitterLink;
                    var rowElement = $('<div>').addClass('row justify-content-center');

                    // Add Instagram link if available
                    if (instagramLink) {
                        var instagramImg = $('<img>').attr('src', '/image/insta.png').addClass('img-bot').css({
                            'height': '50px',
                            'width': '60px'
                        });
                        var instagramLinkElement = $('<a>').attr('href', instagramLink).attr('target', '_blank').append(instagramImg);
                        rowElement.append($('<div>').addClass('col-2 mx-2').append(instagramLinkElement));
                    } else {
                        var defaultInstagramImg = $('<img>').attr('src', '/image/insta.png').addClass('img-bot').css({
                            'height': '50px',
                            'width': '60px'
                        });
                        rowElement.append($('<div>').addClass('col-2 mx-2').append(defaultInstagramImg));
                    }
                    // Add Facebook link if available
                    if (facebookLink) {
                        var facebookImg = $('<img>').attr('src', '/image/facebook.png').addClass('img-bot').css({
                            'height': '50px',
                            'width': '60px'
                        });
                        var facebookLinkElement = $('<a>').attr('href', facebookLink).attr('target', '_blank').append(facebookImg);
                        rowElement.append($('<div>').addClass('col-2 mx-2').append(facebookLinkElement));
                    } else {
                        var defaultFacebookImg = $('<img>').attr('src', '/image/facebook.png').addClass('img-bot').css({
                            'height': '50px',
                            'width': '60px'
                        });
                        rowElement.append($('<div>').addClass('col-2 mx-2').append(defaultFacebookImg));
                    }

                    // Add Twitter link if available
                    if (twitterLink) {
                        var twitterImg = $('<img>').attr('src', '/image/twitter.png').addClass('img-bot').css({
                            'height': '50px',
                            'width': '60px'
                        });
                        var twitterLinkElement = $('<a>').attr('href', twitterLink).attr('target', '_blank').append(twitterImg);
                        rowElement.append($('<div>').addClass('col-2 mx-2').append(twitterLinkElement));
                    } else {
                        var defaultTwitterImg = $('<img>').attr('src', '/image/twitter.png').addClass('img-bot').css({
                            'height': '50px',
                            'width': '60px'
                        });
                        rowElement.append($('<div>').addClass('col-2 mx-2').append(defaultTwitterImg));
                    }

                    socialLinkCell.append(rowElement);

                    row.append(socialLinkCell);

                    // Append the row to the table body
                    $('.registedplayer').append(row);
                });
            }).fail(function(xhr, status, error) {
                console.log(xhr.responseText);
                console.log(status);
                console.log(error);
            });
        }
        $(document).ready(function() {
            loadRegisteredPlayers();

            $('a[href="#regDone"]').on('shown.bs.tab', function() {

                loadRegisteredPlayers();
            });

            $('a[href="#reqReg"]').on('shown.bs.tab', function() {
                var tournamentId = "{{ $tournament->id }}";
                var url = "{{ route('unapprovedPlayers', ['tournamentId' => ':tournamentId']) }}";
                url = url.replace(':tournamentId', tournamentId);

                // Make the AJAX request to retrieve the data
                $.get(url, function(data) {
                    // Clear the table body
                    $('.requestregister').empty();

                    // Iterate over the data and populate the table rows
                    data.forEach(function(item) {
                        var row = $('<tr>');

                        // Add user_id cell
                        var userIdCell = $('<td>').addClass('align-middle text-center');
                        userIdCell.append($('<h6>').addClass('user_id').text(item.user_id));
                        row.append(userIdCell);


                        // Add photo cell
                        var userphotoCell = $('<td>').addClass('align-middle text-center');
                        var photo = $('<img>')
                            .attr('src', item.photo)
                            .addClass('rounded-circle')
                            .css({
                                'height': '100px',
                                'width': '100px'
                            })
                            .click(function() {
                                // Show the modal
                                $('#myModal').modal('show');

                                // Set the modal image source
                                $('#modalImage').attr('src', $(this).attr('src'));
                            });

                        userphotoCell.append(photo);
                        row.append(userphotoCell);

                        var userCell = $('<td>').addClass('align-middle text-center');
                        var firstName = item.users.firstName ? item.users.firstName : '';
                        var middleInitial = item.users.middleInitial ? item.users.middleInitial : '';
                        var alias = item.users.alias ? item.users.alias : '';
                        var lastName = item.users.lastName ? item.users.lastName : '';
                        var suffix = item.users.suffix ? item.users.suffix : '';
                        var userInfo = firstName + ' ' + middleInitial + ' ' + alias + ' ' + lastName + ' ' + suffix;
                        userCell.append($('<h6>').addClass('userInfo').text(userInfo));
                        row.append(userCell);

                        // Add proof_of_payment cell
                        var proofCell = $('<td>').addClass('align-middle text-center');
                        var proofImg = $('<img>')
                            .attr('src', item.player_proof_of_payment)
                            .css({
                                'height': '100px',
                                'width': '100px'
                            })
                            .click(function() {
                                // Show the modal
                                $('#myModal').modal('show');

                                // Set the modal image source
                                $('#modalImage').attr('src', $(this).attr('src'));
                            });

                        proofCell.append(proofImg);
                        row.append(proofCell);

                        // add action buttons
                        var actionCell = $('<td>').addClass('align-middle text-center');

                        var approveForm = $('<form>').attr('method', 'POST');
                        var csrfToken = '{{ csrf_token() }}';
                        approveForm.append($('<input>').attr('type', 'hidden').attr('name', '_token').val(csrfToken));
                        approveForm.append($('<input>').attr('type', 'hidden').attr('name', '_method').val('PUT'));

                        var approveButton = $('<button>').attr('type', 'submit').addClass('btn btn-primary my-2 w-75')
                            .attr('onclick', "return confirm('Are you sure you want to Approve this Tournament?')")
                            .text('Approve');
                        approveForm.append(approveButton);

                        var approveUrl = "{{ route('tournamentAdmin', ['id' => ':id']) }}";
                        approveUrl = approveUrl.replace(':id', item.id);
                        approveForm.attr('action', approveUrl);
                        actionCell.append(approveForm);

                        // Add Decline button
                        var declineButton = $('<button>').addClass('btn btn-danger w-75 my-2').text('Decline');
                        actionCell.append(declineButton);

                        row.append(actionCell);

                        // Append the row to the table body
                        $('.requestregister').append(row);
                    });
                }).fail(function(xhr, status, error) {
                    console.log(xhr.responseText);
                    console.log(status);
                    console.log(error);
                });
            });
            $('a[href="#standings"]').on('shown.bs.tab', function() {
                var tournamentId = "{{ $tournament->id }}";
                var url = "{{ route('approvedPlayers', ['tournamentId' => ':tournamentId']) }}";
                url = url.replace(':tournamentId', tournamentId);

                // Make the AJAX request to retrieve the data
                $.get(url, function(data) {
                    // Clear the table body
                    $('.playerStanding').empty();

                    // Iterate over the data and populate the table rows
                    data.forEach(function(item) {
                        var row = $('<tr>');

                        var rankingCell = $('<td>').addClass('align-middle text-center');
                        rankingCell.append('Coming Soon');
                        row.append(rankingCell);

                        var userphotoCell = $('<td>').addClass('align-middle text-center');
                        var photo = $('<img>')
                            .attr('src', item.photo)
                            .addClass('rounded-circle')
                            .css({
                                'height': '50px',
                                'width': '50px'
                            })
                            .click(function() {
                                // Show the modal
                                $('#myModal').modal('show');

                                // Set the modal image source
                                $('#modalImage').attr('src', $(this).attr('src'));
                            });

                        userphotoCell.append(photo);
                        row.append(userphotoCell);

                        var userCell = $('<td>').addClass('align-middle text-center');
                        var firstName = item.users.firstName ? item.users.firstName : '';
                        var middleInitial = item.users.middleInitial ? item.users.middleInitial : '';
                        var alias = item.users.alias ? item.users.alias : '';
                        var lastName = item.users.lastName ? item.users.lastName : '';
                        var suffix = item.users.suffix ? item.users.suffix : '';
                        var userInfo = firstName + ' ' + middleInitial + ' ' + alias + ' ' + lastName + ' ' + suffix;
                        userCell.append($('<h6>').addClass('userInfo').text(userInfo));
                        row.append(userCell);

                        var gameCell = $('<td>').addClass('align-middle text-center');
                        gameCell.append($('<h6>').addClass('games').text(item.games));
                        row.append(gameCell);

                        var winsCell = $('<td>').addClass('align-middle text-center');
                        winsCell.append($('<h6>').addClass('wins').text(item.wins));
                        row.append(winsCell);

                        var lossCell = $('<td>').addClass('align-middle text-center');
                        lossCell.append($('<h6>').addClass('loss').text(item.loss));
                        row.append(lossCell);

                        // Append the row to the table body
                        $('.playerStanding').append(row);
                    });
                }).fail(function(xhr, status, error) {
                    console.log(xhr.responseText);
                    console.log(status);
                    console.log(error);
                });
            });
        });
    </script>
</body>

</html>