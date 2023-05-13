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

    <div class="container-fluid mb-5 mt-5">
        <div class="col d-flex justify-content-end">
            <a href="{{ route('admin') }}"><button class="btn btn-secondary " type="button">Back</button></a>
        </div>
        <div class="col">
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
</body>

</html>