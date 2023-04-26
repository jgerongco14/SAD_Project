<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="/image/mainlogo.png" style="height: 50px; width: 80px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx">
                <li class="nav-item">
                    <a class="nav-link active" href="/home">Home</a>
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
            <div class="col-3">
                <ul class="navbar-nav">
                    <li class="nav-item"><img src="{{ (Auth::user()->photo) ? route('image.show') : asset('image/pro_icon.png') }}" class="rounded-circle" data-bs-toggle="dropdown" aria-expanded="false" class="img-drop" style="height: 40px; width: 50px;"></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white,">
                        {{$user->firstName}} '{{$user->alias}}' {{$user->lastName}} {{$user->suffix}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('my_profile') }}"><img src="/image/pro_icon.png" style="height: 30px; width: 35px;">My Profile</a></li>
                            <li><a class="dropdown-item" href="#"><img src="/image/logout.png" style="height: 30px; width: 35px;">Help</a></li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <img src="/image/logout.png" style="height: 30px; width: 35px;">Logout
                                </button>
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>



@yield('content')