<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pickleball</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @extends('extentions.bootstrap_links')
    @section('css')
    @endsection
</head>

<body>

    @extends('partials.navbar')
    @section('content')

    <br><br>
    <div class="container-fluid">
        <div class="row bg align-items-center" style="height: 70vh; padding-bottom: 50px;">
            <div class="col-md-6">
                <h1 style="color: white; font-size: 50;"> <span>Pickleball</span> </h1>
                <p style="color: white;">Davao Dinkers Club | Pickleball Partners<br></p>
                <a class="btn btn-warning" href="/tournament" role="button">Featured Tournament</a>
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
        <div class="row bot-row">
            <div class="col-md-4" style="text-align: center; ">
                <a class="btn btn-warning bot-btn" href="/player" role="button">
                    <h4>Player</h4>
                    <img src="/image/player.png" class="img-bot">
                </a>
            </div>
            <div class="col-md-4" style="text-align: center;">
                <a class="btn btn-warning bot-btn" href="/coach" role="button">
                    <h4>Coaches</h4>
                    <img src="/image/coach.png" class="img-bot">
                </a>
            </div>
            <div class="col-md-4" style="text-align: center;">
                <a class="btn btn-warning bot-btn" href="/events" role="button">
                    <h4>Events</h4>
                    <img src="/image/events.png" class="img-bot">
                </a>
            </div>
        </div>
        <div class="line"></div>
    </div>
    @endsection

    @section('js')
    @endsection

</body>

</html>