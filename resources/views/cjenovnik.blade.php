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
                                <li><a class="font_tag active_tag" href="/cjenovnik">Cjenovnik</a></li>
                                <li><a class="font_tag border_none_1" href="/kontakt">Kontakt</a></li>
                            </ul>

                        </div><!-- /.nav-collapse -->
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section id="cjenovnik">
        <div class="detail_main_right_2 clearfix">
            <h3>CJENOVNIK</h3>

            <ul>
                <li><span class="tag_1">Poslijepodne</span> <br><span class="tag_2">4.00 KM</span><br> <span
                        class="tag_3">Prije 17h</span></li>
                <li><span class="tag_1">Večernje</span> <br><span class="tag_2">5.00 KM</span><br> <span
                        class="tag_3">Poslije
                        17h</span></li>
                <li><span class="tag_1">Utorak</span> <br><span class="tag_2">3.00 KM</span><br> <span class="tag_3">Dan
                        za
                        kino</span></li>

            </ul>


        </div>
        <div class="menu_items clearfix">
            <div class="menu_item">
                <img src="images/kokice.png" alt="Kokice">
                <h4>Kokice</h4>
                <p>Srednje - 4.00 KM</p>
                <p>Velike - 6.00 KM</p>
            </div>
            <div class="menu_item">
                <img src="images/nacos.png" alt="Kokice">
                <h4>Naćosi</h4>
                <p>Srednji - 4.00 KM</p>
                <p>Veliki - 5.00 KM</p>
            </div>
        </div>
    </section>
@endsection
