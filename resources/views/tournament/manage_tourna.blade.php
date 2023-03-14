<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Tournament</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    @extends('partials.navbar')
    @section('content')
    <br><br>
    <div class="container my-4">
        <div class="row">
            <div class="col-7">
                <div class="col text-center mt-3">
                    <h2 class="fw-bold">Create Tournament</h2>
                </div>
                <div class="col mt-3">
                    <h5 class="text-start">Please fill out all of the required fields.</h5>
                </div>
                <div class="col">
                    <form>
                        <p class="fw-bold">I. Tournament Details</p>
                        <h6 class="mt-3">Tournament Title:</h6>
                        <input class="form-control " type="text">
                        <h6 class="mt-3">Date and Time:</h6>
                        <input class="form-control " type="text">
                        <h6 class="mt-3">Tournament Address:</h6>
                        <div class="col mt-3">
                            <div class="input-group">
                                <span class="input-group-text">Address</span>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <div class="input-group">
                                    <span class="input-group-text">City</span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col mt-3">
                                <div class="input-group">
                                    <span class="input-group-text">Province</span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <h6 class="mt-3">Tournament Logo Image:</h6>
                        <input class="form-control " type="file">
                        <div class="row">
                            <div class="col mt-3">
                                <h6 class="mt-2">Tournament Category:</h6>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Category</option>
                                    <option value="1">Men's Singles</option>
                                    <option value="2">Women's Singles</option>
                                    <option value="2">Men's Doubles</option>
                                    <option value="2">Women's Doubles</option>
                                    <option value="3">Mix Doubles</option>
                                </select>
                            </div>
                            <div class="col mt-3">
                                <h6 class="mt-2">Age Range:</h6>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Age</option>
                                    <option value="1">10-13</option>
                                    <option value="2">14-17</option>
                                    <option value="2">18-29</option>
                                    <option value="2">30-40</option>
                                    <option value="3">40-60</option>
                                    <option value="3">61 and above</option>
                                </select>
                            </div>
                        </div>
                        <h6 class="mt-3">Tournament Description:</h6>
                        <textarea class="form-control" rows="3"></textarea>
                    </form>
                </div>
                <div class="col mt-3">
                    <form>
                        <p class="fw-bold">II. Tournament Organizer Details</p>
                        <h6 class="mt-3">Name of organization/club:</h6>
                        <input class="form-control " type="text">
                        <h6 class="mt-3">Name of organizer:</h6>
                        <input class="form-control " type="text">
                        <div class="row">
                            <div class="col">
                                <h6 class="mt-3">Contact Number:</h6>
                                <input class="form-control " type="text">
                            </div>
                            <div class="col">
                                <h6 class="mt-3">Email:</h6>
                                <input class="form-control " type="text">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col mt-3">
                    <form>
                        <p class="fw-bold">III. Tournament Description</p>
                        <h6 class="mt-3">Sponsor:</h6>
                        <input class="form-control " type="text">
                        <h6 class="mt-3">Poster:</h6>
                        <input class="form-control " type="file">
                        <h6 class="mt-3">Poster Title:</h6>
                        <input class="form-control " type="text">
                        <h6 class="mt-3">Poster Description:</h6>
                        <textarea class="form-control" id="" rows="3"></textarea>
                        <h6 class="mt-3">Picture of the Gcash QRCode:</h6>
                        <input class="form-control " type="file">
                    </form>
                </div>
                <div class="col mt-3">
                    <form>
                        <p class="fw-bold">IV. Payment</p>
                        <h6 class="mt-3">The tournament fee is 200 pesos hear is the gcash number 09215974197 please send the payment here.</h6>
                        <h6 class="mt-3">Send Proof of Payment:</h6>
                        <input class="form-control " type="file">
                        <div class="col mt-5 text-center">
                            <button type="button" class="btn btn-warning w-50">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-5 mt-3 text-center">
                <h2 class="fw-bold">My Tournament</h2>
                <div class="col mt-4">
                    <h5 class="text-start text-decoration-underline">Ongoing Tournament</h5>
                    <div class="card">
                        <div class="card-header fw-bold">
                            Date: 12/1/2022 - 12/30/2022
                        </div>
                        <div class="card-body">
                            <div class="col">
                                <div class="col">
                                    <img src="/image/logo1.png" class="img-fluid">
                                </div>
                                <div class="col mt-2 fw-bold text-center">
                                    <h4>Legacy Oktoberfest</h4>
                                </div>
                                <div class="col mt-2 fw-bold text-center">
                                    <a href="view_tourna"><button type="button" class="btn btn-primary w-50">View Tournament</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-4">
                    <h5 class="text-start text-decoration-underline">Future Tournament</h5>
                    <div class="card">
                        <div class="card-header fw-bold">
                            Date: 01/01/2023 - 01/30/2023
                        </div>
                        <div class="card-body">
                            <div class="col">
                                <div class="col">
                                    <img src="/image/logo1.png" class="img-fluid">
                                </div>
                                <div class="col mt-2 fw-bold text-center">
                                    <h4>Legacy Oktoberfest</h4>
                                </div>
                                <div class="col mt-2 fw-bold text-center">
                                    <a href="view_tourna"><button type="button" class="btn btn-primary w-50">View Tournament</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-4">
                    <h5 class="text-start text-decoration-underline">Ended Tournament</h5>
                    <div class="card">
                        <div class="card-header fw-bold">
                            Date: 11/1/2022 - 11/30/2022
                        </div>
                        <div class="card-body">
                            <div class="col">
                                <div class="col">
                                    <img src="/image/logo1.png" class="img-fluid">
                                </div>
                                <div class="col mt-2 fw-bold text-center">
                                    <h4>Legacy Oktoberfest</h4>
                                </div>
                                <div class="col mt-2 fw-bold text-center">
                                    <a href="view_tourna"><button type="button" class="btn btn-primary w-50">View Tournament</button></a>
                                </div>
                            </div>
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