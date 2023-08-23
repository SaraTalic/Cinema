<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KinoIzKraja</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.jpg">



    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    <link rel="stylesheet" href="{{ asset('css/events.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mojerez.css') }}">
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cjenovnik.css') }}">


    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
    <script src="/js/jquery-2.1.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script>
        function getNextThursday() {
            var today = new Date();
            var daysUntilThursday = (4 - today.getDay() + 7) % 7; // Calculate days until next Thursday
            var nextThursday = new Date(today);
            nextThursday.setDate(today.getDate() + daysUntilThursday);
            return nextThursday;
        }

        window.onload = function() {
            var today = new Date();
            var nextThursday = getNextThursday();

            var dateInput = document.getElementById("dateInput");
            dateInput.min = today.toISOString().split("T")[0];
            dateInput.max = nextThursday.toISOString().split("T")[0];
        };
    </script>
</head>

<body>
    <x-flash-message />
    <section id="top">
        <div class="container">
            <div class="row">

                <div class="top_2 clearfix">
                    <div class="col-sm-3">
                        <div class="top_2_left">
                            <h1><a href="/">KinoIzKraja <span> od 1999. </span></a></h1>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="top_2_right text-right">
                            @auth
                                <ul class="rezer">
                                    <li><a href="/mojerezervacije">Moje rezervacije</a></li>
                                    <form class="inline" method="POST" action="/logout">
                                        @csrf
                                        <button type="submit" name="odjava">
                                            <p> Odjava </p>
                                        </button>
                                    </form>
                                </ul>
                            @else
                                <ul>
                                    <li><a href="/login">Prijava</a></li>
                                    <li class="border_none_1"><a href="/register">Registracija</a></li>
                                </ul>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>







    @yield('content')


    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="footer clearfix">
                    <h2 class="text-center">KinoIzKraja</h2>
                </div>
                <div class="footer_1 clearfix">
                    <div class="col-sm-3">
                        <div class="footer_1_inner">

                            <ul>
                                <li><a href="#">POČETNA</a></li>
                                <li><a href="/repertoar">REPERTOAR</a></li>
                                <li><a href="/uskoro">USKORO</a></li>
                                <li><a href="/cjenovnik">CJENOVNIK</a></li>
                                <li><a href="/kontakt">KONTAKT</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer_1 clearfix">
                        <div class="col-sm-3">
                            <div class="footer_1_inner">
                                <div class="search-bar">
                                    <p>------</p>
                                    <form action="/pretraga" method="GET" class="search-form">
                                        <input type="text" name="search" placeholder="Pretraži filmove...">
                                        <button type="submit">Pretraži</button>
                                    </form>
                                </div>


                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footer_1_inner">

                                <p>-------</p>

                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="footer_1_inner_1">
                                <h4>Zaprati nas</h4>
                                <ul class="social-network social-circle">
                                    <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a>
                                    </li>
                                    <li><a href="#" class="icoFacebook" title="Facebook"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="icoTwitter" title="Twitter"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="icoGoogle" title="Google +"><i
                                                class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="icoLinkedin" title="Linkedin"><i
                                                class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="footer_bottom clearfix">

                    <div class="col-sm-6">
                        <div class="footer_bottom_right">
                            <p> © 2023 KinoIzKraja. Sva prava zadržana | Made by <a
                                    href="https://github.com/SaraTalic"> SARA</a></p>
                            <p>Projekat iz predmeta Internet programiranje</p>
                            <p>Avgust 2023.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        $(document).ready(function() {

            /*****Fixed Menu******/
            var secondaryNav = $('.cd-secondary-nav'),
                secondaryNavTopPosition = secondaryNav.offset().top;
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > secondaryNavTopPosition) {
                    secondaryNav.addClass('is-fixed');
                } else {
                    secondaryNav.removeClass('is-fixed');
                }
            });

        });
    </script>
</body>

</html>
