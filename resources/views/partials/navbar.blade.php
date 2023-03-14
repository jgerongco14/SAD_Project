<!-- modal for login -->
<div class="container">
<<<<<<< HEAD
  <div class="row">
    <div class="col">
=======
  <div class="col">
    <form action="">
>>>>>>> master
      <div class="modal fade" id="login">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
              <h4>LOGIN</h4>
            </div>
<<<<<<< HEAD
            <div class="modal-body">
              <h6 class="text-start">Please sign in here if you have an existing player account:</h6>
              <br>

              <div class="col">
                <form>
                  <div class="input-group">
                    <span class="input-group-text">Username</span>
                    <input type="text" class="form-control" placeholder="username">
                  </div>
                </form>
              </div>


              <div class="col my-3">
                <form>
                  <div class="input-group">
                    <span class="input-group-text"> Password</span>
                    <input class="form-control" data-bs-toggle="password" type="password" placeholder="password" aria-label="password">
                  </div>
                </form>
              </div>

              <div class="row">
                <div class="col">
                  <p><a href="#">Forgot your password?</a></p>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-warning w-25 fw-bold" type="submit" data-bs-dismiss="modal">CANCEL</button>
              <button class="btn btn-warning w-25 fw-bold" type="submit">LOGIN</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

=======
            <div class="modal-body d-grid gap-3">
              <h6 class="text-start">Please sign in here if you have an existing player account:</h6>
              <div class="row justify-content-center">
                <div class="col-10 form-group">
                  <h6 class="fw-bold">Username</h6>
                  <input class="form-control " placeholder="username" type="text">
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-10 form-group">
                  <h6 class="fw-bold">Password</h6>
                  <input class="form-control" data-bs-toggle="password" type="password" placeholder="password" aria-label="password">
                </div>
              </div>
              <div class="row justify-content-end">
                <div class="col-5">
                  <a href="#">Forgot your password?</a>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-warning w-25 fw-bold" type="submit" data-bs-dismiss="modal">CANCEL</button>
                  <button class="btn btn-warning w-25 fw-bold" type="submit">LOGIN</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>




>>>>>>> master
<!-- modal for asking to create account -->
<div class="container">
  <div class="row">
    <div class="col">
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
              <h4>Create Account</h4>
            </div>
            <div class="modal-body">
              <h5 class="text-start">New Account</h5>
              <p>To continue, click the Create New Account button below
                to officially register.
              </p>
            </div>
            <div class="modal-footer d-flex justify-content-evenly">

              <button class="btn btn-warning w-25 fw-bold" type="submit" data-bs-dismiss="modal">CANCEL</button>
              <button class="btn btn-warning w-25 fw-bold" type="submit" data-bs-toggle="modal" data-bs-target="#reg">CREATE AN ACCOUNT</button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- modal for registration -->
<div class="container">
  <div class="row">
    <div class="col">
      <div class="modal fade" id="reg">
<<<<<<< HEAD
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
=======
        <div class="modal-dialog modal-dialog-centered">
>>>>>>> master
          <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
              <h4> Create Account</h4>
            </div>
            <div class="modal-body d-grid gap-3">
