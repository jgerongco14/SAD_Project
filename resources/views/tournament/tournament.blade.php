<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournament</title>
    <link rel="stylesheet" href="{{ asset('css/tourna.css') }}">
    @extends('extentions.bootstrap_links')
    @section('bootstrap_links')
    @endsection
</head>

<body>
    @extends('partials.navbar')
    @section('content')
    <br><br>
    <div class="container-fluid ">
        <div class="row bg align-items-center" style="height: 70vh; padding-bottom: 50px;">
            <div class="col-md-6">
                <h1 style="color: white; font-size: 50;"> <span>Tournament</span> </h1>
                <p style="color: white;">Davao Dinkers Club | Pickleball Partners<br></p>
                <a href="{{ route('displayTourna') }}"><button class="btn btn-warning" type="button">View Tournament</button></a>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body bg-dark top">
                        <h6 class="card-title " style="color: white;">Now playing - Wed, Sep 28</h6>
                    </div>
                    <div class="card-body">
                        <p>UIC Pickleball Club hosted by Davao Dinker’s Club</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bot-line">
        <div class="line"></div>
    </div>

    <div class="container-fluid my-3">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col" style="text-align: center; ">
                            <button class="btn btn-warning bot-btn  " type="button">
                                <div class="col d-flex align-items-center justify-content-center my-2">
                                    <img src="/image/logo1.png" style="height: 50px; width: 50px;" class="img-bot">
                                    <h5 class="fw-bold mx-3">VS</h5>
                                    <img src="/image/logo1.png" style="height: 50px; width: 50px;" class="img-bot">
                                </div>
                                <h5>Tournament 1</h5>
                            </button>
                        </div>
                        <div class="col" style="text-align: center; ">
                            <button class="btn btn-warning bot-btn  " type="button">
                                <div class="col d-flex align-items-center justify-content-center my-2">
                                    <img src="/image/logo1.png" style="height: 50px; width: 50px;" class="img-bot">
                                    <h5 class="fw-bold mx-3">VS</h5>
                                    <img src="/image/logo1.png" style="height: 50px; width: 50px;" class="img-bot">
                                </div>
                                <h5>Tournament 2</h5>
                            </button>
                        </div>
                        <div class="col" style="text-align: center; ">
                            <button class="btn btn-warning bot-btn  " type="button">
                                <div class="col d-flex align-items-center justify-content-center my-2">
                                    <img src="/image/logo1.png" style="height: 50px; width: 50px;" class="img-bot">
                                    <h5 class="fw-bold mx-3">VS</h5>
                                    <img src="/image/logo1.png" style="height: 50px; width: 50px;" class="img-bot">
                                </div>
                                <h5>Tournament 3</h5>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="carousel-item ">
                    <div class="row">
                        <div class="col" style="text-align: center; ">
                            <button class="btn btn-warning bot-btn  " type="button">
                                <img src="/image/logo1.png" style="height: 50px; width: 50px;" class="img-bot">
                                <h5>Tournament 4</h5>
                            </button>
                        </div>
                        <div class="col" style="text-align: center; ">
                            <button class="btn btn-warning bot-btn  " type="button">
                                <img src="/image/logo1.png" style="height: 50px; width: 50px;" class="img-bot">
                                <h5>Tournament 5</h5>
                            </button>
                        </div>
                        <div class="col" style="text-align: center; ">
                            <button class="btn btn-warning bot-btn  " type="button">
                                <img src="/image/logo1.png" style="height: 50px; width: 50px;" class="img-bot">
                                <h5>Tournament 6</h5>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    @endsection
</body>

</html>