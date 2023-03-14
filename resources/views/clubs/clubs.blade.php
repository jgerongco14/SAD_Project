<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    @extends('partials.navbar')
    @section('content')

    <div class="container my-5 ">
        <br>
        <h1 class="text-center fw-bolder">CLUB LIST</h1>
        <div class="row justify-content-end">
            <div class="col-8 d-flex my-4">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn bg-success mx-3 w-25" type="submit">Search</button>
                <button class="btn bg-success w-25 " data-bs-toggle="modal" data-bs-target="#club_reg">Create Club</button>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card h-100">
                    <div class="card-body">
                        <img src="/image/gallery/image8.jfif" class="card-img-top w-100" style="height: 250px;" />
                        <h5 class="card-title my-3">Davao Pickleball Club</h5>
                        <p class="card-text">
                            DAVAO DRINKERS CLUB - DAVAO CITY
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary w-75 my-2 fw-bold" data-bs-toggle="modal" data-bs-target="#join_club">Join</button>
                        <a href="/view_club"><button class="btn btn-primary w-75 my-2 fw-bold" type="button">View Club</button></a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card h-100">
                    <div class="card-body">
                        <img src="/image/gallery/image8.jfif" class="card-img-top w-100" style="height: 250px;" />
                        <h5 class="card-title my-3">Cebu Pickleball Club</h5>
                        <p class="card-text">
                            CEBU DRINKERS CLUB - DAVAO CITY
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary w-75 my-2 fw-bold" data-bs-toggle="modal" data-bs-target="#join_club">Join</button>
                        <a href="/view_club"><button class="btn btn-primary w-75 my-2 fw-bold" type="button">View Club</button></a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card h-100">
                    <div class="card-body">
                        <img src="/image/gallery/image9.jfif" class="card-img-top w-100" style="height: 250px;" />
                        <h5 class="card-title my-3">Panabo Pickleball Club</h5>
                        <p class="card-text">
                            PANABO PICKLEBALL CLUB - PANABO CITY
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary w-75 my-2 fw-bold" data-bs-toggle="modal" data-bs-target="#join_club">Join</button>
                        <a href="/view_club"><button class="btn btn-primary w-75 my-2 fw-bold" type="button">View Club</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

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
                            <div class="row justify-content-center">
                                <div class="col-9">
                                    <form>
                                        <h6 class="fw-bold">Club Name</h6>
                                        <input class="form-control " type="text">
                                    </form>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-9">
                                    <form>
                                        <h6 class="fw-bold">Club Logo</h6>
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" id="inputclublogo">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-9">
                                    <form>
                                        <h6 class="fw-bold">Club President</h6>
                                        <input class="form-control " type="text">
                                    </form>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-9">
                                    <form>
                                        <h6 class="fw-bold">City</h6>
                                        <input class="form-control " type="text">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-evenly">

                            <button class="btn btn-warning w-25 fw-bold" type="submit" data-bs-dismiss="modal">Submit</button>
                            <button class="btn btn-warning w-25 fw-bold" data-bs-dismiss="modal">Cancel</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- modal for join club -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="modal fade" id="join_club">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <img src="/image/gif/check.gif" class="card-img-top" style="height: 100px; width: 100px;" />
                            <h4 class="fw-bold">Sent Joining Request</h4>
                        </div>
                        <div class="modal-footer d-flex justify-content-evenly">
                            <button class="btn btn-primary w-50 fw-bold" data-bs-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>