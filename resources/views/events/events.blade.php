<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    @extends('partials.navbar')
    @section('content')
    <br><br>
    <h1 class="fw-bolder text-center my-4">EVENTS</h1>
    <div class="container">
        <div class="col mt-3 ">
            <div class="card my-3">
                <div class="card-header">
                    <h4 class="fw-bold text-decoration-underline text-center mt-2">Legacy Oktoberfest</h4>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-4 d-flex align-items-center justify-content-center">
                            <div class="col">
                                <div class="col bg-secondary rounded d-flex align-items-center justify-content-center">
                                    <img src="/image/logo1.png" class="img-fluid">
                                </div>
                                <div class="col mt-2 fw-bold text-center">
                                    <h4>Tournament Ended</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <h3 class="fw-bold">ID: 00001</h3>
                            <p>Date: 10/07/22 - 10/09/22</p>
                            <p>Address: Bankal Davao City Davao Del Sur</p>
                            <p>Category: Men's Singles</p>
                            <p>Age: 40-60</p>
                            <p> Description: Legacy Oktoberfest Open presented by Gamma Pickleball hosted by Tyson Apostol.
                                Rockin’ Protein Pickleball Center Bank Park powered by Legacy Sports Philippines, Mesa.</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-6">
                            <a href="view_tourna"><button type="button" class="btn btn-primary w-50">View Tournament</button></a>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-primary w-50" data-bs-toggle="modal" data-bs-target="#regform">Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col my-4">
            <div class="card h-100">
                <div class="card-header">
                    <h4 class="fw-bold text-center">Club Member Recruitment</h4>
                </div>
                <div class="card-body">
                    <img src="/image/gallery/image6.jfif" class="card-img-top w-100" style="height: 500px;" />
                    <h5 class="card-title my-3">Asingan Pickleball Club</h5>
                    <p class="card-text">
                        MARCELLO MOLINARI
                        NEW COUNTRY CLUB - PICKLEBALLROMA
                    </p>
                </div>
                <div class="card-footer text-center d-flex justify-content-evenly">
                    <button class="btn btn-primary w-25" type="button">Join</button>
                    <button class="btn btn-primary w-25" type="button">View Club</button>
                </div>
            </div>
        </div>
        <div class="col my-4 ">
            <div class="card">
                <div class="card-header">
                    <h4 class="fw-bold text-center"> EVENT 1</h4>
                </div>
                <div class="card-body">
                    <img src="/image/events/pkb1.jpg" class="card-img-top w-100" style="height: 500px;" />
                </div>
                <div class="card-footer text-center d-flex justify-content-evenly">
                    <button class="btn btn-primary w-50" type="button">View Event</button>
                </div>
            </div>
        </div>
        <div class="col my-4 ">
            <div class="card">
                <div class="card-header">
                    <h4 class="fw-bold text-center"> EVENT 2</h4>
                </div>
                <div class="card-body">
                    <img src="/image/events/pkb2.png" class="card-img-top w-100" style="height: 500px;" />
                </div>
                <div class="card-footer text-center d-flex justify-content-evenly">
                    <button class="btn btn-primary w-50" type="button">View Event</button>
                </div>
            </div>
        </div>
        <div class="col my-4 ">
            <div class="card">
                <div class="card-header">
                    <h4 class="fw-bold text-center"> EVENT 3</h4>
                </div>
                <div class="card-body text-center">
                    <img src="/image/events/pkb3.jpg" class="card-img-top w-50" style="height: 500px;" />
                </div>
                <div class="card-footer text-center d-flex justify-content-evenly">
                    <button class="btn btn-primary w-50" type="button">View Event</button>
                </div>
            </div>
        </div>
        <div class="col my-4 ">
            <div class="card">
                <div class="card-header">
                    <h4 class="fw-bold text-center"> EVENT 4</h4>
                </div>
                <div class="card-body">
                    <img src="/image/events/pkb4.jpg" class="card-img-top w-100" style="height: 500px;" />
                </div>
                <div class="card-footer text-center d-flex justify-content-evenly">
                    <button class="btn btn-primary w-50" type="button">View Event</button>
                </div>
            </div>
        </div>
        <div class="col my-4 ">
            <div class="card">
                <div class="card-header">
                    <h4 class="fw-bold text-center"> EVENT 5</h4>
                </div>
                <div class="card-body">
                    <img src="/image/events/pkb5.jpg" class="card-img-top w-100" style="height: 500px;" />
                </div>
                <div class="card-footer text-center d-flex justify-content-evenly">
                    <button class="btn btn-primary w-50" type="button">View Event</button>
                </div>
            </div>
        </div>
        <div class="col my-4 ">
            <div class="card">
                <div class="card-header">
                    <h4 class="fw-bold text-center"> EVENT 6</h4>
                </div>
                <div class="card-body">
                    <img src="/image/events/pkb6.jpg" class="card-img-top w-100" style="height: 500px;" />
                </div>
                <div class="card-footer text-center d-flex justify-content-evenly">
                    <button class="btn btn-primary w-50" type="button">View Event</button>
                </div>
            </div>
        </div>
    </div>

    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</body>

</html>