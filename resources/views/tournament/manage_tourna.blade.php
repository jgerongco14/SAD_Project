<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Tournament</title>
    @extends('extentions.bootstrap_links')
    @section('bootstrap_links')
    @endsection
</head>

<body>
    @extends('partials.navbar')
    @section('content')
    <br><br>
    <div class="container my-4">
        <div class="col d-flex justify-content-end">
            <a href="{{ route('displayTourna') }}"><button class="btn btn-secondary " type="button">Back</button></a>
        </div>
        <div class="row">
            <div class="col-7">

                <div class="col text-center mt-3">
                    <h2 class="fw-bold">Create Tournament</h2>
                </div>
                <div class="col mt-3">
                    <h5 class="text-start">Please fill out all of the required fields.</h5>
                </div>

                <form action="{{route('create_tournamentForm')}}" enctype="multipart/form-data" method="POST">
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
                    <div class="form-group">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    </div>
                    <h5 class="fw-bold">I. Tournament Details</h5>
                    <div class="col my-2">
                        <div class="form-group">
                            <label for="name">Tournament Title:</label>
                            <input type="text" class="form-control" name="tournament_title" id="tournament_title" value="{{old('tournament_title')}}" required>
                            @error('tournament_title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col my-2">
                        <div class="form-group">
                            <label for="profile_picture">Tournament Logo</label>
                            <input type="file" name="tournament_logo" id="tournament_logo" class="form-control">
                            @error('tournament_logo')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <label for="address">Date of the Tournament</label>
                            <div class="input-group form-group date">
                                <span class="input-group-text">
                                    <i class="bi bi-calendar"></i>
                                </span>
                                <input type="text" class="form-control" name="date_of_the_tournament" id="date_of_the_tournament" data-provide="datepicker" value="{{old('date_of_the_tournament')}}" required>
                            </div>
                        </div>
                        <div class="col">
                            <label for="address">Start date of Registration</label>
                            <div class="input-group form-group date">
                                <span class="input-group-text">
                                    <i class="bi bi-calendar"></i>
                                </span>
                                <input type="text" class="form-control" name="start_date_of_registration" id="start_date_of_registration" data-provide="datepicker" value="{{old('start_date_of_registration')}}" required>
                            </div>
                        </div>
                        <div class="col">
                            <label for="address">End date of Registration</label>
                            <div class="input-group form-group date">
                                <span class="input-group-text">
                                    <i class="bi bi-calendar"></i>
                                </span>
                                <input type="text" class="form-control" name="end_date_of_registration" id="end_date_of_registration" data-provide="datepicker" value="{{old('end_date_of_registration')}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <label for="name">Tournament Category</label>
                            <select class="form-select" name="category" aria-label="Default select example" value="{{old('category')}}" required>
                                <option selected>Category</option>
                                <option value="Men's Singles">Men's Singles</option>
                                <option value="Women's Singles">Women's Singles</option>
                                <option value="Men's Doubles">Men's Doubles</option>
                                <option value="Women's Doubles">Women's Doubles</option>
                                <option value="Mix Doubles">Mix Doubles</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="name">Age Range Category</label>
                            <select class="form-select" name="age_range" aria-label="Default select example">
                                <option selected>Age</option>
                                <option value="10-13">10-13</option>
                                <option value="14-17">14-17</option>
                                <option value="18-29">18-29</option>
                                <option value="30-40">30-40</option>
                                <option value="41-60">41-60</option>
                                <option value="61+">61+</option>
                            </select>
                        </div>
                    </div>
                    <div class="col my-2">
                        <div class="form-group">
                            <label for="name">Address</label>
                            <input type="text" class="form-control" name="address" id="address" value="{{old('address')}}" required>
                            @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <div class="form-group">
                                <label for="name">Province</label>
                                <input type="text" class="form-control" name="province" id="province" value="{{old('province')}}" required>
                                @error('province')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="name">City</label>
                                <input type="text" class="form-control" name="city" id="city" value="{{old('city')}}" required>
                                @error('city')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col my-2">
                        <div class="form-group">
                            <label for="name">Tournament Description</label>
                            <textarea class="form-control" rows="3" name="tournament_description" id="tournament_description" value="{{old('tournament_description')}}" required></textarea>
                            @error('tournament_description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <h5 class="fw-bold my-4">II. Tournament Organizer Details</h5>
                    <div class="col my-2">
                        <div class="form-group">
                            <label for="name">Name of Organizer</label>
                            <input type="text" class="form-control" name="name_of_organizer" id="name_of_organizer" value="{{old('name_of_organizer')}}" required>
                            @error('name_of_organizer')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <label for="profile_picture">Contact Number</label>
                            <input type="text" class="form-control" name="contactNumber" id="contactNumber" value="{{old('contactNumber')}}" required>
                            @error('contactNumber')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="profile_picture">Email</label>
                            <input type="text" class="form-control" name="email" id="email" value="{{old('email')}}" required>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col my-2">
                        <div class="form-group">
                            <label for="name">Sponsor</label>
                            <input type="text" class="form-control" name="sponsor" id="sponsor" value="{{old('sponsor')}}" required>
                            @error('sponsor')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <h5 class="fw-bold my-4">III. Tournament Description</h5>
                    <div class="col my-2">
                        <div class="form-group">
                            <label for="profile_picture">Poster</label>
                            <input type="file" name="poster" id="poster" class="form-control" value="{{old('email')}}" required>
                            @error('poster')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col my-2">
                        <div class="form-group">
                            <label for="profile_picture">Poster Title</label>
                            <input type="text" class="form-control" name="poster_title" id="poster_title" value="{{old('poster_title')}}" required>
                            @error('poster_title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col my-2">
                        <div class="form-group">
                            <label for="name">Poster Description</label>
                            <textarea class="form-control" rows="3" name="poster_description" id="poster_description" value="{{old('poster_description')}}" required></textarea>
                            @error('poster_description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col my-2">
                        <div class="form-group">
                            <label for="profile_picture">Picture of your Gcash QRCode</label>
                            <input type="file" name="admin_gcash" id="admin_gcash" class="form-control" value="{{old('admin_gcash')}}" required>
                            @error('admin_gcash')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <h5 class="fw-bold my-4">IV. Payment</h5>
                    <div class="card">
                        <div class="card-body">
                            <div class="col my-2" style="text-align: justify;">
                                <h6 class="mt-3 mx-2">To complete your registration for the upcoming tournament, please note that a mandatory fee of 200 pesos must be paid via GCash to the provided number (09215974197) before sending the registration. Failure to make the payment will result in the disapproval of your registration by the admin, and you will not be able to participate in the tournament. We strongly encourage you to make the payment as soon as possible to secure your spot in the tournament and have the opportunity to showcase your skills and compete against other talented players. Thank you for your cooperation, and we look forward to seeing you at the tournament.</h6>
                                <div class="col my-2 mx-2">
                                    <div class="form-group">
                                        <label for="profile_picture">Proof of Payment</label>
                                        <input type="file" name="proof_of_payment" id="proof_of_payment" class="form-control" value="{{old('proof_of_payment')}}" required>
                                        @error('proof_of_payment')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col my-4">
                        <div class="form-group text-center">
                            <button class="btn btn-primary mx-1 saveBtn w-50" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-5 mt-3 text-center">
                <h2 class="fw-bold">My Tournament</h2>
                <div class="col mt-4">
                    <h5 class="text-start text-decoration-underline">Ongoing Tournament</h5>
                    <div class="card">
                        <div class="card-header fw-bold">
                            Date: 12/1/2022 - 12/30/2022
                        </div>
                        <div class="card-body">
                            <div class="col">
                                <div class="col">
                                    <img src="/image/logo1.png" class="img-fluid">
                                </div>
                                <div class="col mt-2 fw-bold text-center">
                                    <h4>Legacy Oktoberfest</h4>
                                </div>
                                <div class="col mt-2 fw-bold text-center">
                                    <a href="view_tourna"><button type="button" class="btn btn-primary w-50">View Tournament</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-4">
                    <h5 class="text-start text-decoration-underline">Future Tournament</h5>
                    <div class="card">
                        <div class="card-header fw-bold">
                            Date: 01/01/2023 - 01/30/2023
                        </div>
                        <div class="card-body">
                            <div class="col">
                                <div class="col">
                                    <img src="/image/logo1.png" class="img-fluid">
                                </div>
                                <div class="col mt-2 fw-bold text-center">
                                    <h4>Legacy Oktoberfest</h4>
                                </div>
                                <div class="col mt-2 fw-bold text-center">
                                    <a href="view_tourna"><button type="button" class="btn btn-primary w-50">View Tournament</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-4">
                    <h5 class="text-start text-decoration-underline">Ended Tournament</h5>
                    <div class="card">
                        <div class="card-header fw-bold">
                            Date: 11/1/2022 - 11/30/2022
                        </div>
                        <div class="card-body">
                            <div class="col">
                                <div class="col">
                                    <img src="/image/logo1.png" class="img-fluid">
                                </div>
                                <div class="col mt-2 fw-bold text-center">
                                    <h4>Legacy Oktoberfest</h4>
                                </div>
                                <div class="col mt-2 fw-bold text-center">
                                    <a href="view_tourna"><button type="button" class="btn btn-primary w-50">View Tournament</button></a>
                                </div>
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