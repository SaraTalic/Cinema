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
                                <li><a class="font_tag" href="/">Početna</a></li>
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

    <section id="center" class="center_detail clearfix">
        <div class="container">
            <div class="row">
                <div class="center_detail_main clearfix">
                    <div class="col-sm-4">
                        <div class="center_detail_main_left clearfix">
                            <img src="/images/{{ $movie->logo }}" class="movie-logo">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="center_detail_main_right clearfix">
                            <h2>{{ $movie->title }} </h2>


                            <p> {{ $movie->description }}</p>
                        </div>
                        <div class="center_detail_main_right_1 clearfix">
                            <div class="col-sm-6 space_left">
                                <div class="center_detail_main_right_1_inner">
                                    <h6><a href="#"></a></h6>
                                </div>
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="detail">
        <div class="container">
            <div class="row">
                <div class="detail_main clearfix">
                    <div class="col-sm-4">
                        <div class="detail_main_left clearfix">
                            <div class="click_right clearfix">
                                <h4>Informacije</h4>
                                <ul>

                                    <li><i class="fa fa-clock-o"></i> {{ $movie->duration }} min</li>
                                    <li><i class="fa fa-list"></i> {{ $genres }}</li>
                                    <li>Premijera: {{ $movie->premiere }}</li>
                                    <li><i class="fa fa-image"></i> {{ $movie->director }}</li>
                                    <li><i class="fa fa-star"></i> {{ $movie->actors }}</li>
                                </ul>
                            </div>
                            <div class="click_right clearfix">
                                <h4 class="heading_tag">Opis</h4>
                                <ul>
                                    <li><i class="fa fa-user"></i>{{ $movie->small_description }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="detail_main_right clearfix">


                            <div class="tab-content clearfix">
                                <div id="home" class="tab-pane fade in active clearfix">
                                    <div class="click clearfix">
                                        <h4><a href="#">TERMINI </a></h4>

                                        @if ($movie->on_air == 'yes')
                                            <div class="digmerez">
                                                <button name="rezervisi"><a href="/movies/{{ $movie->id }}/rezervacija">
                                                        Rezerviši karte </a> </button>
                                            </div>
                                            <p> {{ $movie->time }} </p>
                                        @else
                                            <p> Uskoro </p>
                                        @endif

                                    </div>

                                </div>
                                <div id="menu1" class="tab-pane fade clearfix">
                                    <div class="click clearfix">
                                        <h4><a href="#">LOREM ROAD LONDON <span>(Sat 25th Jan)</span></a></h4>
                                        <ul>
                                            <li><a href="#">11:15</a></li>
                                            <li><a href="#">12:00</a></li>
                                            <li><a href="#">14:00</a></li>
                                            <li><a href="#">15:45</a></li>
                                            <li><a href="#">17:45</a></li>
                                            <li><a href="#">21:30</a></li>
                                        </ul>
                                    </div>

                                </div>
                                <div id="menu2" class="tab-pane fade clearfix">
                                    <div class="click clearfix">
                                        <h4><a href="#">LOREM ROAD LONDON <span>(Sun 26th Jan)</span></a></h4>
                                        <ul>
                                            <li><a href="#">11:15</a></li>
                                            <li><a href="#">12:00</a></li>
                                            <li><a href="#">14:00</a></li>
                                            <li><a href="#">15:45</a></li>
                                            <li><a href="#">17:45</a></li>
                                            <li><a href="#">21:30</a></li>
                                        </ul>
                                    </div>
                                    <div class="click clearfix">
                                        <h4><a href="#">WEST SIDE PARIS <span>(Sun 26th Jan)</span></a></h4>
                                        <ul>
                                            <li><a href="#">13:15</a></li>
                                            <li><a href="#">17:15</a></li>
                                            <li><a href="#">19:10</a></li>
                                        </ul>
                                    </div>
                                    <div class="click clearfix">
                                        <h4><a href="#">IMPERDIET <span>(Sun 26th Jan)</span></a></h4>
                                        <ul>
                                            <li><a href="#">17:45</a></li>
                                            <li><a href="#">18:30</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="menu3" class="tab-pane fade clearfix">
                                    <div class="click clearfix">
                                        <h4><a href="#">LOREM ROAD LONDON <span>(Mon 27th Jan)</span></a></h4>
                                        <ul>
                                            <li><a href="#">11:15</a></li>
                                            <li><a href="#">12:00</a></li>
                                            <li><a href="#">14:00</a></li>
                                            <li><a href="#">15:45</a></li>
                                            <li><a href="#">17:45</a></li>
                                            <li><a href="#">21:30</a></li>
                                        </ul>
                                    </div>
                                    <div class="click clearfix">
                                        <h4><a href="#">WEST SIDE PARIS <span>(Mon 27th Jan)</span></a></h4>
                                        <ul>
                                            <li><a href="#">13:15</a></li>
                                            <li><a href="#">17:15</a></li>
                                            <li><a href="#">19:10</a></li>
                                        </ul>
                                    </div>
                                    <div class="click clearfix">
                                        <h4><a href="#">IMPERDIET <span>(Mon 27th Jan)</span></a></h4>
                                        <ul>
                                            <li><a href="#">17:45</a></li>
                                            <li><a href="#">18:30</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <div class="detail_main_right_2 clearfix">
                            <h3>CJENOVNIK</h3>

                            <ul>
                                <li><span class="tag_1">Poslijepodne</span> <br><span class="tag_2">4.00 KM</span><br>
                                    <span class="tag_3">Prije 17h</span>
                                </li>
                                <li><span class="tag_1">Večernje</span> <br><span class="tag_2">5.00 KM</span><br> <span
                                        class="tag_3">Poslije 17h</span></li>
                                <li><span class="tag_1">Utorak</span> <br><span class="tag_2">3.00 KM</span><br> <span
                                        class="tag_3">Dan za kino</span></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail_main_right_1 clearfix">
                <h4>FILMOVI NA REPERTOARU</h4>
                @foreach ($movies as $m)
                    @if ($m->on_air == 'yes')
                        <div class="col-sm-3 space_left">
                            <div class="detail_main_right_1_inner_1 clearfix">
                                <a href="#"><img src="/images/{{ $m->logo }}" width="90%"
                                        height="300px"></a>
                                <p class="text-center"><a href="#">{{ $m->title }}</a></p>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
            <div class="mt-6 p-4">
                {{ $movies->links() }}
            </div>
    </section>
@endsection
