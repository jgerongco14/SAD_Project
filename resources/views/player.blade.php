<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/cp.css') }}">
</head>

<body>

    @extends('partials.navbar')
    @section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        19031 PLAYERS
                    </th>
                    <th>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle text-center"><img src="/image/pro_icon.png" class="img-bot"></td>
                    <td class="align-middle">
                        <p class="text-decoration-underline">SAMANTHA ELECHICON</p>
                        <p class="mt-1"><span>CITY:</span> Davao City <br>
                            <span>IFP RATING:</span> 1.5 <br>
                            <span> PLAYER TYPE:</span> Singles OR Doubles
                        </p>
                    </td>
                    <td class="align-middle">
                        <p class="text-center">SEND MESSAGE</p>
                        <div class="row text-center">
                            <div class="col">
                                <p>1</p>
                            </div>
                            <div class="col">
                                <p>2</p>
                            </div>
                            <div class="col">
                                <p>3</p>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</body>

</html>