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
    <div class="container-fluid bgcon">
        <div class="row mt-2">
            <div class="col-3 bg d-flex justify-content-center align-items-center ">
                <h4 class="fw-bold text-center " style="color: white">“Pickleball is cheaper than therapy.”</h4>
            </div>
            <div class="col-9 d-flex justify-content-center align-items-center">
                <div class="card h-75 w-75 bg-dark">
                    <div class="card-body overflow-auto bgcard">
                        <div class="col-12">
                            <form action="{{route('registerUser')}}" method="POST">
                                @csrf
                                @if (Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                                @endif
                                @if (Session::has('fail'))
                                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                @endif
                                <div class="row justify-content-center">
                                    <div class="col-10">
                                        <h4 class="fw-bold text-warning mt-3">REGISTRATION</h4>
                                        <br>
                                        <div class="form-group">
                                            <h6 class="fw-bold text-warning my-3">Alias</h6>
                                            <input class="form-control " placeholder="Alias" type="text" name="alias" value="{{old('alias')}}" required />
                                            <span class="text-danger"> @error('alias') {{$message}} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <h6 class="fw-bold text-warning my-3">Username</h6>
                                            <input class="form-control " placeholder="Username" type="text" name="username" value="{{old('username')}}" required />
                                            <span class="text-danger"> @error('username') {{$message}} @enderror</span>
                                        </div>
                                        <h6 class="fw-bold text-warning my-3">Password</h6>
                                        <div class="form-group input-group mb-3">
                                            <input type="password" class="form-control" placeholder="Password" id="password" name="password" value="{{old('password')}}" required />
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <a href="#" id="icon-click">
                                                        <i class="fa fa-fw field-icon toggleIcon fa-eye-slash">
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="text-danger"> @error('password') {{$message}} @enderror</span>
                                        <h6 class="fw-bold text-warning my-3">Confirm Password</h6>
                                        <div class="form-group input-group mb-3">
                                            <input type="password" class="form-control" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation" value="{{old('password')}}" required />
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <a href="#" id="icon-click">
                                                        <i class="fa fa-fw field-icon toggle_Icon fa-eye-slash">
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="text-danger"> @error('password') {{$message}} @enderror</span>
                                    </div>
                                    <div class="row text-center my-5">
                                        <div class="col-6">
                                            <a href="/login" class="btn btn-warning w-50 fw-bold">BACK</a>
                                        </div>
                                        <div class="col-6 ">
                                            <button class="btn btn-warning w-50 fw-bold" type="submit">REGISTER</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
            var ctoggleIcon = document.querySelector('.toggle_Icon');

            // Get the password input element
            var password = document.querySelector('#password');
            var cpassword = document.querySelector('#password_confirmation');

            // Add event listener for click event on toggle icon
            toggleIcon.addEventListener('click', function(e) {
                // Toggle the eye icon class
                toggleIcon.classList.toggle('fa-eye');
                toggleIcon.classList.toggle('fa-eye-slash');

                // Toggle the type attribute of the password input element
                var type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
            });
            ctoggleIcon.addEventListener('click', function(e) {
                // Toggle the eye icon class
                ctoggleIcon.classList.toggle('fa-eye');
                ctoggleIcon.classList.toggle('fa-eye-slash');

                // Toggle the type attribute of the password input element
                var type = cpassword.getAttribute('type') === 'password' ? 'text' : 'password';
                cpassword.setAttribute('type', type);
            });
        });
    </script>
</body>

</html>