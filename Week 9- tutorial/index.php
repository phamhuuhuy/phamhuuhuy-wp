<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Assignment 3</title>
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">

    <script src='../wireframe.js'></script>
    <script src="../a3/script.js"></script>
    <?php include 'tools.php'?>

</head>

<body class="bg-dark" data-spy="scroll" data-target=".navbar" data-offset="50">
    <header>
        <div class="jumbotron">
            <div class="row" style="margin-left: 100px;">
                <div class="col-xl-6" style="margin-bottom: 10px;">
                    <img src="logo.png" alt="logo cinemax">
                    <h2>The Cinemax</h2>
                </div>
                <div class="col-xl-6" style="margin-top: 50px;">
                    <div class="search">
                        <div class="input-append">
                            <input placeholder="Searching...">
                            <button type="button">
                                <i class='fas fa-search' style='font-size:20px'></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </header>

    <nav id="nav" class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <a class="navbar-brand" href=""><img src="pngwave.png" style="width: 50px; height: 50px;"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id='collapse_target'>
                <span class="navbar-text text-dark">The Cinemax</span>
                <ul class="navbar-nav" style="padding-left: 180px;">
                    <li class="nav-item" style="margin-right: 50px; transition-delay: 3s;">
                        <a href="#about_us" class="nav-link" id="about_us_nav">About Us</a>
                    </li>
                    <li class="nav-item" style="margin-right: 50px;">
                        <a href="#prices" class="nav-link" id="prices_nav">Prices</a>
                    </li>

                    <li class="nav-item" style="margin-left: 5px; padding-right: 50px;">
                        <a href="#now_showing" class="nav-link" id="now_showing_nav">Now Showing</a>
                    </li>

                    <li class="nav-item" id="li_dumbo" style="margin-left: 5px; padding-right: 50px;">
                        <a href="#Synopsis1" class="nav-link" id="now_showing_nav">Dumbo</a>
                    </li>

                    <li class="nav-item" id="li_endgame" style="margin-left: 5px; padding-right: 50px; display: none;">
                        <a href="#Synopsis2" class="nav-link" id="now_showing_nav">Avengers:End Game</a>
                    </li>

                    <li class="nav-item" id="li_topendwedding"
                        style="margin-left: 5px; padding-right: 50px; display: none;">
                        <a href="#Synopsis3" class="nav-link" id="now_showing_nav">Top End Wedding</a>
                    </li>

                    <li class="nav-item" id="li_thehappyprince"
                        style="margin-left: 5px; padding-right: 50px; display: none;">
                        <a href="#Synopsis4" class="nav-link" id="now_showing_nav">The Happy Price</a>
                    </li>

                    <li class="nav-item" id="li_booking" style="margin-left: 5px; padding-right: 50px;">
                        <a href="#booking_form" class="nav-link" id="now_showing_nav">Booking Form</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <article>
            <div class="parallax"></div>
            <div class='sub_parallax' id="about_us">
                <h4 style="margin-top: 50px;">About Us</h4>
                <img class="sticky1-top" src="dolby.png" alt="Avatar" style="margin-left: 30px;">
                <img class="sticky1-top" src="dolby3.jpg" alt="Avatar" style="margin-left: 30px;">
                <img class="sticky1-top" src="dolby2.jpg" alt="Avatar" style="margin-left: 30px;">
                <img class="sticky1-top" src="dolby4.png" alt="Avatar" style="margin-left: 30px;">
                <h5 style="margin-top: 10px ">Our strategic partners</h5>
                <a href="https://www.dolby.com/us/en/cinema">https://www.dolby.com/us/en/cinema</a>
                <br />
                <a href="https://www.profurn.com.au/shop/cinema">https://www.profurn.com.au/shop/cinema</a>
                <p><b>Our market expansion goal</b></p>
                <p style="font-family: arial, sans-serif;">The Cinemax is the world’s leading in cinebox and movie theatre.
                    Our
                    goal is to become the most
                    well-known movie company so that we could contribute to Viet Nam’s film industry. But due to the
                    rapid growth not only in young people but also adult’s need to watch movies. The cinema has reopened
                    after extensive improvements and renovations. The Cinemax created a unique concept in changing your
                    traditional and boring cinemas into joyful and fun experiences, where viewers come to enjoy movies
                    through advanced film technologies like SCREEN X, IMAX, 4Dx and our new upgraded projection and
                    sound systems with 3D Dolby Vision projection and Dolby Atmos sound. With Dolby Vision HDR, we bring
                    you extraordinary color contrast, and brightness to the screen, transforming your viewing
                    experiences to a whole new level. And with legendary engineering, now applied to the visual
                    experience, giving you a whole new standard for image quality. Dolby Atmos sound is what the future
                    sounds like, the sound moves around you in a three-dimensional space, so you feel like you’re in the
                    action, it also adds an overhead dimension created a full audio atmosphere and realistically
                    depicting objects moving overhead. Atmos produces breathtaking sound quality that will excite your
                    senses and inspires your emotions to deliver a full movie experience. In Cinemax, your comfort is
                    our priority, so we collab with Profurn, Australia and New Zealand’s preferred public seating
                    company. With over 15 years of industry experience, we guaranteed to give the comfort of our
                    audience throughout the movie.</p>
            </div>
        </article>

        <article>
            <div class="parallax2"></div>
            <div class="sub_parallax" id="prices">
                <h4 style="margin-top: 50px;">Prices</h4>
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Seat Type</th>
                            <th>Seat Code</th>
                            <th>All day Monday and Wednesday AND 12pm on Weekdays</th>
                            <th>All other times</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Standard Adult</td>
                            <td>STA</td>
                            <td>14.00</td>
                            <td>19.80</td>
                        </tr>
                        <tr>
                            <td>Standard Concession</td>
                            <td>STP</td>
                            <td>12.50</td>
                            <td>17.50</td>
                        </tr>
                        <tr>
                            <td>Standard Child</td>
                            <td>STC</td>
                            <td>11.00</td>
                            <td>15.30</td>
                        </tr>
                        <tr>
                            <td>First Class Adult</td>
                            <td>FCA</td>
                            <td>24.00</td>
                            <td>30.00</td>
                        </tr>
                        <tr>
                            <td>First Class Concession</td>
                            <td>FCP</td>
                            <td>22.50</td>
                            <td>27.00</td>
                        </tr>
                        <tr>
                            <td>First Class Child</td>
                            <td>FCC</td>
                            <td>21.00</td>
                            <td>24.00</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </article>

        <article>
            <div class="parallax2"></div>
            <div class='sub_parallax' id="now_showing">
                <h4 style="margin-top: 50px;">Now Showing</h4>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col"
                            style=" border: solid red 2px; padding: 5px 5px 5px 5px; background-color: red;">
                            <div class="card border">
                                <div class="row">
                                    <div class="col-md-5">
                                        <img src="Endgame.jpeg" alt="" width="190px" height="300px">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <a href="#endgame" onclick="Appear_endgame();MovieId('ACT')">
                                                <h5 class="card-title"> End Game &nbsp&nbsp&nbsp&nbsp PG-13</h5>
                                            </a>

                                            <p class="card-text" style="margin-top: 30px; margin-left: 30px;">
                                                Wednesday-9pm</p>
                                            <p class="card-text" style="margin-left: 30px;">Thursday-9pm</p>
                                            <p class="card-text" style="margin-left: 30px;">Friday-9pm</p>
                                            <p class="card-text" style="margin-left: 30px;">Saturday-6pm</p>
                                            <p class="card-text" style="margin-left: 30px;">Sunday-6pm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col"
                            style="margin-left: 20px; border: solid red 2px; padding: 5px 5px 5px 5px; background-color: red;">
                            <div class="card border">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <img src="top_end_wedding.jpg" alt="" width="180px" height="300px">
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="card-body">
                                            <a href="#topendwedding" onclick="Appear_topendwedding();MovieId('RMC')">
                                                <h5 class="card-title">&nbsp Top End Wedding &nbsp NR</h5>
                                            </a>

                                            <p class="card-text" style="margin-top: 50px; margin-left: 70px;">Monday-6pm
                                            </p>
                                            <p class="card-text" style="margin-left: 70px;">Tuesday-6pm</p>
                                            <p class="card-text" style="margin-left: 70px;">Saturday-3pm</p>
                                            <p class="card-text" style="margin-left: 70px;">Sunday-3pm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col"
                            style=" border: solid red 2px; padding: 5px 5px 5px 5px; background-color:red;">
                            <div class="card border">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <img src="dumbo.jpg" alt="" width="190px" height="350px">
                                    </div>
                                    <div class="col-xl-7">
                                        <div class="card-body">
                                            <a href="#dumbo" onclick="Appear_dumbo();MovieId('ANM')">
                                                <h5 class="card-title"> Dumbo &nbsp&nbsp&nbsp&nbsp PG</h5>
                                            </a>

                                            <p class="card-text" style="margin-top: 10px; margin-left: 30px;">
                                                Monday-12pm</p>
                                            <p class="card-text" style="margin-left: 30px;">Tuesday-12pm</p>
                                            <p class="card-text" style="margin-left: 30px;">Wednesday-6pm</p>
                                            <p class="card-text" style="margin-left: 30px;">Thursday-6pm</p>
                                            <p class="card-text" style="margin-left: 30px;">Friday-6pm</p>
                                            <p class="card-text" style="margin-left: 30px;">Saturday-12pm</p>
                                            <p class="card-text" style="margin-left: 30px;">Sunday-12pm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col"
                            style="margin-left: 20px; border: solid red 2px; padding: 5px 5px 5px 5px; background-color: red;">
                            <div class="card border">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <img src="the_happy_prince.jfif" alt="" width="180px" height="350px">
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="card-body">
                                            <a href="#thehappyprince" onclick="Appear_thehappyprince();MovieId('AHF')">
                                                <h5 class="card-title">&nbsp The Happy Prince &nbsp R</h5>
                                            </a>

                                            <p class="card-text" style="margin-top: 50px; margin-left: 70px;">
                                                Wednesday-12pm</p>
                                            <p class="card-text" style="margin-left: 70px;">Thursday-12pm</p>
                                            <p class="card-text" style="margin-left: 70px;">Friday-12pm</p>
                                            <p class="card-text" style="margin-left: 70px;">Saturday-9pm</p>
                                            <p class="card-text" style="margin-left: 70px;">Sunday-9pm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </article>

        <!--Synopsis Dumbo-->
        <article id="synopsisRMC_dumbo">
            <div class="parallax"></div>
            <div class='sub_parallax' id="Synopsis1">

                <h4 style="margin-top: 100px;" id="dumbo">Synopsis</h4>
                <div class="row" style="margin-left: 50px; margin-top: 50px; border:solid 2px ;">
                    <div class="col-xl-6">
                        <div class="card-body">
                            <h1 class="card-title">Dumbo <span style="float: right;">PG</span></h1>
                            <h3 style="margin-top: 50px;">Plot description</h3>
                            <p style="font-family: arial, sans-serif;">From Disney and visionary director Tim Burton, “Dumbo” expands on the beloved classic
                                story where differences are celebrated, family is cherished and dreams take flight.
                                A
                                new trailer, images and poster are now available. The trailer features Colin
                                Farrell,
                                Michael Keaton, Danny DeVito, Eva Green, Finley Hobbins and Nico Parker.

                                Circus owner Max Medici (Danny DeVito) enlists former star Holt Farrier (Colin
                                Farrell)
                                and his children Milly (Nico Parker) and Joe (Finley Hobbins) to care for a newborn
                                elephant whose oversized ears make him a laughingstock in an already struggling
                                circus.
                                But when they discover that Dumbo can fly, the circus makes an incredible comeback,
                                attracting persuasive entrepreneur V.A. Vandevere (Michael Keaton), who recruits the
                                peculiar pachyderm for his newest, larger-than-life entertainment venture,
                                Dreamland.
                                Dumbo soars to new heights alongside a charming and spectacular aerial artist,
                                Colette
                                Marchant (Eva Green), until Holt learns that beneath its shiny veneer, Dreamland is
                                full
                                of dark secrets.</p>
                        </div>
                    </div>
                    <div class="col-xl-5" style="padding: 30px 20px 0px 0px; margin-left: 20px;">
                        <iframe width="100%" height="80%" src="https://www.youtube.com/embed/7NiYVoqBt-8"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col" style="margin-bottom: 50px; margin-left: 20px; position: relative;">
                        <h3>Make a booking:</h3>
                        </br>
                        <div>
                            <a type="button" class="btn btn-info for-booking" id="dumbo1" href="#booking_form"
                                onclick="Dumbo_inner('1');MovieId2(0);MovieId3(0); caculate_total_price()">Monday -
                                12pm</a>
                            <a type="button" class="btn btn-info for-booking;" id="dumbo2" href="#booking_form"
                                onclick="Dumbo_inner('2');MovieId2(1);MovieId3(0); caculate_total_price()">Tuesday -
                                12pm</a>
                            <a type="button" class="btn btn-info for-booking" id="dumbo3" href="#booking_form"
                                onclick="Dumbo_inner('3');MovieId2(2);MovieId3(2); caculate_total_price()">Wednesday -
                                6pm</a>
                            <a type="button" class="btn btn-info for-booking" id="dumbo7" href="#booking_form"
                                onclick="Dumbo_inner('7');MovieId2(3);MovieId3(2); caculate_total_price()">Thursday -
                                6pm</a>
                            <a type="button" class="btn btn-info for-booking" id="dumbo4" href="#booking_form"
                                onclick="Dumbo_inner('4');MovieId2(4);MovieId3(2); caculate_total_price()">Friday -
                                6pm</a>
                            <a type="button" class="btn btn-info for-booking" id="dumbo5" href="#booking_form"
                                onclick="Dumbo_inner('5');MovieId2(5);MovieId3(3); caculate_total_price()">Saturday -
                                9pm</a>
                            <a type="button" class="btn btn-info for-booking" id="dumbo6" href="#booking_form"
                                onclick="Dumbo_inner('6');MovieId2(6);MovieId3(3); caculate_total_price()">Sunday -
                                9pm</a>
                        </div>
                    </div>
                    </br>
                    <div class="col-xl-12" style="padding-right: 0px;">
                        <a href="#now_showing" style="margin-top: 150px;">
                            <button type="button" class="btn btn-danger"
                                style="font-size: 150%; float: right; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                Choose Other Movies</button>
                        </a>
                    </div>

                </div>


            </div>
        </article>

        <!--Synopsis Endgame-->
        <article id="synopsisRMC_endgame" style="display: none;">
            <div class="parallax"></div>
            <div class='sub_parallax' id="Synopsis2">

                <h4 style="margin-top: 100px;" id="endgame">Synopsis</h4>
                <div class="row" style="margin-left: 50px; margin-top: 50px; border:solid 2px ;">
                    <div class="col-xl-6">
                        <div class="card-body">
                            <h1 class="card-title">Endgame<span style="float: right;">PG-13</span></h1>
                            <h3 style="margin-top: 50px;">Plot description</h3>
                            <p style="font-family: arial, sans-serif;">After the devastating events of Avengers: Infinity War (2018), the universe is in
                                ruins. With the help of remaining allies, the Avengers assemble once more in order
                                to reverse Thanos' actions and restore balance to the universe.
                                After the devastating events of Avengers: Infinity War (2018), the universe is in
                                ruins due to the efforts of the Mad Titan, Thanos. With the help of remaining
                                allies, the Avengers must assemble once more in order to undo Thanos's actions and
                                undo the chaos to the universe, no matter what consequences may be in store, and no
                                matter who they face...</p>
                        </div>
                    </div>
                    <div class="col-xl-5" style="padding: 30px 20px 0px 0px; margin-left: 20px;">
                        <iframe width="100%" height="80%" src="https://www.youtube.com/embed/TcMBFSGVi1c"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col" style="margin-bottom: 50px; margin-left: 20px; position: relative;">
                        <h3>Make a booking:</h3>
                        </br>
                        <div>

                            <a role="button" href="#booking_form" id="endgame1"
                                onclick="Endgame_inner('1');MovieId2(2);MovieId3(3); caculate_total_price()"
                                class="btn btn-info">Wednesday -
                                9pm</a>
                            <a role="button" href="#booking_form" id="endgame5"
                                onclick="Endgame_inner('5');MovieId2(3);MovieId3(3); caculate_total_price()"
                                class="btn btn-info">Thursday -
                                9pm</a>
                            <a role="button" href="#booking_form" id="endgame2"
                                onclick="Endgame_inner('2');MovieId2(4);MovieId3(3); caculate_total_price()"
                                class="btn btn-info">Friday -
                                9pm</a>
                            <a role="button" href="#booking_form" id="endgame3"
                                onclick="Endgame_inner('3');MovieId2(5);MovieId3(2); caculate_total_price()"
                                class="btn btn-info">Saturday -
                                6pm</a>
                            <a role="button" href="#booking_form" id="endgame4"
                                onclick="Endgame_inner('4');MovieId2(6);MovieId3(2); caculate_total_price()"
                                class="btn btn-info">Sunday -
                                6pm</a>
                        </div>
                    </div>
                    </br>
                    <div class="col-xl-12" style="padding-right: 0px;">
                        <a href="#now_showing" style="margin-top: 150px;">
                            <button type="button" class="btn btn-danger"
                                style="font-size: 150%; float: right; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                Choose Other Movies</button>
                        </a>
                        </a>
                    </div>

                </div>


            </div>
        </article>

        <!--Synopsis Top End Wedding-->
        <article id="synopsisRMC_topendwedding" style="display: none;">
            <div class="parallax"></div>
            <div class='sub_parallax' id="Synopsis3">

                <h4 style="margin-top: 100px;" id="topendwedding">Synopsis</h4>
                <div class="row" style="margin-left: 50px; margin-top: 50px; border:solid 2px ;">
                    <div class="col-xl-6">
                        <div class="card-body">
                            <h1 class="card-title">Top End Wedding <span style="float: right;">NG</span></h1>
                            <h3 style="margin-top: 50px;">Plot description</h3>
                            <p style="font-family: arial, sans-serif;">From the makers of The Sapphires, TOP END WEDDING is a celebration of love, family and
                                belonging, set against the spectacular natural beauty of the Northern Territory. This
                                heartwarming romantic comedy tells the story of successful Adelaide lawyer Lauren
                                (Tapsell) and her fiancé Ned (Lee). Engaged and in love, they have just ten days to pull
                                off their dream Top End Wedding. First though, they need track down Lauren's mother, who
                                has gone AWOL somewhere in the Northern Territory.</p>
                        </div>
                    </div>
                    <div class="col-xl-5" style="padding: 30px 20px 0px 0px; margin-left: 20px;">
                        <iframe width="100%" height="80%" src="https://www.youtube.com/embed/uoDBvGF9pPU"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col" style="margin-bottom: 50px; margin-left: 20px; position: relative;">
                        <h3>Make a booking:</h3>
                        </br>
                        <div>
                            <a role="button" href="#booking_form" id="top1"
                                onclick="Top_inner('1');MovieId2(0);MovieId3(2); caculate_total_price()"
                                class="btn btn-info">Monday - 6pm</a>
                            <a role="button" href="#booking_form" id="top2"
                                onclick="Top_inner('2');MovieId2(1);MovieId3(2); caculate_total_price()"
                                class="btn btn-info">Tuesday - 6pm</a>

                            <a role="button" href="#booking_form" id="top3"
                                onclick="Top_inner('3');MovieId2(5);MovieId3(2); caculate_total_price()"
                                class="btn btn-info">Saturday - 6pm</a>
                            <a role="button" href="#booking_form" id="top4"
                                onclick="Top_inner('4');MovieId2(6);MovieId3(2); caculate_total_price()"
                                class="btn btn-info">Sunday - 6pm</a>
                        </div>
                    </div>
                    </br>
                    <div class="col-xl-12" style="padding-right: 0px;">
                        <a href="#now_showing" style="margin-top: 150px;">
                            <button type="button" class="btn btn-danger"
                                style="font-size: 150%; float: right; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                Choose Other Movies</button>
                        </a>
                        </a>
                    </div>

                </div>


            </div>
        </article>

        <!--Synopsis The happy prince-->
        <article id="synopsisRMC_thehappyprince" style="display: none;">
            <div class="parallax"></div>
            <div class='sub_parallax' id="Synopsis4">

                <h4 style="margin-top: 100px;" id="thehappyprince">Synopsis</h4>
                <div class="row" style="margin-left: 50px; margin-top: 50px; border:solid 2px ;">
                    <div class="col-xl-6">
                        <div class="card-body">
                            <h1 class="card-title">The Happy Prince<span style="float: right;">R</span></h1>
                            <h3 style="margin-top: 50px;">Plot description</h3>
                            <p style="font-family: arial, sans-serif;">In a cheap Parisian hotel room Oscar Wilde lies on his death bed and the past floods
                                back, transporting him to other times and places. Was he once the most famous man in
                                London? The artist crucified by a society that once worshiped him? The lover imprisoned
                                and freed, yet still running towards ruin in the final chapter of his life? Under the
                                microscope of death he reviews the failed attempt to reconcile with his long suffering
                                wife Constance, the ensuing reprisal of his fatal love affair with Lord Alfred Douglas
                                and the warmth and devotion of Robbie Ross who tried and failed to save him from
                                himself. From Dieppe to Naples to Paris freedom is elusive and Oscar is a penniless
                                vagabond, always moving on, shunned by his old acquaintances, but revered by a strange
                                group of outlaws and urchins to whom he tells the old stories - his incomparable wit
                                still sharp. THE HAPPY PRINCE is a portrait of the dark side of a genius who lived and
                                died for love in the last days of the nineteenth century.</p>
                        </div>
                    </div>
                    <div class="col-xl-5" style="padding: 30px 20px 0px 0px; margin-left: 20px;">
                        <iframe width="100%" height="80%" src="https://www.youtube.com/embed/4HmN9r1Fcr8"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col" style="margin-bottom: 50px; margin-left: 20px; position: relative;">
                        <h3>Make a booking:</h3>
                        </br>
                        <div>
                            <a role="button" href="#booking_form" id="prince1"
                                onclick="Prince_inner('1');MovieId2(2);MovieId3(0); caculate_total_price()"
                                class="btn btn-info">Wednesday -
                                12pm</a>
                            <a role="button" href="#booking_form" id="prince5"
                                onclick="Prince_inner('5');MovieId2(3);MovieId3(0); caculate_total_price()"
                                class="btn btn-info">Thursday - 12pm</a>
                            <a role="button" href="#booking_form" id="prince2"
                                onclick="Prince_inner('2');MovieId2(4);MovieId3(0); caculate_total_price()"
                                class="btn btn-info">Friday -
                                12pm</a>
                            <a role="button" href="#booking_form" id="prince3"
                                onclick="Prince_inner('3');MovieId2(5);MovieId3(3); caculate_total_price()"
                                class="btn btn-info">Saturday -
                                9pm</a>
                            <a role="button" href="#booking_form" id="prince4"
                                onclick="Prince_inner('4');MovieId2(6);;MovieId3(3); caculate_total_price()"
                                class="btn btn-info">Sunday -
                                9pm</a>
                        </div>
                    </div>
                    </br>
                    <div class="col-xl-12" style="padding-right: 0px;">
                        <a href="#now_showing" style="margin-top: 150px;">
                            <button type="button" class="btn btn-danger"
                                style="font-size: 150%; float: right; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                Choose Other Movies</button>
                        </a>
                        </a>
                    </div>


                </div>


            </div>
        </article>

        <article class="bg-light" id="booking_form">

            <div class='booking-form' style="margin-top: 50px;">
                <form action="index.php" method="POST">
                    <h4 class="text-center" style="margin-top: 50px;">Booking Form</h4>
                    <div class="container card"
                        style="border: black solid; background-color:  rgba(222, 222, 222, 0.25);">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card-body">
                                    <h1 class="card-title">
                                        <span id="title">Movie Title</span>
                                        <span> - </span>
                                        <span id="day_time">Day - Time</span>
                                    </h1>
                                </div>
                            </div>
                            <div class="col-xl-6 card-body">

                                <fieldset class="card container" style="border: red solid;">
                                    <legend class="w-auto" style="font-weight: bolder;">Standard</legend>
                                    <div>

                                        <label class="col-5" for="adult_sta"
                                            style="margin-top: 40px; font-weight: 500; font-size: 18px;">Adult</label>
                                        <select name="seats[STA]" id="adult_sta" onblur="caculate_total_price()"
                                            class="btn btn-info dropdown-toggle" style="margin-left: 30px;">
                                            <option value="0">Please Select</option>
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>


                                    </div>
                                    <div>

                                        <label class="col-5" for="concession_sta"
                                            style="margin-top: 20px; font-weight: 500; font-size: 18px;">Concession</label>
                                        <select name="seats[STP]" id="concession_sta" onblur="caculate_total_price()"
                                            class="btn btn-info dropdown-toggle" style="margin-left: 30px;">
                                            <option value="0">Please Select</option>
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>

                                    </div>
                                    <div style="margin-bottom: 40px;">

                                        <label class="col-5" for="child_sta"
                                            style="margin-top: 20px; font-weight: 500; font-size: 18px;">Children</label>
                                        <select name="seats[STC]" id="child_sta" onblur="caculate_total_price() "
                                            class="btn btn-info dropdown-toggle" style="margin-left: 30px;">
                                            <option value="0">Please Select</option>
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>

                                    </div>
                                </fieldset>

                                <fieldset class="card container" style="border: red solid; margin-bottom: 20px;">
                                    <legend class="w-auto" style="font-weight: bolder;">First Class</legend>
                                    <div>

                                        <label class="col-5" for="adult_fc"
                                            style="margin-top: 40px; font-weight: 500; font-size: 18px;">Adult</label>
                                        <select name="seats[FCA]" id="adult_fc" onblur="caculate_total_price()"
                                            class="btn btn-info dropdown-toggle" style="margin-left: 30px;">
                                            <option value="0">Please Select</option>
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>

                                    </div>
                                    <div>

                                        <label class="col-5" for="concession_fc"
                                            style="margin-top: 20px; font-weight: 500; font-size: 18px;">Concession</label>
                                        <select name="seats[FCP]" id="concession_fc" onblur="caculate_total_price()"
                                            class="btn btn-info dropdown-toggle" style="margin-left: 30px;">
                                            <option value="0">Please Select</option>
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>

                                    </div>
                                    <div style="margin-bottom: 40px;">

                                        <label class="col-5" for="child_fc"
                                            style="margin-top: 20px; font-weight: 500; font-size: 18px;">Children</label>
                                        <select name="seats[FCC]" id="child_fc" onblur="caculate_total_price()"
                                            class="btn btn-info dropdown-toggle" style="margin-left: 30px;">
                                            <option value="0">Please Select</option>
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>

                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-xl-6 d-flex align-items-center justify-content-center">
                                <div class="form-group">
                                    <div class="form-group row" style="padding-top: 20px">
                                        <div class="col-xl-7" style="display: none;">
                                            <input type="text" name="movie[id]" class="form-control" id="hidden1"
                                                placeholder="Hidden1" required>
                                            <!--HIDDEN2-->
                                            <div>
                                                <label class="col-5" for=""
                                                    style="margin-top: 40px; font-weight: 500; font-size: 18px;">HIDDEN
                                                    DAY</label>
                                                <select name="movie[day]" id="hidden2"
                                                    class="btn btn-info dropdown-toggle" style="margin-left: 30px;">
                                                    <option value="MON">MON</option>
                                                    <option value="TUE">TUE</option>
                                                    <option value="WED">WED</option>
                                                    <option value="THU">THU</option>
                                                    <option value="FRI">FRI</option>
                                                    <option value="SAT">SAT</option>
                                                    <option value="SUN">SUN</option>
                                                </select>
                                            </div>
                                            <!--HIDDEN3-->
                                            <div>
                                                <label class="col-5" for=""
                                                    style="margin-top: 40px; font-weight: 500; font-size: 18px;">HIDDEN
                                                    TIME</label>
                                                <select name="movie[hour]" id="hidden3"
                                                    class="btn btn-info dropdown-toggle" style="margin-left: 30px;">
                                                    <option value="T12">T12</option>
                                                    <option value="T15">T15</option>
                                                    <option value="T18">T18</option>
                                                    <option value="T21">T21</option>
                                                </select>
                                            </div>
                                        </div>
                                        <label for="input_name" class="col-xl-5 col-form-label"
                                            style="font-weight: 500; font-size: 20px;" id="name">Name</label>
                                        <div class="col-xl-7">
                                            <input type="text" class="form-control" id="input_name" name="cust[name]"
                                                placeholder="Name">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input_email" class="col-xl-5 col-form-label"
                                            style="font-weight: 500; font-size: 20px;" id="email">Email</label>
                                        <div class="col-xl-7">
                                            <input type="email" class="form-control" id="input_email" name="cust[email]"
                                                placeholder="Email"
                                                pattern="^([a-zA-Z0-9-.]+)@([a-zA-Z0-9-.]+).([a-zA-Z]{2,5})$" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input_mobile" class="col-xl-5 col-form-label"
                                            style="font-weight: 500; font-size: 20px;" id="mobile">Mobile</label>
                                        <div class="col-xl-7">
                                            <input type="text" class="form-control" id="input_mobile"
                                                name="cust[mobile]" placeholder="Mobile"
                                                pattern="^(\(04\)|04|\+614)( ?\d){8}$" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input_card" class="col-xl-5 col-form-label"
                                            style="font-weight: 500; font-size: 20px;" id="credit_card">Credit
                                            Card</label>
                                        <div class="col-xl-7">
                                            <input type="text" class="form-control" id="input_card" name="cust[card]"
                                                placeholder="Credit Card" pattern="^( ?\d){14,19}$" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input_date" class="col-xl-5 col-form-label"
                                            style="font-weight: 500; font-size: 20px;">Expiry</label>
                                        <div class="col-xl-7">
                                            <input type="Month" class="form-control" id="input_date" name="cust[expiry]"
                                                onfocus="limitdate()" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6" style="display: flex;">
                                <p style="font-weight: 500; font-size: 30px; margin-left: 20px; display: inline;">
                                    Total:
                                </p>
                                <input type="text" id="total-hidden" value="0">

                                <div style="border: dashed 2px; border-radius: 10px; margin-top: 9px; margin-left: 10px; height: 32px; width: 200px; display: inline-block; text-align: center;"
                                    id="total">
                                </div>
                            </div>

                            <div class="col-xl-12" style="padding-right: 0px;">
                                <input type="submit" class="btn btn-info" value="Order" style="float: right; ">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </article>
    </main>

    <!-- Footer -->
    <footer class="font-small bg-light">
        <div class="parallax"></div>

        <footer class="page-footer font-small blue pt-4"
            style="background-color:#3c3d41; color: rgba(255,255,255,1.00)">

            <!-- Footer Links -->
            <div class="container-fluid text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-6 mt-md-0 mt-3">

                        <!-- Content -->
                        <h4 class="text-uppercase">Disclaimer</h4>
                        <p style="font-size: 12px; color:rgba(255,255,255,0.70);">This website is not a real website and
                            is being developed as

                            part <br /> of a School of
                            Science
                            Web
                            Programming course at RMIT<br /> University in Melbourne, Australia.</p>
                        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none pb-3">

                    <!-- Grid column -->
                    <div class="col-md-3 mb-md-0 mb-3">

                        <!-- Links -->
                        <h5 class="text-uppercase">Contact</h5>

                        <ul class="list-unstyled">
                            <li>
                                Email: Thecinemaxcompany.co
                            </li>
                            <li class="text-danger">
                                Hotline: 1900-6035
                            </li>
                            <li>
                                Ho Chi Minh
                            </li>
                            <li>
                                FAQs
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 mb-md-0 mb-3">

                        <!-- Links -->
                        <h5 class="text-uppercase">Web developers</h5>

                        <ul class="list-unstyled">
                            <li>
                                Nguyen Dinh Nhat Huy
                            </li>
                            <li>
                                Pham Huu Huy
                            </li>
                            <li>
                                Phone: 0903621647
                            </li>
                            <li>
                                Ho Chi Minh
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Copyright -->
            <div class="footer-copyright text-center  bg-light text-dark">© 2020 Copyright:
                This web is made by HUY & HUY
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
        <?php
            preShow($_POST);     // ie echo a string
            preShow($_SESSION);
            printMyCode();
       ?> 
</body>

</html>