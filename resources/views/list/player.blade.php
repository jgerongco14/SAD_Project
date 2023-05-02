<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players</title>
    <link rel="stylesheet" href="{{ asset('css/cp.css') }}">
    @extends('extentions.bootstrap_links')
    @section('bootstrap_links')
    @endsection
</head>

<body>
    @extends('partials.navbar')
    @section('content')
    <br><br><br>
    <div class="container">
        <h1 class="text-center fw-bolder mt-3">Player List</h1>
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
                    @foreach ($users as $user)
                    <tr>
                        @if ($user->photo)
                        <td class="align-middle text-center"><img src="{{ route('image.show', ['id' => $user->id]) }}" style="height: 100px; width: 100px;" class="rounded-circle img-bot"></td>
                        @else
                        <td class="align-middle text-center"><img src="{{ asset('image/pro_icon.png') }}" style="height: 100px; width: 100px;" class="rounded-circle img-bot"></td>
                        @endif
                        <td class="align-middle">
                            <p class=" fw-bold">{{ $user['firstName'] }} '{{ $user['alias'] }}' {{ $user['middleInitial'] }} {{ $user['lastName'] }}</p>
                            <p class="mt-1"><span>CITY:</span> {{ $user['city'] }} <br>
                                <span>Role:</span> {{ $user['role'] }} <br>

                            </p>
                        </td>
                        <td class="align-middle">
                            <p class="text-center">SEND MESSAGE</p>
                            <div class="row text-center d-flex justify-content-center">
                                <div class="col-2">
                                    @if($user['instagramLink'])
                                    <a href="{{ $user['instagramLink'] }}" target="_blank"><img src="/image/insta.png" class="img-bot" style="height: 50px; width: 60px;"></a>
                                    @else
                                    <img src="/image/insta.png" class="img-bot" style="height: 50px; width: 60px;">
                                    @endif
                                </div>
                                <div class="col-2">
                                    @if($user['facebookLink'])
                                    <a href="{{ $user['facebookLink'] }}" type="btn" target="_blank"><img src="/image/facebook.png" class="img-bot" style="height: 50px; width: 60px;"></a>
                                    @else
                                    <img src="/image/facebook.png" class="img-bot" style="height: 50px; width: 60px;">
                                    @endif
                                </div>
                                <div class="col-2">
                                    @if($user['twitterLink'])
                                    <a href="{{ $user['twitterLink'] }}" type="btn" target="_blank"><img src="/image/twitter.png" class="img-bot" style="height: 50px; width: 60px;"></a>
                                    @else
                                    <img src="/image/twitter.png" class="img-bot" style="height: 50px; width: 60px;">
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection

</body>

</html>