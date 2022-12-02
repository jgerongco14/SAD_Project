<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Pickleball</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>

<body>

    @extends('partials.navbar')
    @section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h4 class="text-center m-4">About Pickleball</h4>
            </div>
        </div>
        <div class="row">
            <div class="col bg-dark">
                <h5 class="ms-3 mt-1" style="color: white;">History About Pickleball</h5>
            </div>
        </div>
        <div class="row ">
            <div class="col bgpic bg-dark d-flex align-items-end" style="height: 70vh;">
                <div class="col mb-5 ms-5">
                    <h3 class="mx-3 text-decoration-underline" style="color: white;">WHO INVENTED PICKLEBALL?</h3>
                    <p class="mt-3 mx-3" style="color: white;">
                        Pickleball was founded by <br>
                        Joel Pritchard, Bill Bell and Barney McCallum <br>
                        on Bainbridge Island, Washington
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row d-flex">
            <div class="col">
                <h1 class="mt-2 fw-bold">What is Pickleball?</h1><br>
                <p class="mt-1">Fun, friendly, and social. The game's rules are straightforward,
                    and it's simple for new players to pick up, but for seasoned players,
                    it can quickly turn into a brisk, competitive, fast-paced game.</p>
            </div>
            <div class="col">
                <h1 class="mt-2 fw-bold">Basics of Pickleball</h1><br>
                <p>
                    1. A fun sport that incorporates many aspects of ping-pong, badminton, and tennis. <br>
                    2. Played on a badminton-sized court with a slightly modified tennis net, either indoors or outdoors. <br>
                    3. Used a paddle and a plastic ball with holes to play the game. <br>
                    4. Either in doubles or singles play. <br>
                    5. Can be enjoyed by people of all ages and abilities. <br>
                </p>
            </div>
        </div>
        <div class="row">
            <h1 class="fw-bold">History</h1><br>
            <div class="col">
                <br>
                <p>
                    Joel Pritchard, Bill Bell, and Barney McCallum established pickleball in the summer
                    of 1965 on Bainbridge Island in Washington. In a matter of days, Joan Pritchard
                    came up with the moniker "pickle ball," which was a play on the thrown-together
                    discarded non-starters in the crew races' "pickle boat." Years later, when the sport
                    gained popularity, a debate erupted after some neighbors claimed to have been present
                    when Joan named the activity after the family dog Pickles. The dog appeared a few years
                    later and was given the game's name, Joan and the Pritchard family have maintained for decades.
                </p>

                <p>
                    Unquestionably, Joan Pritchard invented pickleball in the summer of 1965, and she also
                    gave it its name. The dog story might be genuine if Pickles was still alive at the time.
                    The dog story would be proven to be a humorous newspaper interview hoax—later admitted by
                    Joel Pritchard—if Pickles wasn't born until after 1965.
                </p>

                <p>
                    The two-story name controversy might be resolved with evidence of Pickles' birthdate.
                    We made the decision to research the past and report the truth as the official magazine of
                    pickleball, regardless of the venerable feathers being ruffled. We searched for dog records,
                    found pictures, and spoke with a number of people who lived there between 1965 and 1970.
                    We discovered the dog was born in 1968, three years after pickleball was invented and given its
                    name, according on the data. In other words, the Pritchard family lore that pickleball was
                    originally called pickle boat racing rather than after the dog is true.
                </p><br>
            </div>
        </div>
        <h1 class="fw-bold text-center">Needs in playing Pickleball</h1><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card-body">
                    <img src="/image/court.jpg" class="img-thumbnail rounded w-100">
                    <h5 class="card-title fw-bold my-3">Pickleball Court</h5>
                    <p class="card-text mt-2 mx-2">
                        Pickleball is played on a rectangular 44’ by 20’ court. The court is divided into two sides by a low net.
                        <br><br>
                        There are two sidelines (orange lines), two baselines (orange lines), a centerline on each side (blue lines), as well as two non-volley lines (white lines), which creates an area affectionately called the “Kitchen” in Pickleball.
                        <br> <br>
                        The center line divides each side into two service courts, the left service court and the right service court. This allows players to know where to serve the ball and where to stand when serving.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card-body ">
                    <img src="/image/paddle.jpg" class="img-thumbnail rounded">
                    <h5 class="card-title fw-bold my-3">Pickleball Paddle</h5>
                    <p class="card-text mt-2 mx-2">
                        Paddles were originally entirely composed of wood, but they have significantly changed
                        through time and are now mostly constructed of lightweight
                        <br><br>
                        The weight of a pickleball paddle, which can range from 6 to 14 ounces, will affect its
                        power and control. You have more control but less drive with a lighter paddle. A heavier
                        paddle, on the other hand, gives you more power and drive but less control.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-body">
                    <img src="/image/ball.jpg" class="img-thumbnail rounded w-100">
                    <h5 class="card-title fw-bold my-3">Pickleball Ball or "Wiffle Ball"</h5>
                    <p class="card-text mt-2 mx-2">
                        Pickleball employs plastic balls with perforations rather than the felt-covered
                        tennis balls that you would often encounter. These balls travel through the air
                        more cleaner than a tennis ball because they are much lighter and the holes create
                        less drag. Most people would call this type of ball a "wiffle ball."
                    </p>
                </div>
            </div>
        </div>
        <br>
        <h1 class="fw-bold text-center">How to Play</h1><br>
        <div class="row">
            <h2 class="fw-bold">Matches</h2><br>
            <div class="col d-flex justify-content-center align-items-center">
                <p>The best two out of three games rule is used in matches. Each game lasts eleven points, with a two-point victory. Alternatively, if you are playing a game that goes to fifteen points, win by two.
                    <br><br>
                    Both singles and doubles can be played in pickleball, with doubles being the most common. The rules for singles and doubles are the same, however the scoring is a little different.
                </p>
            </div>
            <div class="col embed-responsive embed-responsive-16by9 d-flex justify-content-center align-items-center">
                <iframe width="600" height="300" class="embed-responsive-item" src="https://www.youtube.com/embed/kqLRRNOpe8U" allowfullscreen></iframe>
            </div>
        </div>
        <br>
        <div class="row my-3">
            <h2 class="fw-bold mt-3">The Serve</h2>
            <div class="col embed-responsive embed-responsive-16by9 mt-3 d-flex justify-content-center align-items-center">
                <iframe width="600" height="300" class="embed-responsive-item" src="https://www.youtube.com/embed/X2FQHZ3abqk" allowfullscreen></iframe>
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <p>A serve signals the beginning of the game. At the start of a game or during a side-out,
                    the player who is standing in the appropriate service court is always the first server.
                    The server is required to call the score before serving. Visit our Pickleball Scoring
                    video for additional details on scoring.
                    <br><br>
                    Pickleball serves must be delivered cross-court from behind the baseline into the service
                    court of the opposing team. The serve must avoid touching the kitchen and must clear the
                    net. The ball may occasionally strike the net but still land in the appropriate serving
                    court. The server must repeat his serve until he does so correctly, smashes the ball
                    into the net, or sends it out of bounds. This is known as a let. It is a mistake if
                    the ball strikes the net and lands in the kitchen.
                </p>
            </div>
        </div>

        <div class="row my-3">
            <h2 class="fw-bold mt-3">The Double Bounce</h2><br>
            <div class="col d-flex justify-content-center align-items-center">
                <p>The double bounce rule is a crucial aspect of pickleball. Before either team may begin
                    volleying the ball in the air, the double bounce rule states that the ball must bounce
                    once on each side.
                    <br><br>
                </p>
            </div>
            <div class="col embed-responsive embed-responsive-16by9 mt-3 d-flex justify-content-center align-items-center">
                <iframe width="600" height="300" class="embed-responsive-item" src="https://www.youtube.com/embed/YFiMmoNS6vY" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row my-3">
            <h2 class="fw-bold mt-3">The Return of Serve</h2><br>
            <div class="col embed-responsive embed-responsive-16by9 mt-3 d-flex justify-content-center align-items-center">
                <iframe width="600" height="300" class="embed-responsive-item" src="https://www.youtube.com/embed/Yb_awnQ-qzw" allowfullscreen></iframe>
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <p>In either service court, the player returning the serve must allow the ball to bounce
                    before returning it to the side of the opposing team.
                    <br><br>
                </p>
            </div>
        </div>
        <div class="row my-3">
            <h2 class="fw-bold mt-3">Kitchen</h2><br>
            <div class="col d-flex justify-content-center align-items-center">
                <p>The non-volley zone, commonly referred to as the Kitchen, is one of Pickleball's
                    distinctive but significant features. In the kitchen, players are not permitted
                    to hit the ball unless it has already landed on their side. To play Pickleball,
                    players are not permitted to enter the kitchen. Even if their momentum leads them
                    into the zone, players are not permitted to enter the kitchen on a volley.
                    <br><br>
                </p>
            </div>
            <div class="col mt-3">
                <div class="col embed-responsive embed-responsive-16by9 d-flex justify-content-center align-items-center">
                    <iframe width="600" height="300" class="embed-responsive-item" src="https://www.youtube.com/embed/5sKMsK2C-fY" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="row my-3">
            <h2 class="fw-bold mt-3">Faults</h2><br>
            <div class="col embed-responsive embed-responsive-16by9 mt-3 d-flex justify-content-center align-items-center">
                <iframe width="600" height="300" class="embed-responsive-item" src="https://www.youtube.com/embed/E1YXeXXr0nA" allowfullscreen></iframe>
            </div>
            <div class="col justify-content-center align-items-center">
                <p>Faults are mistakes in pickleball. When a rally is in progress, there are
                    a number of significant mistakes that can be made.
                </p>
                <p class="ms-4">
                    <span class="fw-bolder">-</span> Double-Bounce Rule: At the start of a rally, hitting a volley before the ball has at least one bounce on a side.
                    <br><br>
                    <span class="fw-bolder">-</span> Before being struck, the ball can bounce once on either side. A mistake has occurred if the ball bounces more than once.
                    <br><br>
                    <span class="fw-bolder">-</span> A mistake is making the ball go out of bounds. A ball is in or out on a line depending on where its center makes contact with the ground.
                    <br><br>
                    <span class="fw-bolder">-</span> It is a mistake if the ball is hit into the net.
                    <br><br>
                    <span class="fw-bolder">-</span> Any plays that require entering the kitchen to hit a volley are mistakes.
                </p>
            </div>
        </div>
    </div>

    @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</body>

</html>