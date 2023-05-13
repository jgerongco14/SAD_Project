<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" \>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @extends('extentions.bootstrap_links')
    @section('bootstrap_links')
    @endsection
</head>

<body>
    @extends('partials.navbar')
    @section('content')
    <br>
    <div class="container mt-5">
        <div class="col d-flex justify-content-end">
            <a href="{{ route('admin') }}"><button class="btn btn-secondary " type="button">Back</button></a>
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
                                Registration Fee
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
                            <td>{{ $data['registration_fee'] }}</td>
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
        </div>
    </div>
    @endsection

</body>

</html>