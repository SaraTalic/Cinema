@extends('layout')

@section('content')
<section id="center" class="center_home clearfix">
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay"></div>
            
    <!-- <div class="carousel-inner">
        @foreach($movies as $movie)
        @if($movie->trending== 'yes')
            <div class="carousel-item active">
              <img src="images/{{$movie->logo}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-md-block">
               <h1 class="font_60"> {{$movie->title}}</h1>
               <h6 class="mt-3">
               Trajanje: {{$movie->duration}}
                 
               </h6>
               <p class="mt-3">{{$movie->description}}</p>
              
              </div>
            </div>
        @endif
        @endforeach
    </div> -->
</section>

<section id="booking">
    <div class="container">
     <div class="row">
      <div class="booking clearfix">
       <div class="col-sm-8">
        <div class="booking_left_main clearfix">
              <ul class="nav nav-tabs">
                 <li class="active"><a data-toggle="tab" href="#home">REPERTOAR</a></li>
                 <li><a data-toggle="tab" href="#menu1">POPULARNO</a></li>
                 <li><a data-toggle="tab" href="#menu2">USKORO</a></li>
              </ul>
   
               <div class="tab-content clearfix">
                 <div id="home" class="tab-pane fade in active clearfix">
                    <div class="click clearfix">
                     
                     <div class="click_2 clearfix">
                       @foreach($movies as $movie)
                       @if($movie->on_air == 'yes')
                       <x-movie-one-card :movie="$movie" />
                       @endif
                       @endforeach

                       
                     
                 </div>
                    </div>
                 </div>
                 <div id="menu1" class="tab-pane fade clearfix">
                    <div class="click clearfix">
                     
                     <div class="click_2 clearfix">
                       
                        @foreach($movies as $movie)
                            @if($movie->trending == 'yes')
                                <x-movie-one-card :movie="$movie" />
                            @endif
                       @endforeach
                      
                    </div>
                </div>
                 </div>
                 <div id="menu2" class="tab-pane fade in active clearfix">
                    <div class="click clearfix">
                     
                     <div class="click_2 clearfix">
                       @foreach($movies as $movie)
                       @if($movie->on_air == 'no')
                       <x-movie-one-card :movie="$movie" />
                       @endif
                       @endforeach

                       
                     
                 </div>
                    </div>
                 </div>
                
            
                            
                             
                </section>
            


      @endsection