<<<<<<< HEAD
              <h5 class="text-start">Please fill out all of the required fields.</h5>
              <div class="row">
                <div class="col">
                  <form>
                    <h6 class="me-3">First Name</h6>
                    <input class="form-control " type="text">
                  </form>
                </div>
                <div class="col">
                  <form>
                    <h6 class="me-3">Last Name</h6>
                    <input class="form-control " type="text">
                  </form>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <form>
                    <h6 class="me-3">Contact Number</h6>
                    <input class="form-control " type="text">
                  </form>
                </div>
                <div class="col">
                  <h6 class="me-3">Sex</h6>
                  <div class="form-check form-check-inline mt-1">
                    <input class="form-check-input" type="radio" name="sex" value="Male">
                    <label class="form-check-label">Male</label>
                  </div>
                  <div class="form-check form-check-inline mt-1">
                    <input class="form-check-input" type="radio" name="sex" value="Female">
                    <label class="form-check-label">Female</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <form>
                  <h6 class="me-3">Address</h6>
                  <input class="form-control" type="text">
                </form>
              </div>
              <div class="row">
                <div class="col">
                  <form>
                    <h6 class="me-3">City</h6>
                    <input class="form-control " type="text">
                  </form>
                </div>
                <div class="col">
                  <form>
                    <h6 class="me-3">Region</h6>
                    <input class="form-control " type="text">
                  </form>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <form>
                    <h6 class="me-3">Birthday</h6>
                    <input class="form-control " type="text">
                  </form>
                </div>
                <div class="col">
                  <form>
                    <h6 class="me-3">Role</h6>
                    <select class="form-select">
                      <option selected>Select</option>
                      <option value="1">Player</option>
                      <option value="2">Coach</option>
                      <option value="3">Playing Coach</option>
                    </select>
                  </form>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <form>
                    <h6 class="me-3">Email</h6>
                    <input class="form-control " type="text">
                  </form>
                </div>
                <div class="col">
                  <form>
                    <h6 class="me-3">Nickname</h6>
                    <input class="form-control " type="text">
                  </form>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <form>
                    <h6 class="me-3">Password</h6>
                    <input class="form-control " type="text">
                  </form>
                </div>
                <div class="col">
                  <form>
                    <h6 class="me-3">Confirm Password</h6>
                    <input class="form-control " type="text">
                  </form>
                </div>
              </div>
            </div>
            <div class="modal-footer d-flex justify-content-evenly">

              <button class="btn btn-warning w-25 fw-bold" type="submit" data-bs-dismiss="modal">CANCEL</button>
              <button class="btn btn-warning w-25 fw-bold" type="submit">REGISTER</button>

=======
              <form action="{{route('registerUser')}}" method="POST">
                
                <div class="row justify-content-center">
                  <div class="col-9">
                    <div class="form-group">
                      <h6 class="fw-bold">Username</h6>
                      <input class="form-control " type="text">
                      <span class="text-danger">@error('name') {{$message}} @enderror</span>
                    </div>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-9">

                    <h6 class="fw-bold">Password</h6>
                    <div class="form-group input-group mb-3">
                      <input type="password" class="form-control " id="password" />
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <a href="#" id="icon-click">
                            <i class="fa fa-fw field-icon toggleIcon fa-eye-slash">
                            </i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-9">

                    <h6 class="fw-bold">Confirm Password</h6>
                    <input class="form-control " type="text">

                  </div>
                </div>
                <div class="modal-footer d-flex justify-content-evenly">

                  <button class="btn btn-warning w-25 fw-bold" type="button" data-bs-dismiss="modal">CANCEL</button>
                  <button class="btn btn-warning w-25 fw-bold" type="submit">REGISTER</button>

                </div>
              </form>
>>>>>>> master
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<<<<<<< HEAD
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx">
        <li class="nav-item">
          <a class="nav-link active" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/clubs">Clubs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Help</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/about">About Pickleball</a>
        </li>
      </ul>
      <form class="d-flex mx-2" role="search">
        <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <button type="button" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#login">Login</button>
      <button type="button" class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#myModal">Sign Up</button>
    </div>
  </div>
  </div>
=======

  <script>
    const togglebutton = document.querySelector(".toggleIcon");
    const password = document.querySelector("#password");
    togglebutton.addEventListener('click', function(e) {
      const type = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);
      this.classList.toggle('fa-eye');
    });
  </script>


<!-- <div class="container">
  @if(count($errors) > 0)

  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $errors)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif

  @if(\Session::has('success'))
  <div class="alert alert-success">
    <p>{{\Session::get('success')}}</p>
  </div>
  @endif
</div> -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">LOGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx">
          <li class="nav-item">
            <a class="nav-link active" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/clubs">Clubs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/about">About Pickleball</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/admin">Administrator</a>
          </li>
        </ul>
        <form class="d-flex mx-2" role="search">
          <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <button type="button" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#login">Login</button>
        <button type="button" class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#myModal">Sign Up</button>
      </div>
    </div>
</div>
>>>>>>> master
</nav>

@yield('content')