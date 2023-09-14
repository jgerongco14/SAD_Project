<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href=""><img src="/image/mainlogo.png" style="height: 50px; width: 80px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx">
                @auth
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('login') }}">Home</a>
                </li>
                @endguest
                @auth
                @if(auth()->user()->usertype === 'user')
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('viewListClubs') }}">Clubs</a>
                </li>
                @endif
                @endauth
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('galleryPage') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('aboutPickleBallPage')}}">About Pickleball</a>
                </li>
                @auth
                @if(auth()->user()->usertype === 'admin')
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('admin') }}">Management</a>
                </li>
                @endif
                @endauth

            </ul>

            <div class="col-3">
                <ul class="navbar-nav">
                    @auth
                    <li class="nav-item">
                        <a href="{{ route('my_profile') }}">
                            <img class="rounded-circle img-drop" name="profile_pic" id="profile_pic" style="height: 40px; width: 50px;" data-bs-toggle="dropdown" aria-expanded="false">
                        </a>
                    </li>
                    @endauth
                    </li>

                    <li class="nav-item dropdown">
                        @if(Auth::check())
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white,">
                            {{$user->firstName}} '{{$user->alias}}' {{$user->lastName}} {{$user->suffix}}
                        </a>
                        @endif
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('my_profile') }}"><img src="/image/pro_icon.png" style="height: 30px; width: 35px;">My Profile</a></li>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $.get('/profile_pic', function(data) {
            $('#profile_pic').attr('src', data.photo);
        });
    });
</script>