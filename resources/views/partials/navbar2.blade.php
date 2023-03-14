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
            </ul>
            <form class="d-flex mx-2" role="search">
                <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div class="col-2">
                <div class="dropdown">
                    <img src="/image/pro_icon.png" type="button" data-bs-toggle="dropdown" aria-expanded="false" class="img-drop" style="height: 40px; width: 50px;">
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <h6 class="text-center">Rendel Jeff Gerongco</h6>
                        </li>
                        <li>
                            <p class="text-center">player</p>
                        </li>
                        <li><a class="dropdown-item" href="/my_profile"><img src="/image/pro_icon.png" style="height: 30px; width: 35px;">My Profile</a></li>
                        <li><a class="dropdown-item" href="#"><img src="/image/logout.png" style="height: 30px; width: 35px;">Help</a></li>
                        <li><a class="dropdown-item" href="#"><img src="/image/logout.png" style="height: 30px; width: 35px;">Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

@yield('content')