<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Name</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    @extends('partials.navbar2')
    @section('content')

    <div class="container my-5 ">
        <br>
        <div class="col-12">
            <div class="card">
                <img src="/image/gallery/image8.jfif" class="card-img-top w-100" style="height: 250px;" />
                <div class="card-body text-center">
                    <h4 class=fw-bold>DAVAO DRINKERS CLUB</h4>
                    <h5>Davao City</h5>
                </div>
            </div>
        </div>
        <div class="col mt-3">
            <h2 class="fw-bold">Club Members</h2>
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
                        <tr>
                            <td class="align-middle text-center"><img src="/image/pro_icon.png" class="img-bot"></td>
                            <td class="align-middle">
                                <p class="text-decoration-underline fw-bold">SAMANTHA ELECHICON</p>
                                <p class="mt-1"><span>CITY:</span> Davao City <br>
                                    <span>AGE:</span> 21 <br>
                                </p>
                            </td>
                            <td class="align-middle">
                                <p class="text-center">SEND MESSAGE</p>
                                <div class="row text-center">
                                    <div class="col">
                                        <a href="" type="btn"><img src="/image/insta.png" class="img-bot" style="height: 50px; width: 60px;"></a>
                                    </div>
                                    <div class="col">
                                        <a href="" type="btn"><img src="/image/facebook.png" class="img-bot" style="height: 50px; width: 60px;"></a>
                                    </div>
                                    <div class="col">
                                        <a href="" type="btn"><img src="/image/twitter.png" class="img-bot" style="height: 50px; width: 60px;"></a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>


        @endsection
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</body>

</html>