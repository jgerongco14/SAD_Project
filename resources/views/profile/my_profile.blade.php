<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name of the User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/cp.css') }}">
</head>

<body>
    @extends('partials.navbar2')
    @section('content')
    <br><br>
    <div class="container">
        <ul class="nav nav-tabs mt-3" role="tablist">
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
                            <button class="btn btn-primary mx-1">Save</button>
                            <button class="btn btn-primary mx-1">Edit</button>
                        </div>
                    </div>
                    <div class="col text-center">
                        <img src="/image/pro_icon.png" class="img-fluid">
                        <h5>Ratings:</h5>
                        <h5>ID No:</h5>
                    </div>
                    <div class="col mt-5 d-grid gap-3">
                        <h5 class="fw-bold">Name:</h5>
                        <div class="row">
                            <div class="col">
                                <form>
                                    <h6 class="fw-bold">First Name:</h6>
                                    <input class="form-control " type="text">
                                </form>
                            </div>
                            <div class="col">
                                <form>
                                    <h6 class="fw-bold">Last Name:</h6>
                                    <input class="form-control " type="text">
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <form>
                                    <h6 class="fw-bold">Middle Name:</h6>
                                    <input class="form-control " type="text">
                                </form>
                            </div>
                            <div class="col">
                                <form>
                                    <h6 class="fw-bold">Suffix:</h6>
                                    <input class="form-control " type="text">
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <form>
                                    <h6 class="fw-bold">Nickname/Alias:</h6>
                                    <input class="form-control " type="text">
                                </form>
                            </div>
                            <div class="col">
                                <form>
                                    <h6 class="fw-bold">Role:</h6>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Role</option>
                                        <option value="1">Player</option>
                                        <option value="2">Coach</option>
                                        <option value="3">Playing/Coach</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <h5 class="fw-bold">Birth Information:</h5>
                        <div class="row">
                            <div class="col">
                                <form>
                                    <h6 class="fw-bold">Sex:</h6>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sex" id="male">
                                                <label class="form-check-label fw-bold" for="male">
                                                    Male
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sex" id="female" checked>
                                                <label class="form-check-label fw-bold" for="female">
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col">
                                <form>
                                    <h6 class="fw-bold">Birthdate:</h6>
                                    <input class="form-control " type="text">
                                </form>
                            </div>
                        </div>
                        <h5 class="fw-bold">Address:</h5>
                        <div class="row">
                            <div class="col">
                                <form>
                                    <h6 class="fw-bold">Nationality:</h6>
                                    <input class="form-control " type="text">
                                </form>
                            </div>
                            <div class="col">
                                <form>
                                    <h6 class="fw-bold">Country:</h6>
                                    <input class="form-control " type="text">
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <form>
                                    <h6 class="fw-bold">Address:</h6>
                                    <input class="form-control " type="text">
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <form>
                                    <h6 class="fw-bold">City:</h6>
                                    <input class="form-control " type="text">
                                </form>
                            </div>
                            <div class="col">
                                <form>
                                    <h6 class="fw-bold">Province:</h6>
                                    <input class="form-control " type="text">
                                </form>
                            </div>
                        </div>
                        <h5 class="fw-bold">Contact Information:</h5>
                        <div class="row">
                            <div class="col">
                                <form>
                                    <h6 class="fw-bold">Email:</h6>
                                    <input class="form-control " type="text">
                                </form>
                            </div>
                            <div class="col">
                                <form>
                                    <h6 class="fw-bold">Telephone Number:</h6>
                                    <input class="form-control " type="text">
                                </form>
                            </div>
                            <div class="col">
                                <form>
                                    <h6 class="fw-bold">Phone Number:</h6>
                                    <input class="form-control " type="text">
                                </form>
                            </div>
                        </div>
                        <h5 class="fw-bold">Social Media (Links):</h5>
                        <div class="row">
                            <div class="col">
                                <form>
                                    <h6 class="fw-bold">Facebook:</h6>
                                    <input class="form-control " type="text">
                                </form>
                            </div>
                            <div class="col">
                                <form>
                                    <h6 class="fw-bold">Instagram:</h6>
                                    <input class="form-control " type="text">
                                </form>
                            </div>
                            <div class="col">
                                <form>
                                    <h6 class="fw-bold">Twitter:</h6>
                                    <input class="form-control " type="text">
                                </form>
                            </div>
                        </div>
                    </div>
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

    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>