<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    @extends('partials.navbar')
    @section('content')

    <div class="container-fluid mb-5 mt-5">
        <div class="row bg align-items-center" style="height: 90vh; padding-bottom: 50px;">
            <div class="col text-center">
                <h1 style="color: white; font-size: 50;"> <span>Pickleball</span> </h1>
                <p style="color: white;">Davao Dinkers Club | Pickleball Partners<br></p>
                <a class="btn btn-warning w-25" href="" role="button">Get Started</a>
            </div>
        </div>
        <div class="col">
            <h1 class="fw-bold my-4 text-center rounded">Request to Approve</h1>
            <h2 class="fw-bold">Tournament</h2>
            <div class="overflow-auto mt-3" style="height: 70vh;">
                <table class="table text-center align-middle table-bordered ">
                    <thead class="bg-dark sticky-top" style="color:white;">
                        <tr>
                            <th>
                                Tournament ID
                            </th>
                            <th>
                                Tournament Logo
                            </th>
                            <th>
                                Tournament Title
                            </th>
                            <th>
                                Description
                            </th>
                            <th>
                                Organizer
                            </th>
                            <th>
                                Dates
                            </th>
                            <th>
                                Address
                            </th>
                            <th>
                                Proof of payment
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tournament as $data)
                        <tr>
                            <td>{{ $data['id'] }}</td>
                            <td><img src="{{ asset('storage/' . $data->tournament_logo) }}" width="100px" height="100px" data-bs-toggle="modal" data-bs-target="#tournament_logo{{ $data->id }}">
                                <div class="modal fade" id="tournament_logo{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img src="{{ asset('storage/' . $data->tournament_logo) }}" class="img-fluid" alt="Tournament logo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $data['tournament_title'] }}</td>
                            <td>{{ $data['tournament_description']}}</td>
                            <td>{{ $data['name_of_organizer'] }}</td>
                            <td>
                                <div class="d-flex flex-column">
                                    <div class="flex-grow-1 text-truncate">
                                        Actual Date of Tournament: {{ $data['date_of_the_tournament'] }}
                                    </div>
                                    <div class="flex-grow-1 text-truncate">
                                        Start Date of Registration: {{ $data['start_date_of_registration'] }}
                                    </div>
                                    <div class="flex-grow-1 text-truncate">
                                        End Date of Registration: {{ $data['end_date_of_registration'] }}
                                    </div>
                                </div>
                            </td>
                            <td>{{ $data['address']}} {{ $data['city']}} {{ $data['province']}}</td>
                            <td><img src="{{ asset('storage/' . $data->proof_of_payment) }}" width="100px" height="100px" data-bs-toggle="modal" data-bs-target="#proof_of_payment{{ $data->id }}">
                                <div class="modal fade" id="proof_of_payment{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img src="{{ asset('storage/' . $data->proof_of_payment) }}" class="img-fluid" alt="Tournament logo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <form action="{{ route('tournament_approve', ['id' => $data['id']]) }}" method="post">
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
                                    @method('put')
                                    <button type="submit" class="btn btn-primary mt-2" onclick="return confirm('Are you sure you want to Approve this Tournament?')">Approved</button>
                                </form>

                                <!-- 
                            <button type="submit" class="btn btn-danger">Decline</button> -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <h2 class="fw-bold mt-5">Club</h2>
            <div class="overflow-auto mt-3" style="height: 70vh;">
                <table class="table text-center align-middle table-bordered">
                    <thead class="bg-dark sticky-top" style="color:white;">
                        <tr>
                            <th>
                                No.
                            </th>
                            <th>
                                Logo
                            </th>
                            <th>
                                Club Name
                            </th>
                            <th>
                                Description
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-1">
                                1
                            </td>
                            <td class="col-1">
                                <img src="/image/pro_icon.png" class="img-fluid">
                            </td>
                            <td class="col-2">
                                Davao Pickleball Tournament 2022
                            </td>
                            <td class="col-5">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting, remaining essentially unchanged. It was popularised in
                                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.
                            </td>
                            <td class="col-1">
                                <div class="row d-flex justify-content-evenly">
                                    <button class="btn btn-primary w-75 my-2 bg-success" type="button">Accept</button>
                                    <button class="btn btn-primary w-75 my-2 bg-danger" type="button">Decline</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</body>

</html>