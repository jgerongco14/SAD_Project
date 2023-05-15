<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubs</title>
    <link rel="stylesheet" href="{{ asset('css/cp.css') }}">
    @extends('extentions.bootstrap_links')
    @section('bootstrap_links')
    @endsection
    <style>
        .clublogo {
            object-fit: contain;
        }
    </style>
</head>

<body>
    @extends('partials.navbar')
    @section('content')
    <br>
    <div class="container my-5 ">
        <div class="col-12">
            <div class="card">
                <img src="{{ asset('storage/' . $club->clubLogo) }}" class="card-img-top w-100 clublogo" style="height: 250px;" />
                <div class="card-body text-center">
                    <h4 class="fw-bold">{{ $club->id }}</h4>
                    <h4 class="fw-bold">{{ $club->clubName }}</h4>
                    <h5>{{ $club->originCity }}</h5>
                </div>
            </div>
        </div>
        <div class="col mt-3">
            <div class="col d-flex">
                <h2 class="fw-bold">Club Members</h2>
                <div class="col d-flex justify-content-end">
                    <a href="{{ route('viewListClubs') }}"><button class="btn btn-secondary " type="button">Back</button></a>
                </div>
            </div>
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
                    <tbody id="clubMembers" class="clubMembers">
                    </tbody>
                </table>
            </div>
        </div>
        @endsection
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function loadRegisteredPlayers() {
            var clubId = "{{ $club->id }}";
            var url = "{{ route('viewClubMembers', ['clubId' => ':clubId']) }}";
            url = url.replace(':clubId', clubId);
            // Make the AJAX request to retrieve the data
            $.get(url, function(data) {
                // Clear the table body
                $('.clubMembers').empty();

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
                    $('.clubMembers').append(row);
                });
            }).fail(function(xhr, status, error) {
                console.log(xhr.responseText);
                console.log(status);
                console.log(error);
            });
        }
        $(document).ready(function() {
            loadRegisteredPlayers();
        });
    </script>
</body>

</html>