@extends('layout')

@section('content')
    <section id="header" class="clearfix cd-secondary-nav">
        <div class="container">
            <div class="row">
                <div class="header_main clearfix">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button class="navbar-toggle" type="button" data-toggle="collapse"
                                data-target=".js-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">KinoIzKraja <span>od 1999.</span></a>
                        </div>


                        <div class="collapse navbar-collapse js-navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="font_tag active_tag" href="/">Početna</a></li>
                                <li><a class="font_tag" href="/repertoar">Repertoar</a></li>
                                <li><a class="font_tag" href="/uskoro">Uskoro</a></li>
                                <li><a class="font_tag" href="/cjenovnik">Cjenovnik</a></li>
                                <li><a class="font_tag border_none_1" href="/kontakt">Kontakt</a></li>
                            </ul>

                        </div><!-- /.nav-collapse -->
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section id="center" class="center_events1 clearfix">
        <div class="center_events_main text-center clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="center_events_1 clearfix">
                            <h1>Kino po tvojoj mjeri </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section id="pocetna">
        <div class="container">
            <div class="row">
                <div class="pocetna clearfix">
                    <div class="col-sm-8">
                        <div class="pocetna clearfix">
                            <ul class="nav1 nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">REPERTOAR</a></li>
                                <li><a data-toggle="tab" href="#menu1">POPULARNO</a></li>
                                <li><a data-toggle="tab" href="#menu2">USKORO</a></li>
                            </ul>

                            <div class="tab-content clearfix">
                                <div id="home" class="tab-pane fade in active clearfix">
                                    <div class="click clearfix">

                                        <div class="click_1 clearfix">
                                            <h3> <a class="pull-right" href="#"> KinoIzKraja</a></h3>
                                        </div>
                                        <div class="click_2 clearfix">
                                            @foreach ($movies as $movie)
                                                @if ($movie->on_air == 'yes')
                                                    <x-movie-one-card :movie="$movie" />
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade clearfix">
                                    <div class="click clearfix">
                                        <div class="click_1 clearfix">
                                            <h3> <a class="pull-right" href="#"> KinoIzKraja</a></h3>
                                        </div>
                                        <div class="click_2 clearfix">

                                            @foreach ($movies as $movie)
                                                @if ($movie->trending == 'yes')
                                                    <x-movie-one-card :movie="$movie" />
                                                @endif
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane fade in active clearfix">
                                    <div class="click_1 clearfix">
                                        <h3> <a class="pull-right" href="#"> KinoIzKraja</a></h3>
                                    </div>
                                    <div class="click clearfix">

                                        <div class="click_2 clearfix">
                                            @foreach ($movies as $movie)
                                                @if ($movie->on_air == 'no')
                                                    <x-movie-one-card :movie="$movie" />
                                                @endif
                                            @endforeach



                                        </div>
                                    </div>
                                </div>




    </section>
    <section id="booking_last">
        <div class="container">
            <div class="row">
                <div class="booking_last clearfix">
                    <div class="col-sm-4">
                        <div class="booking_right_main_3 clearfix">
                            <div class="grid">
                                <figure class="effect-milo">
                                    <img src="images/kum.jpg" alt="img03" width="100%" height="415x">
                                    <figcaption>
                                        <h2>Kino<span>IzKraja</span></h2>
                                        <p></p>
                                        <a href="#"></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="booking_right_main_3 clearfix">
                            <div class="grid">
                                <figure class="effect-milo">
                                    <img src="images/sw.jpg" alt="img03" width="100%" height="415px">
                                    <figcaption>
                                        <h2>Kino<span>IzKraja</span></h2>
                                        <p></p>
                                        <a href="#"></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="booking_right_main_3 clearfix">
                            <div class="grid">
                                <figure class="effect-milo">
                                    <img src="images/pulp.jpg" alt="img03" width="100%" height="415px">
                                    <figcaption>
                                        <h2>Kino<span>IzKraja</span></h2>
                                        <p></p>
                                        <a href="#"></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
