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
                                <li><a class="font_tag active_tag" href="/repertoar">Repertoar</a></li>
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
    <section id="center" class="center_events clearfix">
        <div class="center_events_main text-center clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="center_events_1 clearfix">
                            <h1>Repertoar </h1>
                            
                        </div>
                        
                    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="events">
        <div class="container">
            <div class="row">
                <div class="events_main clearfix">
                    <h4>Repertoar se mijenja svakog petka.</h4>
                    @foreach ($movies as $movie)
                        @if ($movie->on_air == 'yes')
                            <div class="tab-content clearfix">
                                <div id="home" class="tab-pane fade in active clearfix">
                                    <div class="click clearfix">
                                        <div class="col-sm-8 space_left">
                                            <div class="click_left clearfix">
                                                <div class="col-sm-4 space_left">
                                                    <div class="click_left_inner clearfix">
                                                        <a href="/movies/{{ $movie->id }}"><img
                                                                src="images/{{ $movie->logo }}" width="100%"
                                                                height="360px"></a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="click_left_inner_1 clearfix">
                                                        <h2><a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a>
                                                        </h2>

                                                        <h6>
                                                            <?php foreach ($mgs as $mg) {
                                                                if ($mg->movie_id == $movie->id) {
                                                                    foreach ($genres as $genre) {
                                                                        if ($genre->id == $mg->genre_id) {
                                                                            echo $genre->name . ' ';
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                            ?>
                                                        </h6>
                                                        <p class="para_1">{{ $movie->small_description }}<a
                                                                href="/movies/{{ $movie->id }}"> Više </a></p>

                                                        <p class="para_2"><span>Glumci:</span> {{ $movie->actors }}</p>
                                                    </div>
                                                    <div class="dugmerez">
                                                        <button name="rezervisi"><a
                                                                href="/movies/{{ $movie->id }}/rezervacija"> Rezerviši
                                                                karte </a> </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="click_right clearfix">
                                                <h4>Informacije</h4>
                                                <ul>
                                                    <li><i class="fa fa-backward"></i> {{ $movie->title }}</li>
                                                    <li><i class="fa fa-clock-o"></i> {{ $movie->duration }} min</li>
                                                    <li><i class="fa fa-list"></i>
                                                        <?php foreach ($mgs as $mg) {
                                                            if ($mg->movie_id == $movie->id) {
                                                                foreach ($genres as $genre) {
                                                                    if ($genre->id == $mg->genre_id) {
                                                                        echo $genre->name . ' ';
                                                                    }
                                                                }
                                                            }
                                                        }
                                                        ?>
                                                    </li>
                                                    <li><i class="fa fa-image"></i> {{ $movie->director }}</li>
                                                    <li><i class="fa fa-star"></i> {{ $movie->actors }}</li>

                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                        @endif
                    @endforeach

                </div>
                <div class="mt-10 p-3">
                    <p>
                        {{ $movies->links() }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
