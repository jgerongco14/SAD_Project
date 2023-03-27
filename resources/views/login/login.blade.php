<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @extends('extentions.bootstrap_links')
    @section('bootstrap_links')
    @endsection
</head>

<body>
    @extends('partials.navbar')
    @section('content')
    <br><br>
    <div class="container-fluid bg-dark">
        <div class="row mt-2">
            <div class="col-3 bg d-flex justify-content-center align-items-center ">
                <h4 class="fw-bold text-center " style="color: white">“Pickleball is cheaper than therapy.”</h4>
            </div>
            <div class="col-9 d-flex justify-content-center align-items-center">
                <div class="card">
                    <div class="card-body">
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <div class="col-10">
                                    <h4 class="fw-bold my-3">LOGIN TO ACCOUNT</h4>
                                    <div class="form-group">
                                        <h6 class="fw-bold my-3">Username</h6>
                                        <input class="form-control " placeholder="username" type="text" name="username">
                                    </div>
                                    <h6 class="fw-bold my-3">Password</h6>
                                    <div class="form-group input-group mb-3">
                                        <input type="password" class="form-control" id="password" name="password" />
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <a href="#" id="icon-click">
                                                    <i class="fa fa-fw field-icon toggleIcon fa-eye-slash">
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-end my-2">
                                    <div class="col-3">
                                        <a href="#">Forgot your password?</a>
                                    </div>
                                </div>
                                <div class="row justify-content-center my-4">
                                    <div class="col-6 d-flex justify-content-center">
                                        <button class="btn btn-warning w-50 fw-bold" type="submit">SIGN UP</button>
                                    </div>
                                    <div class="col-6  d-flex justify-content-center">
                                        <button class="btn btn-warning w-50 fw-bold" type="submit">LOGIN</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the toggle icon element
            var toggleIcon = document.querySelector('.toggleIcon');

            // Get the password input element
            var password = document.querySelector('#password');

            // Add event listener for click event on toggle icon
            toggleIcon.addEventListener('click', function(e) {
                // Toggle the eye icon class
                toggleIcon.classList.toggle('fa-eye');
                toggleIcon.classList.toggle('fa-eye-slash');

                // Toggle the type attribute of the password input element
                var type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
            });
        });

    </script>
</body>

</html>