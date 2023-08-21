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

    <section id="center" class="center_events clearfix">
        <div class="center_events_main text-center clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="center_events_1 clearfix">
                            <h1>Moje rezervacije </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section name="tabela">
        <div name="tabeladiv">
            <table class="tabela1">
                <tbody>
                    <tr class="glavna">
                        <td class="glavnarow1"> <label>Naziv filma</label></td>
                        <td class="glavnarow2"> <label>Datum projekcije</label></td>
                        <td class="glavnarow3"> <label>Vrijeme projekcije</label></td>
                    </tr>
                    @unless ($events->isEmpty())
                        @foreach ($events as $event)
                            <tr class="row1">
                                <td class="row2">

                                    @foreach ($usersreservations as $us)
                                        @if ($event->id == $us->event_id && auth()->id() == $us->user_id)
                                            <label name="film">
                                                <a href="/mojerezervacije/{{ $us->id }}">
                                        @endif
                                    @endforeach
                                    @foreach ($movies as $movie)
                                        @if ($movie->id == $event->movie_id)
                                            {{ $movie->title }}</a>
                                        @endif
                                    @endforeach
                                    </label>
                                </td>
                                <td class="datumrow"> <label>{{ $event->date }}</label>
                                </td>
                                <td class="timerow"> <label>{{ $event->time }} </label>
                                </td>
                                <td class="row2">
                                    <a href="/mojerezervacije/{{ $event->id }}/edit" class="izmjena"><i class="izmjena2"></i>
                                        Izmijeni</a>
                                </td>
                                <td class="row3">
                                    <form method="POST" action="/mojerezervacije/{{ $event->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button1"><i class="dugme1"></i> Obriši</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <p class="text-center">Nemate nijednu rezervaciju.</p>
                            </td>
                        </tr>
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <p><a href="/repertoar">Pogledaj repertoar</a></p>
                            </td>
                        </tr>
                    @endunless

                </tbody>
            </table>
        </div>
    </section>
@endsection
