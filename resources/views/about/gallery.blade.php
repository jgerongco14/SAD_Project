<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    @extends('partials.navbar')
    @section('content')
    <br><br>
    <div class="container my-5">
        <h1 class="fw-bolder text-center">PickleBall Gallery</h1>
        <div class="row my-3">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <img src="/image/gallery/image1.jpg" class="card-img-top w-100" style="height: 250px;" />
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <img src="/image/gallery/image2.jpg" class="card-img-top" style="height: 250px;" />
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <img src="/image/gallery/image3.jfif" class="card-img-top w-100" style="height: 250px;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <img src="/image/gallery/image4.jpeg" class="card-img-top w-100" style="height: 250px;" />
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <img src="/image/gallery/image5.jpg" class="card-img-top" style="height: 250px;" />
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <img src="/image/gallery/image6.jfif" class="card-img-top w-100" style="height: 250px;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <img src="/image/gallery/image7.jfif" class="card-img-top w-100" style="height: 250px;" />
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <img src="/image/gallery/image8.jfif" class="card-img-top" style="height: 250px;" />
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <img src="/image/gallery/image9.jfif" class="card-img-top w-100" style="height: 250px;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <img src="/image/gallery/image10.jfif" class="card-img-top w-100" style="height: 250px;" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascrip">

    </script>
</body>

</html>