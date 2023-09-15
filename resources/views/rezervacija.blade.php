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

    <section id="booking1">
        <div class="container">
            <div class="row">
                <div class="booking1 clearfix">
                    <div class="col-sm-4">
                        <div class="booking_right_main clearfix">
                            <div class="booking_right_main_1 clearfix">
                                <ul>
                                    <li class="book_1">REZERVISI</li>
                                    <li class="pull-right"><a href="#"><i class="fa fa-ticket"></i></a></li>
                                </ul>
                            </div>
                            <form method="POST" action="/movies/{{ $movie->id }}/rezervacija" class="appointment-form">
                                @csrf
                                @method('POST')
                                <p name="movie"> {{ $movie->title }} </p>
                                <div class="booking_right_main_2_inner clearfix">
                                    <?php $string = $movie->time;
                                    $str_arr = explode(',', $string); ?>
                                    <p>Odaberite termin</p>
                                    <select name="time" class="form-control">
                                        <option> - </option>
                                        @foreach ($str_arr as $s)
                                            <option>{{ $s }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="booking_right_main_2_inner clearfix">
                                    <p>Odaberite datum</p>
                                    <input type="date" id="dateInput" name="dateInput">
                                </div>
                                <div class="odaberikarte">
                                    <p>Odaberite broj karata</p>
                                    <input name="number_of_tickets" type="number" id="broj">
                                    @error('not')
                                        <p class="text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="dugmepotvrda">

                                    <button type="submit" id="potvrda">Potvrdi </button>
                                </div>
                                <div>
                                    <p>*Rezervacije primamo do sat vremena prije projekcije.</p>
                                        <p>*Rezervacija važi do 30 minuta prije projekcije.</p>
                                
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
