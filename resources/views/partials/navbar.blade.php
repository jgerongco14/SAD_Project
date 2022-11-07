<!-- modal for login -->
<div class="container">
  <div class="row">
    <div class="col">
      <div class="modal fade" id="login">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
              <h4>LOGIN</h4>
            </div>
            <div class="modal-body">
              <h6 class="text-start">Please sign in here if you have an existing player account:</h6>
              <br>
              <div class="row">
                <div class="col">
                  <form class="d-flex mb-2">
                    <h6 class="m-2">Username:</h6>
                    <input class="form-control me-2 " type="text" placeholder="username" aria-label="username">
                  </form>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <form class="d-flex mb-2">
                    <h6 class="m-2">Password: </h6>

                    <input class="form-control me-2 " data-bs-toggle="password" type="password" placeholder="password" aria-label="password">

                  </form>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <p><a href="#">Forgot your password?</a></p>
                </div>
              </div>
            </div>
            <div class="modal-footer d-flex justify-content-evenly">

              <button class="btn btn-warning " type="submit">CANCEL</button>
              <button class="btn btn-warning " type="submit">LOGIN</button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- modal for asking to create account -->
<div class="container">
  <div class="row">
    <div class="col">
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
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

              <button class="btn btn-warning " type="submit">CANCEL</button>
              <button class="btn btn-warning " type="submit">CREATE AN ACCOUNT</button>

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
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
              <h4> Create Account</h4>
            </div>
            <div class="modal-body">
              <h6 class="text-start">Please fill out all of the required fields.</h6>
              <br>
              <div class="row">
                <div class="col">
                  <form class="d-flex">
                    <h6 class="w-50 mt-2">First Name:</h6>
                    <input class="form-control" type="text">
                    <h6 class="w-50 mt-2 ms-3">Last Name:</h6>
                    <input class="form-control" type="text">
                  </form>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10">
                  <form class="d-flex">
                    <h6 class="w-50 mt-2">Contact No:</h6>
                    <input class="form-control" type="text">
                    <h6 class=" mt-2 mx-5">Sex:</h6>
                    <div class="form-check form-check-inline mt-1">
                      <input class="form-check-input" type="radio" name="sex"  value="Male">
                      <label class="form-check-label" >Male</label>
                    </div>
                    <div class="form-check form-check-inline mt-1">
                      <input class="form-check-input" type="radio" name="sex"  value="Female">
                      <label class="form-check-label" >Female</label>
                    </div>
                  </form>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <form class="d-flex">
                    <h6 class="me-5 mt-2">Address:</h6>
                    <textarea class="form-control" rows="3"></textarea>
                  </form>
                </div>
              </div>
            </div>
            <div class="modal-footer d-flex justify-content-evenly">

              <button class="btn btn-warning " type="submit">CANCEL</button>
              <button class="btn btn-warning " type="submit">LOGIN</button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
          <a class="nav-link active" href="#">Clubs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Help</a>
        </li>
      </ul>
      <form class="d-flex mx-2" role="search">
        <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <button type="button" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#login">Login</button>
      <button type="button" class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#reg">Sign Up</button>
    </div>
  </div>
  </div>
</nav>

@yield('content')