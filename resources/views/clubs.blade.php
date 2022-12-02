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

    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top" alt="Hollywood Sign on The Hill" />
                        <h5 class="card-title my-3">Asingan Pickleball Club</h5>
                        <p class="card-text">
                            MARCELLO MOLINARI
                            NEW COUNTRY CLUB - PICKLEBALLROMA
                            MAY 05, 2023 TO MAY 07, 2023
                            TIER 2
                            TOURNAMENT
                        </p>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">Join</button>
                            <button class="btn btn-primary" type="button"> REG. DEADLINE DATE
                                APR 08, 2023</button>
                        </div>
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