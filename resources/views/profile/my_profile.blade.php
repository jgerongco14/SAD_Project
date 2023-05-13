<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$user->firstName}} '{{$user->alias}}' {{$user->lastName}} {{$user->suffix}}</title>
    <link rel="stylesheet" href="{{ asset('css/cp.css') }}">
    <style>
        .wrapper {
            height: 200px;
            width: 200px;
            border: 1px solid black;
            overflow: hidden;
            border-radius: 50%;

        }

        .photo {
            height: 100%;
            width: 100%;
            transition: transform 0.2s ease-in-out;
        }

        .photo:hover {
            /* enlarge on hover */
            transform: scale(1.2);
            opacity: 0.5;
        }

        .wrapper:hover::after {
            /* adjust opacity on hover */
            opacity: 1;
        }

        .hidden {
            display: none;
        }
    </style>
    @extends('extentions.bootstrap_links')
    @section('bootstrap_links')
    @endsection
</head>

<body>
    @extends('partials.navbar')
    @section('content')
    <br><br>
    <div class="container my-4">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item active">
                <a class="nav-link fw-bold" data-toggle="tab" href="#profile" role="tabpanel">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" data-toggle="tab" href="#history" role="tabpanel">History</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" data-toggle="tab" href="#gallery" role="tabpanel">Gallery</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="profile">
                <div class="col">
                    <!-- balikan ni siya -->
                    <div class="row mt-3">
                        <div class="col">
                            <h2 class="fw-bold ">Personal Information</h2>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <button class="btn btn-primary mx-1" id="editBtn" name="editBtn">Edit</button>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="form-group wrapper d-flex justify-content-center">
                            <img src="" alt="avatar" class="rounded-circle img-fluid photo" name="photo" id="photo" data-bs-toggle="modal" data-bs-target="#profilePictureModal">
                        </div>
                    </div>
                    <div class="col text-center">
                        <!-- <h5>Ratings:</h5> -->
                        @if($user)
                        <h5>ID No: {{ $user->id}}</h5>
                        @endif
                    </div>
                    <form action="{{ route('update_profile')}}" method="POST">
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

                        <div class="col mt-5 d-grid gap-3">
                            <h5 class="fw-bold">Name:</h5>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="firstName">First Name:</label>
                                        <input type="text" class="form-control" name="firstName" id="firstName" value="{{ $user->firstName}}" readonly>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="middleInitial">Middle Initial:</label>
                                        <input type="text" class="form-control" name="middleInitial" id="middleInitial" value="{{$user->middleInitial}}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="lastName">Last Name:</label>
                                        <input type="text" class="form-control" name="lastName" id="lastName" value="{{$user->lastName}}" readonly>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="suffix">Suffix:</label>
                                        <input type="text" class="form-control" name="suffix" id="suffix" value="{{$user->suffix}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="alias">Nickname/Alias:</label>
                                        <input type="text" class="form-control" name="alias" id="alias" value="{{$user->alias}}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="role">Role:</label>
                                        <select class="form-select" id="role" name="role" aria-label="Default select example" readonly disabled>
                                            <option selected>Role</option>
                                            <option value="Player" {{ $role === 'player' ? 'selected' : '' }}>Player</option>
                                            <option value="Coach" {{ $role === 'coach' ? 'selected' : '' }}>Coach</option>
                                            <option value="Player/Coach" {{ $role === 'player/coach' ? 'selected' : '' }}>Playing/Coach</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <h5 class="fw-bold">Birth Information:</h5>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <h6 class="fw-bold">Sex:</h6>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="sex" id="male" value="Male" {{ $sex === 'Male' ? 'checked' : '' }} readonly disabled>
                                                    <label class="form-check-label fw-bold" for="male">
                                                        Male
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="sex" id="female" value="Female" {{ $sex === 'Female' ? 'checked' : '' }} readonly disabled>
                                                    <label class="form-check-label fw-bold" for="emale">
                                                        Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="birthdate">Birthdate:</label>
                                        <input type="text" class="form-control" name="birthdate" id="birthdate" value="{{$user->birthdate}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <h5 class="fw-bold">Address:</h5>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nationality">Nationality:</label>
                                        <input type="text" class="form-control" name="nationality" id="nationality" value="{{$user->nationality}}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="country">Country:</label>
                                        <input type="text" class="form-control" name="country" id="country" value="{{$user->country}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="address">Address:</label>
                                        <input type="text" class="form-control" name="address" id="address" value="{{$user->address}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="province">Province:</label>
                                        <input type="text" class="form-control" name="province" id="province" value="{{$user->province}}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="city">City:</label>
                                        <input type="text" class="form-control" name="city" id="city" value="{{$user->city}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <h5 class="fw-bold">Contact Information:</h5>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="telephoneNumber">Telephone Number:</label>
                                        <input type="text" class="form-control" name="telephoneNumber" id="telephoneNumber" value="{{$user->telephoneNumber}}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="mobileNumber">Phone Number:</label>
                                        <input type="text" class="form-control" name="mobileNumber" id="mobileNumber" value="{{$user->mobileNumber}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <h5 class="fw-bold">Social Media (Links):</h5>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="facebookLink">Facebook:</label>
                                        <input type="text" class="form-control" name="facebookLink" id="facebookLink" value="{{$user->facebookLink}}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="instagramLink">Instagram:</label>
                                        <input type="text" class="form-control" name="instagramLink" id="instagramLink" value="{{$user->instagramLink}}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="twitterLink">Twitter:</label>
                                        <input type="text" class="form-control" name="twitterLink" id="twitterLink" value="{{$user->twitterLink}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col rowgone d-none my-4">
                                <div class="form-group text-center">
                                    <button class="btn btn-primary mx-1 saveBtn w-50" type="submit">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane" id="history">
                <div class="col">
                    <h2 class="fw-bold text-center mt-2">History</h2>
                    <div class="table_size table-scroll mt-4">
                        <table class="table">
                            <thead class="text-center bg-dark sticky-top fw-bold" style="color:white;">
                                <tr>
                                    <th>
                                        Tournament Played
                                    </th>
                                    <th>
                                        Location
                                    </th>
                                    <th>
                                        Category
                                    </th>
                                    <th>
                                        Ranking
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>
                                        Legacy Oktoberfest
                                    </td>
                                    <td>
                                        Davao City
                                    </td>
                                    <td>
                                        Men's Singles
                                    </td>
                                    <td>
                                        Champion
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="gallery">
                <h1 class="fw-bolder">Coming Sooon</h1>
            </div>
        </div>
    </div>
    <!-- Profile Picture Modal -->
    <div class="modal fade" id="profilePictureModal" tabindex="-1" aria-labelledby="profilePictureModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="profilePictureModalLabel">Edit Profile Picture</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('update_profilepic')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if (Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        <div class="form-group">
                            <label for="photo">Choose Profile Picture</label>
                            <input type="file" name="photo" id="photo" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $.get('/profile_pic', function(data) {
                $('#photo').attr('src', data.photo);
            });
        });

        document.getElementById('editBtn').addEventListener('click', function() {
            // Enable the text fields
            document.getElementById('firstName').readOnly = false;
            document.getElementById('middleInitial').readOnly = false;
            document.getElementById('lastName').readOnly = false;
            document.getElementById('suffix').readOnly = false;
            document.getElementById('alias').readOnly = false;

            //role
            //sex

            document.getElementById('birthdate').readOnly = false;
            document.getElementById('nationality').readOnly = false;
            document.getElementById('country').readOnly = false;
            document.getElementById('address').readOnly = false;
            document.getElementById('province').readOnly = false;
            document.getElementById('city').readOnly = false;
            document.getElementById('email').readOnly = false;
            document.getElementById('telephoneNumber').readOnly = false;
            document.getElementById('mobileNumber').readOnly = false;
            document.getElementById('facebookLink').readOnly = false;
            document.getElementById('instagramLink').readOnly = false;
            document.getElementById('twitterLink').readOnly = false;



            document.querySelector('.form-select').disabled = false;
            document.querySelectorAll('.form-check-input').forEach(function(element) {
                element.disabled = false;
            });

            // Show the Save button

            $('.rowgone').toggleClass('d-none');


        });
        document.querySelector('form').addEventListener('submit', function() {
            document.getElementById('firstName').readOnly = true;
            document.getElementById('middleInitial').readOnly = true;
            document.getElementById('lastName').readOnly = true;
            document.getElementById('suffix').readOnly = true;
            document.getElementById('alias').readOnly = true;

            //role
            //sex

            document.getElementById('birthdate').readOnly = true;
            document.getElementById('nationality').readOnly = true;
            document.getElementById('country').readOnly = true;
            document.getElementById('address').readOnly = true;
            document.getElementById('province').readOnly = true;
            document.getElementById('city').readOnly = true;
            document.getElementById('email').readOnly = true;
            document.getElementById('telephoneNumber').readOnly = true;
            document.getElementById('mobileNumber').readOnly = true;
            document.getElementById('facebookLink').readOnly = true;
            document.getElementById('instagramLink').readOnly = true;
            document.getElementById('twitterLink').readOnly = true;

            document.querySelector('.form-select').disabled = true;
            document.querySelectorAll('.form-check-input').forEach(function(element) {
                element.disabled = true;
            });

            $('.rowgone').addClass('d-none');
        });
    </script>

    @endsection
</body>

</html>