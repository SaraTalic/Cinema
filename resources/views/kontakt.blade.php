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
                                <li><a class="font_tag actbr" href="/kontakt">Kontakt</a></li>
                            </ul>

                        </div><!-- /.nav-collapse -->
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section id="center" class="center_contact clearfix">
        <div class="center_contact_main clearfix">
            <iframe src="https://maps.google.com/maps?q=laus&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%"
                height="450px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="contact_1 clearfix">
                    <div class="contact_1_inner clearfix">
                        <h3>Adresa <a class="pull-right" href="/">Kino po tvojoj mjeri</a></h3>
                    </div>
                    <div class="contact_1_inner_1 clearfix">





                        <div class="col-sm-4">
                            <div class="contact_1_inner_1_left clearfix">
                                <h4><a href="#">KinoIzKraja<br> Banja Luka</a></h4>
                                <p>Karađorđeva, Lauš, Banja Luka, Republika Srpska</p>
                                <p class="para_1">Telefon: <br> <span>051/051-051</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact_last">
        <div class="container">
            <div class="row">
                @if (Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="col-sm-12">
                    <form method="POST" action="/kontakt" id="contactUSForm">
                        @csrf
                        <div class="contact_last_1 clearfix">
                            <h2>Piši nam</h2>
                            <p>Ime</p>
                            <input class="form-control" placeholder="Unesite Vaše ime" type="text" name="name">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                            <p>Email</p>
                            <input class="form-control" placeholder="Unesite Vaš email" type="text" name="email">
                            <div class="contact_last_1_inner clearfix">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif

                                <div class="col-sm-6 space_left">
                                    <p>Tip pitanja</p>
                                    <select name="subject" class="form-control">
                                        <option>Odaberi tip pitanja</option>
                                        <option>Pitanje o repertoaru</option>
                                        <option>Biznis pitanje</option>
                                        <option>Pitanje o rezervacijama</option>
                                        <option>Donacije</option>
                                        <option>Ostalo</option>
                                    </select>
                                </div>
                            </div>
                            <p>Tvoja poruka</p>
                            <textarea name="message" class="form-control form_1"></textarea>
                            @if ($errors->has('message'))
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                            @endif
                            <input class="submit_button" type="submit" name="submit" value="POŠALJI">
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection
